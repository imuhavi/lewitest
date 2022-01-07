<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  private $VIEW_PATH = 'backend.products.';
  
  public function index()
  {
    return view($this->VIEW_PATH . 'index');
  }

  public function create()
  {
    return view($this->VIEW_PATH . 'create');
  }

  public function store(Request $request)
  {
    //
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