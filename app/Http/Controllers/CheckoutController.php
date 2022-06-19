<?php

namespace App\Http\Controllers;

use App\Models\States;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  private $VIEW_PATH = 'frontend.pages.';

  public function checkout()
  {
    $states = States::get();
    return view($this->VIEW_PATH . 'checkout', compact('states'));
  }
}
