<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function subscribe(Request $r, Subscription $subscription)
    {
        $r->validate([
            'full_name' => 'required',
            'shop_name' => 'required|unique:shops',
            'shop_logo' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'state' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'address' => 'required'
        ]);
        if(auth()->guest()){
            $r->validate([
                'password' => 'required|min:6|max:32',
                'confirm_password' => 'required|min:6|max:32|same:password'
            ]);
            $user = User::create([
                'name' => $r->full_name,
                'email' => $r->email,
                'password' => bcrypt($r->password),
                'role' => 'Seller',
                'phone_1' => $r->phone,
                'address' => $r->address
            ]);
            Auth::login($user);
        }else{
            $user = auth()->user();
        }

        if ($r->file('shop_logo')) {
            uploadImage($r->file('shop_logo'));
        }
        Shop::create([
            'user_id' => $user->id,
            'subscription_id' => $subscription->id,
            'shop_name' => $r->shop_name,
            'shop_logo' => session('fileName'),
            'state' => $r->state,
            'city' => $r->city,
            'postal_code' => $r->postal_code,
            'address' => $r->address
        ]);
        
        if($r->payment_method == 'MyFatoorah'){
          return redirect(route('MyFatoorah.index', [
              'user' => $user,
              'subscription' => $subscription,
              'payable_amount' => $r->payable_amount
          ]));
        };
    }
}
