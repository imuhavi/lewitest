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
    $cart = [
      'product_id' => $request->product_id,
      'quantity' => $request->quantity,
      'color' => $request->color,
      'size' => $request->size
    ];
    /* Validations (add the validations here at first)
      1. Already added product
      2. Min qnty
      3. Max qnty
    */
    session()->push('cart', $cart);
    return response()->json('Product added successfully !', 200);
  }
}
