<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Cities;
use App\Models\Product;
use App\Models\ProductImage;
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
    $categories = Category::whereIn('slug', ['mens', 'womens', 'accessories'])->whereStatus('Active')->take(3)->get();

    $womensSub1 = Subcategory::where('category_id', 2)->get()->slice(0, 2);
    $womensSub2 = Subcategory::where('category_id', 2)->get()->slice(2, 4);

    // $womenSubCategory = Subcategory::whereIn('slug')

    $mensSub = Subcategory::where('category_id', 3)->get()->slice(0, 4);
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    $mensMain = Category::where('slug', 'mens')->where('status', 'Active')->first();
    $accesoriesMain = Category::where('slug', 'accessories')->where('status', 'Active')->first();

    $womensMain = $categories->where('slug', 'womens')->first();
    $accesoriesSub = Subcategory::where('category_id', 4)->get()->slice(0, 4);
    // $categoryShop = Product::where('categoy_id', $categories->id)->get();

    $products = Product::orderBy('id', 'desc')->take(8)->get();
    $shops = Shop::where('status', 'Active')->get(['id', 'shop_logo']);
    return view($this->HOME_PATH, compact('slider', 'categories', 'accesoriesSub', 'womensSub1', 'womensSub2', 'mensSub', 'accesoriesMain', 'mensMain', 'womensMain', 'shops', 'products'));
  }

  function shop()
  {
    $products = Product::orderBy('id', 'asc')->get();
    $brands = Brand::get();

    $min = 10;
    $max = 9000;

    $allAttributes = Product::where('attributes', '!=', null)->pluck('attributes');
    $colorAttributesArr = [];
    $sizeAttributesArr = [];


    foreach ($allAttributes as $key => $attributes) {
      foreach (json_decode($attributes) as $attribute) {
        $itemArr = json_decode($attribute);
        $item = Attribute::find($itemArr[0]);
        if ($item->name == 'Color') {
          array_push($colorAttributesArr, $itemArr[1]);
        } elseif ($item->name == 'Size') {
          array_push($sizeAttributesArr, $itemArr[1]);
        }
      }
    }

    $colorAttributesArr = array_unique($colorAttributesArr);
    $sizeAttributesArr = array_unique($sizeAttributesArr);

    return view($this->VIEW_PATH . 'shop', compact(
      'products',
      'brands',
      'min',
      'max',
      'colorAttributesArr',
      'sizeAttributesArr'
    ));
  }

  function categoryShop($slug, $id)
  {
    $subcategory = Subcategory::with('products')->find($id);
    $productSQL = $subcategory->products;
    $products = $productSQL->skip(0)->take(12);
    $brandIds = array_unique($productSQL->pluck('brand_id')->toArray());
    $brands = Brand::find($brandIds);

    // $min = min($productSQL->pluck('price')->toArray());
    // $max = max($productSQL->pluck('price')->toArray());
    $min = 10;
    $max = 9000;

    $allAttributes = Product::where('attributes', '!=', null)->pluck('attributes');
    $colorAttributesArr = [];
    $sizeAttributesArr = [];

    foreach ($allAttributes as $key => $attributes) {
      foreach (json_decode($attributes) as $attribute) {
        $itemArr = json_decode($attribute);
        $item = Attribute::find($itemArr[0]);
        if ($item->name == 'Color') {
          array_push($colorAttributesArr, $itemArr[1]);
        } elseif ($item->name == 'Size') {
          array_push($sizeAttributesArr, $itemArr[1]);
        }
      }
    }

    $colorAttributesArr = array_unique($colorAttributesArr);
    $sizeAttributesArr = array_unique($sizeAttributesArr);

    return view($this->VIEW_PATH . 'shop', compact(
      'products',
      'subcategory',
      'brands',
      'min',
      'max',
      'colorAttributesArr',
      'sizeAttributesArr'
    ));
  }

  function productView($slug)
  {
    $product = Product::where('slug', $slug)->first();
    $reletedProduct = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->take(8);
    // return $product;
    return view($this->VIEW_PATH . 'productView', compact('product', 'reletedProduct'));
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

  function privacyPolicy()
  {
    return view($this->VIEW_PATH . 'privacyPolicy');
  }

  function sellerRegister(Subscription $subscription)
  {
    $sates = States::get();
    return view($this->VIEW_PATH . 'sellerRegister', compact('subscription', 'sates'));
  }
}
