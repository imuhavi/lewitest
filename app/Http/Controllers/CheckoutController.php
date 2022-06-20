<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\States;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  private $VIEW_PATH = 'frontend.pages.';

  public function checkout($slug = '')
  {
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
      }
    }
  }
}
