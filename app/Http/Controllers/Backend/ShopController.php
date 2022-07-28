<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shop;

class ShopController extends Controller
{
  public function statusChange(Shop $shop)
  {
    if ($shop->status == 'Active') {
      $shop->update([
        'status' => 'Inactive'
      ]);
    } else {
      $shop->update([
        'status' => 'Active'
      ]);
    }
    return redirect()->back()->with('success', 'Shop status updated successfully.');
  }
}
