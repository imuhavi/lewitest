<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    $cart = session('cart');

    $newCart = [
      'product_id' => $request->product_id,
      'quantity' => $request->quantity,
      'color' => $request->color,
      'size' => $request->size
    ];

    // return $cart;
    if ($request->session()->exists('cart')) {
      $cart->increment('quantity');
    }




    /* Validations (add the validations here at first)
      1. Already added product
      2. Min qnty
      3. Max qnty
    */
    session()->push('cart', $newCart);
    return response()->json('Product added successfully !');
  }
}
