<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
  private $VIEW_PATH = 'backend.settings.';


  public function settings()
  {
    return view($this->VIEW_PATH . 'index');
  }
}
