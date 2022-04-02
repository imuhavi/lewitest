<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

  private $VIEW_PATH = 'backend.profile';

  public function userProfile()
  {
    return view($this->VIEW_PATH);
  }

  public function updateProfile(Request $request)
  {
    $request->validate([
      'full_name' => 'required|min:2|max:20',
      'phone' => 'nullable|min:11|max:17',
      'mobile' => 'nullable|min:11|max:17',
      'address' => 'max:200'
    ]);
    try {
      $user = User::find(auth()->user()->id);

      if ($request->file('profile_photo')) {
        if ($user->avatar) {
          if(hasFile($user->avatar)){
            removeImage($user->avatar);
          }
        }
        uploadImage($request->file('profile_photo'));
      }

      $user->update([
        'name' => $request->full_name,
        'phone_1' => $request->phone,
        'phone_2' => $request->mobile,
        'address' => $request->address,
        'avatar' => session('fileName') ?? $user->avatar, // You will get file name for one time use on session after successfully upload
      ]);
      return redirect()->back()->with('success', 'Profile updated successfully !');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }

  public function updatePassword(Request $request)
  {
    $request->validate([
      'current_password' => 'required|min:6|max:32',
      'password' => 'required|min:6|max:32|confirmed'
    ]);
    try {
      $user = User::find(auth()->user()->id);
      if (password_verify($request->current_password, $user->password)) {
        $user->update([
          'password' => bcrypt($request->password)
        ]);
        return redirect()->back()->with('success', 'Password updated successfully.');
      }
      return redirect()->back()->with('warning', 'Current password does not match.');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }
}
