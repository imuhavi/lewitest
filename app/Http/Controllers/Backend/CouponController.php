<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

  private $VIEW_PATH = "backend.coupon.index";
  private $VIEW_ROUTE = '/coupon';

  public function index()
  {
    $page = 'index';
    $data = Coupon::orderBy('created_at', 'DESC')->get();
    return view($this->VIEW_PATH, compact('page', 'data'));
  }

  public function create()
  {
    $data = '';
    $page = 'create';
    return view($this->VIEW_PATH, compact('data', 'page'));
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Coupon $coupon)
  {
    //
  }

  public function edit(Coupon $coupon)
  {
    //
  }

  public function update(Request $request, Coupon $coupon)
  {
    //
  }

  public function destroy(Coupon $coupon)
  {
    //
  }
}