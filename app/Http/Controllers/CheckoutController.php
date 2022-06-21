<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\States;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
            if($cart['total'] >= $coupon->min_shopping_amount){
              if($coupon->type == 'Cart'){
                $discount = $coupon->discount;
              }elseif ($coupon->type == 'Product') {
                // $discount = $coupon->discount;
              }elseif ($coupon->type == 'Category') {
                // $discount = $coupon->discount;
              }
              if($coupon->discount_type == 'Percent'){
                $discount = $cart['total'] * ($discount / 100);
              }
              if($discount > $coupon->max_discount_amount){
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
}
