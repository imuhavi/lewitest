<?php

namespace App\Http\Controllers;

use App\Mail\ShopCreated;
use App\Models\PaymentInvoice;
use App\Models\SellerTransaction;
use App\Models\Shop;
use App\Models\Subscription;
use App\Models\User;
use Basel\MyFatoorah\MyFatoorah;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MyFatoorahController extends Controller
{
  public $myfatoorah;

  public function __construct()
  {
    $this->myfatoorah = MyFatoorah::getInstance(true);
  }

  public function index(Request $r)
  {
    $user = User::find($r->user);
    $subscription = Subscription::find($r->subscription);
    $arr = [
      "user_id" => $user->id,
      "subscription_id" => $subscription->id,
      "paid_amount" => $r->payable_amount
    ];
    try {
      $result = $this->myfatoorah->sendPayment(
        'Customer Name',
        $r->payable_amount,
        [
          'CustomerMobile' => $user->phone_1,
          'CustomerReference' => $user->id,
          'UserDefinedField' => json_encode($arr),
          "InvoiceItems" => [
            [
              "ItemName" => $subscription->name,
              "Quantity" => 1,
              "UnitPrice" => $r->payable_amount
            ]
          ]
        ]
      );
      if ($result && $result['IsSuccess'] == true) {
        return redirect($result['Data']['InvoiceURL']);
      }
    } catch (Exception $e) {
      dd($e, $e->getResponse()->getBody()->getContents());
    }
  }

  public function successCallback(Request $request)
  {
    if (array_key_exists('paymentId', $request->all())) {
      $result = $this->myfatoorah->getPaymentStatus('paymentId', $request->paymentId);
      if ($result && $result['IsSuccess'] == true && $result['Data']['InvoiceStatus'] == "Paid") {
        $this->createInvoice($result['Data']);
        return redirect('/seller/dashboard')->with('success', 'Subscribe successfully !');
        // echo "success payment";
      }
    }
  }

  public function failCallback(Request $request)
  {
    if (array_key_exists('paymentId', $request->all())) {
      $result = $this->myfatoorah->getPaymentStatus('paymentId', $request->paymentId);
      if ($result && $result['IsSuccess'] == true && $result['Data']['InvoiceStatus'] == "Pending") {
        $error = end($result['Data']['InvoiceTransactions'])['Error'];
        echo "Error => " . $error;
      }
    }
  }

  public function createInvoice($request)
  {
    $UserDefinedField = json_decode($request['UserDefinedField']);

    unset($request['UserDefinedField']);

    $paymentarray = array_merge($request, end($request['InvoiceTransactions']));
    $paymentarray['order_id'] = $paymentarray['CustomerReference'];
    $paymentarray['client_id'] = $UserDefinedField->user_id;
    $paymentarray['TransactionId'] = $request['InvoiceId'];

    $PaymentInvoice = PaymentInvoice::create($paymentarray);

    $shop = Shop::where('user_id', $UserDefinedField->user_id)->first();
    $shop->update([
      'status' => 'Active'
    ]);

    // Create a transaction table including user_id, payment method, payment invoice, amount, status.
    SellerTransaction::create([
      'user_id' => $UserDefinedField->user_id,
      'payment_invoice_id' => $PaymentInvoice->id,
      'amount' => $PaymentInvoice->InvoiceDisplayValue
    ]);
    $user = User::find($UserDefinedField->user_id);
    event(new Registered($user));
    Mail::to($user->email)->send(new ShopCreated($shop));
    return true;
  }
}
