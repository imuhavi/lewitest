<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\UpdateOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
  private $VIEW_PATH = "backend.";

  public function dashboard()
  {
    $customers = User::whereRole('Customer')->count();
    $products = Product::whereStatus('Active')->count();
    $shops = Shop::whereStatus('Active')->count();
    $sales = Order::whereStatus('Complete')->value(DB::raw("SUM(amount - coupon_discount_amount)"));
    $orders = Order::whereStatus('Pending')->latest()->take(10)->get();
    $pending_amount = $orders->sum('amount') - $orders->sum('coupon_discount_amount');
    return view($this->VIEW_PATH . 'dashboard', compact('customers', 'products', 'shops', 'sales', 'orders', 'pending_amount'));
  }


  public function orderList(Request $request)
  {
    $sql = Order::orderBy('created_at', 'DESC');

    $page = 'index';
    $keyword = '';
    if ($request->keyword) {
      $keyword = $request->keyword;
      $sql->whereHas('user', function ($q) use ($keyword) {
        $q->where('name', 'like', '%' . $keyword . '%');
      })
        ->orWhere('id', $keyword)
        ->orWhere('payment_method', 'like', '%' . $keyword . '%')
        ->orWhere('status', 'like', '%' . $keyword . '%');
    }

    $orders = $sql->paginate(10);
    return view($this->VIEW_PATH . 'orders.index', compact('orders', 'keyword', 'page'));
  }

  public function show(Order $order, $id)
  {
    $page = 'show';
    $singgleOrder = $order->findOrFail($id);
    return view($this->VIEW_PATH . 'orders.index', compact('singgleOrder', 'page'));
  }

  public function updateStatus(Order $order, $status)
  {
    $order->update([
      'status' => ucfirst($status)
    ]);

    Mail::to($order->user->email)->send(new UpdateOrder($order));

    Alert::success('Status !', 'Status updated successfully !');
    return redirect()->back();
  }
}
