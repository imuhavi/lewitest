<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

  private $VIEW_PATH = "backend.coupon.index";
  private $VIEW_ROUTE = '/coupon';

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $page = 'index';
    $data = Coupon::orderBy('created_at', 'DESC')->get();
    return view($this->VIEW_PATH, compact('page', 'data'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data = '';
    $page = 'create';
    return view($this->VIEW_PATH, compact('data', 'page'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Coupon  $coupon
   * @return \Illuminate\Http\Response
   */
  public function show(Coupon $coupon)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Coupon  $coupon
   * @return \Illuminate\Http\Response
   */
  public function edit(Coupon $coupon)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Coupon  $coupon
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Coupon $coupon)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Coupon  $coupon
   * @return \Illuminate\Http\Response
   */
  public function destroy(Coupon $coupon)
  {
    //
  }
}
