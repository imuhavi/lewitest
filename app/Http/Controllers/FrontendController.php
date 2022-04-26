<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  function frontend()
  {
    return view('frontend.frontend');
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
    return view('frontend.pages.subscription');
  }

  function sellerRegister()
  {
    return view('frontend.pages.sellerRegister');
  }
}
