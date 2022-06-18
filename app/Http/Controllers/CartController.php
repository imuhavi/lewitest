<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      1. Already added product (quantity, color & size)
      2. Min qnty - Skip
      3. Max qnty - Skip
    */
    session()->push('cart', $cart);
    return response()->json('Product added successfully !', 200);
  }
}
