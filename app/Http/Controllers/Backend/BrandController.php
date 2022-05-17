<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

  private $VIEW_PATH = 'backend.brand.index';
  private $VIEW_ROUTE = '/brand';

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $page = 'index';
    $data = Brand::orderBy('created_at', 'desc')->get();
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
    $request->validate([
      'name' => 'required|max:100',
      'logo' => 'required|mimes:jpg,jpeg,bmp,png',
      'banner' => 'required|mimes:jpg,jpeg,bmp,png',
      'slug' => 'required|max:100',
      'meta_title' => 'required|max:100',
      'meta_description' => 'required|max:1000'
    ]);

    try {
      if (isset($request->status) && $request->status == 'on') {
        $status = 'Active';
      } else {
        $status = 'Inactive';
      }

      $brand = new Brand();
      $brand->name = $request->name;

      if ($request->file('logo')) {
        uploadImage($request->file('logo'));
        $brand->logo = session('fileName');
      }

      if ($request->file('banner')) {
        uploadImage($request->file('banner'));
        $brand->banner = session('fileName');
      }

      $brand->slug = strtolower($request->slug);
      $brand->status = $status;
      $brand->meta_title = $request->meta_title;
      $brand->meta_description = $request->meta_description;
      $brand->save();
      return back()->with('success', 'Brand saved successfully .');
    } catch (\Throwable $th) {
      return back()->with('error', $th->getMessage());
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function show(Brand $brand)
  {
    $page = 'show';
    $data = $brand;
    return view($this->VIEW_PATH, compact('page', 'data'));
  }

  /**
   *  Show the form for editing the specified resource.
   *
   * @param  \App\Models\Brand  $brand
   * @return \Illuminate\Http\Response
   */
  public function edit(Brand $brand)
  {
    $page = 'edit';
    $data = $brand;
    return view($this->VIEW_PATH, compact('page', 'data'));
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
    $request->validate([
      'name' => 'required|max:100',
      'slug' => 'required|max:100',
      'meta_title' => 'required|max:100',
      'meta_description' => 'required|max:1000'
    ]);

    try {
      if (isset($request->status) && $request->status == 'on') {
        $status = 'Active';
      } else {
        $status = 'Inactive';
      }

      if ($request->file('logo')) {
        removeImage($brand->logo);
        uploadImage($request->file('logo'));
        $brand->logo = session('fileName');
      }

      if ($request->file('banner')) {
        removeImage($brand->banner);
        uploadImage($request->file('banner'));
        $brand->logo = session('fileName');
      }

      $brand->slug = strtolower($request->slug);
      $brand->status = $status;
      $brand->meta_title = $request->meta_title;
      $brand->meta_description = $request->meta_description;
      $brand->save();
      return redirect(routePrefix() . $this->VIEW_ROUTE)->with('success', 'Brand Updated successfully .');
    } catch (\Throwable $th) {
      return back()->with('error', $th->getMessage());
    }
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
    try {
      if(hasFile($brand->logo)){
        removeImage($brand->logo);
      }
      if(hasFile($brand->banner)){
        removeImage($brand->banner);
      }
      $brand->delete();
      return back()->with('success', 'Brand deleted successfully!');
    } catch (\Throwable $th) {
      return back()->with('error', $th->getMessage());
    }
  }
}
