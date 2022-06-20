<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\States;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  private $VIEW_PATH = 'frontend.pages.';

  public function checkout()
  {
<<<<<<< HEAD
    if (session('cart')) {
      $states = States::get();
      return view($this->VIEW_PATH . 'checkout', compact('states'));
    }
    return redirect('/');
  }

  public function coupon(Request $request)
  {
    try {

      $coupon_code = $request->coupon;

      if ($coupon_code !== null) {
        $cart = getCart();
        // return $cart['total'];
        $coupon = Coupon::where('code', $coupon_code)->first();
        $isCouponHave = Coupon::where('code', $coupon->code)->exists();
        if ($isCouponHave) {
          if (Carbon::now()->format('Y-m-d') <= $coupon->end) {
            if ($coupon->discount_type == 'Percent' && $cart['total'] <= $coupon->max_discount_amount  && $cart['total'] >= $coupon->min_shopping_amount) {
              return 'valid';
            } else {
              return 'Invalid';
            }
            // 
          } else {
            return back()->with('message', 'Expired Coupon');
          }
        } else {

          return back()->with('message', 'Invalid Coupon');
        }
=======
    if ($slug == '') {
      if (session('cart')) {
        $states = States::get();
        return view($this->VIEW_PATH . 'checkout', compact('states'));
      }
      return redirect('/');
    } else {
      $isCouponHave = Coupon::where('code', $slug)->exists();
      if ($isCouponHave) {
        return "coupon achy ";
        // if (session('cart')) {
        //   $states = States::get();
        //   $coupon = $slug;
        //   return view($this->VIEW_PATH . 'checkout', compact('states', 'coupon'));
        // }
        // return redirect('/');
      } else {
        session()->flash('message', 'Invalid Coupon !');
        return redirect()->back();
>>>>>>> 52359fd0bbe024f52684796f576d6af3ff740d58
      }

      return redirect()->back();
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }
}
