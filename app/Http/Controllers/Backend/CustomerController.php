<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

  private $VIEW_PATH = 'backend.customer.index';

  public function customerList()
  {
    $page = 'index';
    $data = User::where('role', 'Customer')->paginate(3);
    return view($this->VIEW_PATH, compact('data', 'page'));
  }

  // Display Individual Customer Profile and Details.
  public function customerShow($id)
  {
    $page = 'show';
    $data = User::where('id', $id)->first();
    return view($this->VIEW_PATH, compact('page', 'data'));
  }


  public function distroy($id)
  {
    // 
  }
}
