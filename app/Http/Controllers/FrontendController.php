<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Slider;
use App\Models\Subcategory;
=======
use App\Models\Subscription;
>>>>>>> 97d2956ef70bdf8628fd8688679a9fe970602365
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  function frontend()
  {
    $slider = Slider::where('status', 'active')->get();
    $womensSub1 = Subcategory::where('category_id', 3)->get()->slice(0, 2);
    $womensSub2 = Subcategory::where('category_id', 3)->get()->slice(2, 4);
    $mensSub = Subcategory::where('category_id', 2)->get()->slice(0, 4);
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    return view('frontend.frontend', [
      'slider' => $slider,
      'womensSub1' => $womensSub1,
      'womensSub2' => $womensSub2,
      'mensSub' => $mensSub,
      'accesoriesSub' => $accesoriesSub
    ]);
  }

  function shop()
  {
    return view('frontend.pages.shop');
  }

  function singleProductView($slug)
  {
    return view('frontend.pages.productView');
  }


  function cart()
  {
    return view('frontend.pages.cart');
  }

  function wishlist()
  {
    return view('frontend.pages.wishlist');
  }

  function checkout()
  {
    return view('frontend.pages.checkout');
  }

  function subscription()
  {
    $data = Subscription::with('subscriptionOptions')->get();
    return view('frontend.pages.subscription', compact('data'));
  }

  function sellerRegister(Subscription $subscription)
  {
    return view('frontend.pages.sellerRegister', compact('subscription'));
  }
}
