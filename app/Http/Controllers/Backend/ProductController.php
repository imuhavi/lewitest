<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  private $VIEW_PATH = 'backend.products.index';
  private $VIEW_ROUTE = '/product';

  public function index(Request $request)
  {
    $page = 'index';
    $sql = Product::with('category', 'brand')->orderBy('created_at', 'DESC');
    
    $keyword = '';
    if($request->keyword){
      $keyword = $request->keyword;
      $sql->where('name', 'like', '%' . $keyword . '%')
          ->orWhere('slug', 'like', '%' . $keyword . '%')
          ->orWhere('purchase_price', 'like', '%' . $keyword . '%')
          ->orWhere('price', 'like', '%' . $keyword . '%')
          ->orWhere('discount_type', 'like', '%' . $keyword . '%')
          ->orWhere('discount', 'like', '%' . $keyword . '%')
          ->orWhere('unit', 'like', '%' . $keyword . '%');
    }

    $data = $sql->paginate(2);
    return view($this->VIEW_PATH, compact('page', 'data', 'keyword'));
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
    $request->validate([
      'name' => 'required|max:199',
      'slug' => 'required|max:199',
      'purchase_price' => 'required',
      'price' => 'required',
      'shipping_cost' => 'required',
      'shipping_days' => 'required',
      'unit' => 'required',
      'min' => 'required',
      'max' => 'required',
      'quantity' => 'required',
      'category_id' => 'required'
    ]);

    try {
      $data = $request->except(['_token', 'images']);

      if(!empty($data['attributes'])){
        $data['attributes'] = json_encode(array_map(function($item){
          return json_encode(explode('-', $item));
        }, $data['attributes']));
      }
      
      if($request->status == 'on'){
        $data['status'] = 1;
      }elseif ($request->status == 'off') {
        $data['status'] = 0;
      }
      if($request->is_draft == 'on'){
        $data['is_draft'] = 1;
      }elseif ($request->is_draft == 'off') {
        $data['is_draft'] = 0;
      }
      if($request->isCashAvailable == 'on'){
        $data['isCashAvailable'] = 1;
      }elseif ($request->isCashAvailable == 'off') {
        $data['isCashAvailable'] = 0;
      }
      
      if ($request->file('meta_image')) {
        uploadImage($request->file('meta_image'));
        $data['meta_image'] = session('fileName');
      }
      if ($request->file('pdf')) {
        uploadImage($request->file('pdf'));
        $data['pdf'] = session('fileName');
      }
      if ($request->file('thumbnail')) {
        uploadImage($request->file('thumbnail'));
        $data['thumbnail'] = session('fileName');
      }
      
      $product = Product::create($data);
      
      if(!empty($request->images)){
        foreach ($request->images as $image) {
          uploadImage($image);
          ProductImage::create([
            'product_id' => $product->id,
            'image' => session('fileName')
          ]);
        }
      }

      return redirect()->back()->with('success', 'Product uploaded successfully.');
    } catch (\Throwable $th) {
      return redirect()->back()->with('error', $th->getMessage());
    }
  }

  public function show(Product $product)
  {
    $page = 'show';
    $data = $product;
    return view($this->VIEW_PATH, compact('data', 'page'));
  }

  public function edit(Product $product)
  {
    $page = 'edit';
    $data = $product;
    $category = Category::orderBy('name', 'asc')->get();
    $subCategory = Subcategory::orderBy('name', 'asc')->get();
    $brand = Brand::orderBy('name', 'asc')->get();
    $sellers = User::where('role', 'Seller')->orderBy('name', 'asc')->get();
    $attributes = Attribute::orderBy('name', 'asc')->get();
    return view($this->VIEW_PATH, compact('data', 'page', 'category', 'subCategory', 'brand', 'sellers', 'attributes'));
  }

  public function update(Request $request, Product $product)
  {
    //
  }

  public function destroy(Product $product)
  {
    $product->delete();
    return redirect()->back()->with('success', 'Product deleted successfully !');
  }

  public function productDraft()
  {
    return view($this->VIEW_PATH . 'draft');
  }
}
