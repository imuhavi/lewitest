<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  private $VIEW_PATH = 'backend.products.index';
  private $VIEW_ROUTE = '/product';

  public function index()
  {
    $page = 'index';
    $data = Product::orderBy('created_at', 'DESC')->get();
    return view($this->VIEW_PATH, compact('page', 'data'));
  }

  public function create()
  {
    $data = '';
    $page = 'create';
    $category = Category::orderBy('name', 'asc')->get();
    $subCategory = Subcategory::orderBy('name', 'asc')->get();
    $brand = Brand::orderBy('name', 'asc')->get();
    $sellers = User::where('role', 'Seller')->orderBy('name', 'asc')->get();
    $attributes = Attribute::orderBy('name', 'asc')->get();
    return view($this->VIEW_PATH, compact('data', 'page', 'category', 'subCategory', 'brand', 'sellers', 'attributes'));
  }

  public function store(Request $request)
  {
    return $request;
  }

  public function show(Product $product)
  {
    //
  }

  public function edit(Product $product)
  {
    return view($this->VIEW_PATH . 'edit');
  }

  public function update(Request $request, Product $product)
  {
    //
  }

  public function destroy(Product $product)
  {
    //
  }

  public function productDraft()
  {
    return view($this->VIEW_PATH . 'draft');
  }
}
