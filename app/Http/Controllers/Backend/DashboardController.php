<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\UpdateOrder;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExport;
use Barryvdh\DomPDF\Facade\Pdf;

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

    //  Unpaid & Payment method Card dekha jabe na.
    if (auth()->user()->role == "Seller") {
      $seller_products_id = auth()->user()->product->pluck('id');
      $orders_id = array_unique(OrderDetails::whereIn('product_id', $seller_products_id)->pluck('order_id')->toArray());
      $sql = Order::orderBy('created_at', 'DESC')->whereIn('id', $orders_id);
    } elseif (auth()->user()->role == "Customer") {
      $sql = Order::orderBy('created_at', 'DESC')->where('user_id', auth()->id());
    } else {
      $sql = Order::orderBy('created_at', 'DESC');
    }

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

    $orders = $sql->paginate(5);
    return view($this->VIEW_PATH . 'orders.index', compact('orders', 'keyword', 'page'));
  }

  public function customerList()
  {
    $seller_products_id = auth()->user()->product->pluck('id');
    $orders_id = array_unique(OrderDetails::whereIn('product_id', $seller_products_id)->pluck('order_id')->toArray());
    $users = array_unique(Order::orderBy('created_at', 'DESC')->whereIn('id', $orders_id)->pluck('user_id')->toArray());
    $data = User::whereIn('id', $users)->paginate(10);
    return view($this->VIEW_PATH . 'seller.customer', compact('data'));
  }

  public function show(Order $order, $id)
  {
    $page = 'show';
    $singleOrder = $order->findOrFail($id);
    return view($this->VIEW_PATH . 'orders.index', compact('singleOrder', 'page'));
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

  public function download(Request $request)
  {
    $from = date('Y-m-d', strtotime($request->from));
    $to = date('Y-m-d', strtotime($request->to));
    if ($request->excel) {
      return Excel::download(new OrderExport($from, $to), 'orders.xlsx');
    } else {
      $orders = Order::whereBetween('created_at', [$from, $to])->get();
      $pdf = Pdf::loadView('exports.orders', compact('orders'));
      return $pdf->download('orders.pdf');
    }
  }
}
