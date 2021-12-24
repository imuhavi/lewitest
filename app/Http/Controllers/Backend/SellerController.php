<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  private $VIEW_PATH = 'backend.seller.';

  public function sellerList()
  {
    return view($this->VIEW_PATH . 'index');
  }


  public function paymentWithdraw()
  {
    return view($this->VIEW_PATH . 'withdraw');
  }
}
