<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  private $VIEW_PATH = "backend.";

  // public function __construct()
  // {
  //   $this->middleware('verified');
  // }


  public function dashboard()
  {
    return view($this->VIEW_PATH . 'dashboard');
  }
}
