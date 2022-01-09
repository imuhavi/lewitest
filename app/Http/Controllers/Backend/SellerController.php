<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  private $VIEW_PATH = 'backend.seller.index';
  private $SELLER_PROFILE = 'backend.seller.profile';
  
  public function sellerList(Request $request)
  {
    $page = 'index';
    
    $sql = User::where('role', 'Seller')->latest();
    
    $search = '';
    if($request->search){
      $search = $request->search;
      $sql->where('name', 'like', '%' . $search  . '%')
          ->orWhere('email', 'like', '%' . $search  . '%')
          ->orWhere('phone_1', 'like', '%' . $search  . '%')
          ->orWhere('phone_2', 'like', '%' . $search  . '%');
    }

    $data = $sql->paginate(10);
    return view($this->VIEW_PATH, compact('page', 'data', 'search'));
  }

  public function sellerShow($id)
  {
    $page = 'show';
    $data = Seller::where('user_id', $id)->first();
    return view($this->SELLER_PROFILE, compact('page', 'data'));
  }

  public function paymentWithdraw()
  {
    return view($this->VIEW_PATH . 'withdraw');
  }
}
