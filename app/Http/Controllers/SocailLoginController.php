<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocailLoginController extends Controller
{
  /**
   * Redirect the user to the GitHub authentication page.
   *
   * @return \Illuminate\Http\Response
   */
  public function redirectToGoogleProvider()
  {
    return Socialite::driver('google')->redirect();
  }

  /**
   * Obtain the user information from GitHub.
   *
   * @return \Illuminate\Http\Response
   */
  public function handleGoogleProviderCallback()
  {
    $user = Socialite::driver('google')->user();
    // $user->token;

    if (User::where('email', $user->getEmail())->where('provider_id', $user->getId())->exists()) {
      $getUser = User::where('email', $user->getEmail())->first();
      Auth::guard()->login($getUser, true);
      return redirect()->to(route('home'));
    } else {
      if (User::where('email', $user->getEmail())->exist()) {
        return redirect()->to(route('login'))->with('error', 'Email Already Register.');
      } else {
        $create_user = User::create([
          'name' => $user->getName(),
          'email' => $user->getEmail(),
          'provider_id' => $user->getId(),
          'provider' => 'google',
        ]);
        Auth::guard()->login($create_user, true);
        return redirect()->to(route('home'));
      }
    }
  }

  public function redirectToGithuProvider()
  {
    return Socialite::driver('github')->redirect();
  }

  public function handleGithubProviderCallback()
  {
    $user = Socialite::driver('github')->user();
    // $user->token;
  }
}
