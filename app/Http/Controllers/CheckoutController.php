<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\States;
use App\Models\Transaction;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
  private $VIEW_PATH = 'frontend.pages.';

  public function checkout()
  {
    if (session('cart')) {
      $states = States::get();
      return view($this->VIEW_PATH . 'checkout', compact('states'));
    }
    return redirect('/');
  }

  public function coupon(Request $request)
  {
    try {
      $cart = getCart();
      $coupon = Coupon::where('code', $request->coupon)->first();
      if (!empty($coupon)) {
        if (Carbon::now()->format('Y-m-d') <= $coupon->end) {
          if ($cart['total'] >= $coupon->min_shopping_amount) {
            if ($coupon->type == 'Cart') {
              $discount = $coupon->discount;
            } elseif ($coupon->type == 'Product') {
              // $discount = $coupon->discount;
            } elseif ($coupon->type == 'Category') {
              // $discount = $coupon->discount;
            }
            if ($coupon->discount_type == 'Percent') {
              $discount = $cart['total'] * ($discount / 100);
            }
            if ($discount > $coupon->max_discount_amount) {
              $discount = $coupon->max_discount_amount;
            }
            Session::put('coupon', [
              'discount' => $discount,
              'code' => $coupon->code
            ]);
            return redirect()->back()->with('success', 'Coupon added successfully !');
          }
          return redirect()->back()->with('error', 'Minimum shopping amount not added for this coupon !');
        }
        return redirect()->back()->with('error', 'Expired coupon !');
      }
      return redirect()->back()->with('error', 'Invalid coupon !');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }

  public function removeCoupon()
  {
    Session::forget('coupon');
    return redirect()->back()->with('info', 'Coupon removed successfully !');
  }

  public function orderPlace(Request $request)
  {
    return $request->all();
    // Validation Here
    $request->validate([
      'phone' => 'required',
      'state' => 'required',
      'city' => 'required',
      'postal_code' => 'required',
      'address' => 'required'
    ]);

    $name = Auth()->name;
    return $name;

    DB::beginTransaction();
    try {
      $cart = getCart();
      $coupon = Session::get('coupon');
      if ($request->payment_method == 'COD') {
        $userDetails = new UserDetail;
        $userDetails->phone = $request->phone;
        $userDetails->state = $request->state;
        $userDetails->city = $request->city;
        $userDetails->postal_code = $request->postal_code;
        $userDetails->address = $request->address;
        $userDetails->save();

        $order = new Order;
        $order->user_id = Auth()->id;
        $order->coupon_id = $coupon['code'];
        $order->shipping_cost = 30;
        $order->amount = $cart['total'];
        $order->payment_method = 'COD';
        $order->save();

        foreach ($cart['cart'] as $item) {
          $product = Product::findOrFail($item->product_id);
          $orderDetails = new OrderDetails;
          $orderDetails->order_id = $order->id;
          $orderDetails->seller_id = $product->seller_id;
          $orderDetails->product_id = $product->id;
          $orderDetails->price = $order->amount;
          $orderDetails->color = $item->ucfirst($item['color']);
          $orderDetails->size = $item->ucfirst($item['size']);
          $orderDetails->save();
        }
        $transaction = new Transaction;
        $transaction->user_id = Auth()->id;
        $transaction->order_id = $order->id;
        $transaction->amount = $order->amount;
        $transaction->save();
      }
      DB::commit();
    } catch (\Exception $e) {
      DB::rollback();
    }
  }
}
