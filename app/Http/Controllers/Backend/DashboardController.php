<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  private $VIEW_PATH = "backend.";

  public function dashboard()
  {
    return view($this->VIEW_PATH . 'dashboard');
  }


  public function orderList(Request $request)
  {
    $sql = Order::orderBy('created_at', 'DESC')->get();

    $keyword = '';
    if ($request->keyword) {
      $keyword = $request->keyword;
      $sql->where('id', 'like', '%' . $keyword . '%')
        ->orWhere('user_id', 'like', '%' . $keyword . '%')
        ->orWhere('coupon_discount_amount', 'like', '%' . $keyword . '%')
        ->orWhere('payment_method', 'like', '%' . $keyword . '%')
        ->orWhere('status', 'like', '%' . $keyword . '%')
        ->orWhere('unit', 'like', '%' . $keyword . '%');
    }

    $orders = $sql;

    return view($this->VIEW_PATH . 'orders.index', compact('orders', 'keyword'));
  }
}
