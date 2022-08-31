<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class SellerController extends Controller
{
  private $VIEW_PATH = 'backend.seller.';
  private $SELLER_PROFILE = 'backend.seller.profile';

  public function sellerList(Request $request)
  {
    $page = 'index';
    $sql = User::where('role', 'Seller')->latest();
    $search = '';
    if ($request->search) {
      $search = $request->search;
      $sql->where('name', 'like', '%' . $search  . '%')
        ->orWhere('email', 'like', '%' . $search  . '%')
        ->orWhere('phone_1', 'like', '%' . $search  . '%')
        ->orWhere('phone_2', 'like', '%' . $search  . '%');
    }
    $data = $sql->paginate(10);
    return view($this->VIEW_PATH . '.index', compact('page', 'data', 'search'));
  }

  public function sellerShow($id)
  {
    $page = 'show';
    $data = User::find($id);
    return view($this->SELLER_PROFILE, compact('page', 'data'));
  }

  public function paymentWithdraw()
  {
    $page = '';
    $data = Withdraw::orderBy('created_at', 'DESC')->paginate(10);
    return view($this->VIEW_PATH . '.withdraw', compact('data', 'page'));
  }

  public function show(Withdraw $withdraw, $id)
  {
    $page = 'show';
    $singgleWithdraw = $withdraw->findOrFail($id);
    return view($this->VIEW_PATH . 'seller.withdraw', compact('singgleWithdraw', 'page'));
  }
}
