<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shop;

class ShopController extends Controller
{
  public function statusChange(Shop $shop)
  {
    $products = Product::whereUserId($shop->user_id)->get();
    if ($shop->status == 'Active') {
      $shop->update([
        'status' => 'Inactive'
      ]);
      foreach ($products as $product) {
        $product->update([
          'status' => 'Inactive'
        ]);
      }
    } else {
      $shop->update([
        'status' => 'Active'
      ]);
      foreach ($products as $product) {
        $product->update([
          'status' => 'Active'
        ]);
      }
    }
    return redirect()->back()->with('success', 'Shop status updated successfully.');
  }
}
