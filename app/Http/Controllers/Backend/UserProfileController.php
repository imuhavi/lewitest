<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

  private $VIEW_PATH = 'backend.admin.';

  public function userProfile()
  {
    return view($this->VIEW_PATH . 'profile');
  }

  public function updateProfile(Request $request)
  {
    return resizeAndUploadImage($request->file('profile_photo'));
    return redirect()->back();
  }

}