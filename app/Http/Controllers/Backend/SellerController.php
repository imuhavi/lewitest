<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  private $VIEW_PATH = 'backend.seller.index';

  public function sellerList()
  {
    $page = 'index';
    $data = User::where('role', 'Seller')->latest()->paginate(10);
    return view($this->VIEW_PATH, compact('page', 'data'));
  }

  // Display Individual Seller Profile and Details.
  public function sellerShow($id)
  {
    $page = 'show';
    $data = User::where('id', $id)->first();
    return view($this->VIEW_PATH, compact('page', 'data'));
  }


  public function paymentWithdraw()
  {
    return view($this->VIEW_PATH . 'withdraw');
  }
}
