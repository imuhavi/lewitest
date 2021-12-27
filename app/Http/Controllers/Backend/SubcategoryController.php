<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
  private $VIEW_PATH = 'backend.subcategory.index';
  private $VIEW_ROUTE = '/subcategory';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $page = 'index';
    $data = Subcategory::orderBy('created_at', 'DESC')->get();
    return view($this->VIEW_PATH, compact('data', 'page'));
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
    $category = Category::orderBy('name', 'asc')->get();
    return view($this->VIEW_PATH, compact('data', 'page', 'category'));
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
      'icon' => 'required|mimes:jpg,jpeg,bmp,png',
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
      };

      $subcategory = new Subcategory;
      $subcategory->name = $request->name;
      $subcategory->category_id = $request->category_id;

      if ($request->file('icon')) {
        uploadImage($request->file('icon'));
        $subcategory->icon = session('fileName');
      }

      if ($request->file('banner')) {
        uploadImage($request->file('banner'));
        $subcategory->banner = session('fileName');
      }

      $subcategory->slug = strtolower($request->slug);
      $subcategory->status = $status;
      $subcategory->meta_title = $request->meta_title;
      $subcategory->meta_description = $request->meta_description;
      $subcategory->save();
      return redirect(routePrefix() . $this->VIEW_ROUTE)->with('success', 'Subategory saved successfully .');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    };
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function show(Subcategory $subcategory)
  {
    $page = 'show';
    $data = $subcategory;
    return view($this->VIEW_PATH, compact('data', 'page'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function edit(Subcategory $subcategory)
  {
    $page = 'edit';
    $data = $subcategory;
    $category = Category::orderBy('name', 'asc')->get();
    return view($this->VIEW_PATH, compact('page', 'data', 'category'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Subcategory $subcategory)
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

      if ($request->file('icon')) {
        removeImage($subcategory->icon);
        uploadImage($request->file('icon'));
        $subcategory->icon = session('fileName');
      }

      if ($request->file('banner')) {
        removeImage($subcategory->banner);
        uploadImage($request->file('banner'));
        $subcategory->banner = session('fileName');
      }

      $subcategory->name = $request->name;
      $subcategory->slug = strtolower($request->slug);
      if ($status) {
        $subcategory->status = $status;
      }

      $subcategory->category_id = $request->category_id;
      $subcategory->meta_title = $request->meta_title;
      $subcategory->meta_description = $request->meta_description;
      $subcategory->save();
      return redirect(routePrefix() . $this->VIEW_ROUTE)->with('success', 'Category updated successfully .');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Subcategory  $subcategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(Subcategory $subcategory)
  {
    try {
      removeImage($subcategory->icon);
      removeImage($subcategory->banner);
      $subcategory->delete();
      return redirect()->back()->with('success', 'Category deleted successfully !');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }
}
