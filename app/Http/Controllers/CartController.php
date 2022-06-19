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
    $alreadyAdded = false;
    $reqCart = [
      'product_id' => intval($request->product_id),
      'quantity' => intval($request->quantity),
      'color' => $request->color,
      'size' => $request->size
    ];
    $newCart = [];
    $session = session('cart') ?? [];

    foreach ($session as $item) {
      if ($item['product_id'] == $reqCart['product_id'] && $item['color'] == $reqCart['color'] && $item['size'] == $reqCart['size']) {
        $item['quantity'] += intval($reqCart['quantity']);
        $alreadyAdded = true;
      }
      $newCart[] = $item;
    }
    if ($alreadyAdded == true) {
      session()->forget('cart');
      session()->put('cart', $newCart);
    } elseif ($alreadyAdded == false) {
      session()->push('cart', $reqCart);
    }
    return response()->json('Product added successfully !');
  }

  public function removeCart($key)
  {
    $session = session('cart');
    unset($session[$key]);
    session()->forget('cart');
    session()->put('cart', $session);
    return response()->json('Product removed !');
  }
}
