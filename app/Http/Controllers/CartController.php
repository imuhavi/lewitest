<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartController extends Controller
{
  private $VIEW_PATH = 'frontend.pages.';

  public function myCart()
  {
    $data = '';
    return view($this->VIEW_PATH . 'cart', compact('data'));
  }

  public function addToCart(Request $request)
  {

    // return $request->all();
    $cart = new Cart;
    $cart->product_id = $request->productId;
    $cart->quantity = $request->quantity;
    $cart->color = $request->color;
    $cart->size = $request->size;
    $cart->save();

    // return ($request->all());
    // $userId = Auth::id();
    // $oldCookie_id = $request->cookie('cookie_id');
    // if ($oldCookie_id) {
    //   $cookie_id = $oldCookie_id;
    // } else {
    //   $minutes = 48900;
    //   $cookie_id = Str::random(10);
    //   Cookie::queue('cookie_id', $cookie_id, $minutes);
    // }

    // $product_id = Product::findOrFail($request->productId)->id;
    // $carts = Cart::where('product_id', $product_id);

    // if ($carts->exists()) {
    //   $carts->increment('quantity', $request->quantity);
    //   return back()->with('success', 'Cart product Update successfully');
    // } else {
    //   $cart = new Cart;
    //   $cart->cookie_id = $cookie_id;
    //   $cart->product_id = $product_id;
    //   $cart->quantity = $request->quantity;
    //   $cart->color = $request->color;
    //   $cart->size = $request->size;
    //   $cart->save();
    //   $notification = array(
    //     'message' => 'Add to cart product successfully',
    //     'alert-type' => 'success'
    //   );
    //   // Toastr Alert
    //   return back()->with($notification);
    // }
  }
}
