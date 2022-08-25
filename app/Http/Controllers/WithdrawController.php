<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
  private $VIEW_PATH = 'backend.seller';

  public function myWithraw()
  {
    return view($this->VIEW_PATH . '.withdraw');
  }


  public function withdrawRequest(Request $r)
  {
    $r->validate([
      'amount' => 'required'
    ]);

    $user = auth()->user();
    Withdraw::create([
      'user_id' => $user->id,
      'amount' => $r->amount
    ]);
  }
}
