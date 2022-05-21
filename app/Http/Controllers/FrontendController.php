<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cities;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\States;
use App\Models\Subcategory;
use App\Models\Subscription;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  private $VIEW_PATH = 'frontend.frontend';
  
  function frontend(){
    $slider = Slider::where('status', 'Active')->get();
    $womensSub1 = Subcategory::where('category_id', 2)->get()->slice(0, 2);
    $womensSub2 = Subcategory::where('category_id', 2)->get()->slice(2, 4);
    $mensSub = Subcategory::where('category_id', 3)->get()->slice(0, 4);
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    $mensMain = Category::where('slug', 'mens')->where('status', 'Active')->first();
    // $womensMain = Category::where('slug', 'womens')->where('status', 'Active')->first();
    $accesoriesMain = Category::where('slug', 'accessories')->where('status', 'Active')->first();
    $categories = Category::whereIn('slug', ['mens', 'womens', 'accessories'])->whereStatus('Active')->take(3)->get();
    $womensMain = $categories->where('slug', 'womens')->first();
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    return view('frontend.pages.shop');
  }

  function singleProductView($slug){
    return view('frontend.pages.productView');
  }


  function cart(){
    return view('frontend.pages.cart');
  }

  function wishlist(){
    return view('frontend.pages.wishlist');
  }

  function checkout(){
    return view('frontend.pages.checkout');
  }

  function subscription(){
    $data = Subscription::with('subscriptionOptions')->get();
    return view('frontend.pages.subscription', compact('data'));
  }

  function getCity($stateId){
    // return Cities::all();
    $city = Cities::where('state_id', $stateId)->get();
    return response()->json($city);
  }

  function sellerRegister(Subscription $subscription){
    $sates = States::get();
    return view('frontend.pages.sellerRegister', compact('subscription', 'sates'));
  }
}