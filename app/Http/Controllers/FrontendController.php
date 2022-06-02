<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cities;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\States;
use App\Models\Subcategory;
use App\Models\Subscription;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  private $HOME_PATH = 'frontend.frontend';
  private $VIEW_PATH = 'frontend.pages.';

  function frontend()
  {
    $slider = Slider::where('status', 'Active')->get();
    $womensSub1 = Subcategory::where('category_id', 2)->get()->slice(0, 2);
    $womensSub2 = Subcategory::where('category_id', 2)->get()->slice(2, 4);
    $mensSub = Subcategory::where('category_id', 3)->get()->slice(0, 4);
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    $mensMain = Category::where('slug', 'mens')->where('status', 'Active')->first();
    $accesoriesMain = Category::where('slug', 'accessories')->where('status', 'Active')->first();
    $categories = Category::whereIn('slug', ['mens', 'womens', 'accessories'])->whereStatus('Active')->take(3)->get();
    $womensMain = $categories->where('slug', 'womens')->first();
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    $products = Product::orderBy('id', 'desc')->take(8)->get();
    $shops = Shop::where('status', 'Active')->get(['id', 'shop_logo']);
    return view($this->HOME_PATH, compact('slider', 'categories', 'accesoriesSub', 'womensSub1', 'womensSub2', 'mensSub', 'accesoriesMain', 'mensMain', 'womensMain', 'shops', 'products'));
  }

  function shop()
  {
    $products = Product::orderBy('id', 'asc')->get();
    return view($this->VIEW_PATH . 'shop', compact('products'));
  }

  function categoryShop($slug, $id)
  {
    $products = Product::where('sub_category_id', $id)->orderBy('id', 'asc')->get();

    $subcategory = Subcategory::where('slug', $slug)->first();
    return view($this->VIEW_PATH . 'shop', compact('products', 'subcategory'));
  }

  function singleProductView($slug)
  {

    return view($this->VIEW_PATH . 'productView');
  }


  function cart()
  {
    return view($this->VIEW_PATH . 'cart');
  }

  function wishlist()
  {
    return view($this->VIEW_PATH . 'wishlist');
  }

  function checkout()
  {
    return view($this->VIEW_PATH . 'checkout');
  }

  function subscription()
  {
    $data = Subscription::with('subscriptionOptions')->get();
    return view($this->VIEW_PATH . 'subscription', compact('data'));
  }

  function getCity($stateId)
  {
    $city = Cities::where('state_id', $stateId)->get();
    return response()->json($city);
  }

  function termsAndCondition()
  {
    return view($this->VIEW_PATH . 'termsAndCondition');
  }

  function sellerRegister(Subscription $subscription)
  {
    $sates = States::get();
    return view($this->VIEW_PATH . 'sellerRegister', compact('subscription', 'sates'));
  }
}
