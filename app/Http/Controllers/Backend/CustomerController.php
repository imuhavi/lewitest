<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

  private $VIEW_PATH = 'backend.customer.';

  public function customerList()
  {
    return view($this->VIEW_PATH . 'index');
  }
}
