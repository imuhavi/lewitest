<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
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
    $sql = Order::orderBy('created_at', 'DESC');

    $keyword = '';
    if ($request->keyword) {

      $keyword = $request->keyword;
      $sql->where('id', 'like', '%' . $keyword . '%')
        ->whereHas('user', function ($query) use ($keyword) {
          $query->where('name', 'like', '%' . $keyword . '%');
        })
        ->orWhere('payment_method', 'like', '%' . $keyword . '%')
        ->orWhere('status', 'like', '%' . $keyword . '%');
    }

    $orders = $sql->paginate(2);

    return view($this->VIEW_PATH . 'orders.index', compact('orders', 'keyword'));
  }
}
