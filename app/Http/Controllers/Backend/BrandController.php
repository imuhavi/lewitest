<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

  private $VIEW_PATH = 'backend.brand.';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view($this->VIEW_PATH . 'index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
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
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function show(Brand $brand)
  {
    //
  }

  /**
   *  Show the form for editing the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function edit(Brand $brand)
  {
    return view($this->VIEW_PATH . 'edit');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Brand $brand)
  {
    //
  }

  /**
   * Remove the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function destroy(Brand $brand)
  {
    //
  }
}
