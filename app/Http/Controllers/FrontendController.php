<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Banner;
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
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
  private $HOME_PATH = 'frontend.frontend';
  private $VIEW_PATH = 'frontend.pages.';

  function frontend()
  {
    $slider = Slider::where('status', 'Active')->get();
    $categories = Category::whereIn('id', ['2', '3'])->whereStatus('Active')->take(3)->get();
    $womensSub1 = Subcategory::where('category_id', 2)->get()->slice(0, 2);
    $womensSub2 = Subcategory::where('category_id', 2)->get()->slice(2, 4);
    $mensSub = Subcategory::where('category_id', 3)->get()->slice(0, 4);
    $mensMain = Category::where('id', '3')->where('status', 'Active')->first();
    $womensMain = $categories->where('id', '2')->first();
    $products = Product::whereStatus('Active')->orderBy('id', 'desc')->take(8)->get();
    $shops = Shop::where('status', 'Active')->get(['id', 'shop_logo']);
    $bannerOne = Banner::where('position', 'one')->first();
    $bannerTwo = Banner::where('position', 'two')->first();
    $bannerThree = Banner::where('position', 'three')->first();
    return view($this->HOME_PATH, compact('slider', 'categories', 'womensSub1', 'womensSub2', 'mensSub', 'mensMain', 'womensMain', 'shops', 'products', 'bannerOne', 'bannerTwo', 'bannerThree'));
  }

  function shop()
  {
    $products = Product::orderBy('id', 'asc')->get();

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
      'min',
      'max',
      'colorAttributesArr',
      'sizeAttributesArr'
    ));
  }

  function subCategoryShop($slug, $id)
  {

    $page = 'subCategoryShop';
    $subcategory = Subcategory::find($id);

    $tem_product = Product::where('status', 'Active')->get();

    $products = [];
    $arrayPrice = [];

    foreach ($tem_product as $item) {
      if (in_array($id, json_decode($item->sub_category_id))) {
        array_push($products, $item);
        array_push($arrayPrice, $item->price);
      }
    }

    // $minimumPrices = $products->pluck('price')->toArray(); // Issues working
    // $maximumPrices = $products->pluck('price')->toArray(); // Issues working

    $min = min(count($arrayPrice) === 0 ? [0] : $arrayPrice);
    $max = max(count($arrayPrice) === 0 ? [0] : $arrayPrice);

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
      'page',
      'subcategory',
      'min',
      'max',
      'colorAttributesArr',
      'sizeAttributesArr'
    ));
  }

  function categoryShop($slug, $id)
  {
    $page = 'categoryShop';
    $category = Category::find($id);

    $tem_product = Product::where('status', 'Active')->get();

    $products = [];
    $arrayPrice = [];

    foreach ($tem_product as $item) {
      if (in_array($id, json_decode($item->category_id))) {
        array_push($products, $item);
        array_push($arrayPrice, $item->price);
      }
    }


    $min = min(count($arrayPrice) === 0 ? [0] : $arrayPrice);
    $max = max(count($arrayPrice) === 0 ? [0] : $arrayPrice);

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
      'page',
      'category',
      'min',
      'max',
      'colorAttributesArr',
      'sizeAttributesArr'
    ));
  }

  public function filterProducts(Request $r)
  {
    $take = 12;

    if ($r->cat_or_sub == 'categoryShop') {
      $sql = Product::where('category_id', $r->category);
    } elseif ($r->cat_or_sub == 'subCategoryShop') {
      $sql = Product::where('sub_category_id', $r->category);
    } elseif ($r->cat_or_sub == '') {
      $sql = Product::whereStatus('Active');
    }

    if ($r->min) {
      $sql->where('price', '>=', $r->min);
    }
    if ($r->max) {
      $sql->where('price', '<=', $r->max);
    }
    if ($r->filterBy) {
      $sql->orderBy('updated_at', $r->filterBy);
    }
    if ($r->color) {
      $sql->where('attributes', 'like', '%' . $r->color . '%');
    }
    if ($r->size) {
      $sql->where('attributes', 'like', '%' . $r->size . '%');
    }
    $data = $sql->whereStatus('Active')->skip($r->skip)->take($take)->get();
    return view('frontend.includes.product', compact('data'));
  }

  function productView($slug)
  {
    $product = Product::where('slug', $slug)->first();
    $reletedProduct = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->where('status', 'Active')->take(8)->get();

    $colors = [];
    $sizes = [];

    if ($product->attributes) {
      foreach (json_decode($product->attributes) as $attribute) {
        $itemArr = json_decode($attribute);
        $item = Attribute::find($itemArr[0]);
        if ($item->name == 'Color') {
          array_push($colors, $itemArr[1]);
        } elseif ($item->name == 'Size') {
          array_push($sizes, $itemArr[1]);
        }
      }
      $colors = array_unique($colors);
      $sizes = array_unique($sizes);
    }
    return view($this->VIEW_PATH . 'productView', compact('product', 'reletedProduct', 'colors', 'sizes'));
  }

  function wishlist()
  {
    return view($this->VIEW_PATH . 'wishlist');
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
    $states = States::get();
    return view($this->VIEW_PATH . 'sellerRegister', compact('subscription', 'states'));
  }
}
