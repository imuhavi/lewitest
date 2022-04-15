@extends('backend.master')
@section('product_active') active open @endsection
@section('subproduct_active') active @endsection


@section('content')

<style>
  .content {
    position: relative;
    width: 50%;
  }

  /* Make the image responsive */
  .content img {
    width: 100%;
    height: auto;
  }

  /* Style the button and place it in the middle of the content/image */
  .content .btn-img {
    position: absolute;
    top: 50%;
    left: 100%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #555;
    color: white;
    font-size: 16px;
    padding: 2px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }

  .content .btn-img:hover {
    background-color: black;
  }
</style>

<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb breadcrumb-with-header">
        <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url(routePrefix(). '/product') }}">Product</a></li>
        <li class="active"> {{ (str_replace(routePrefix() . '/', '', Request::path()) == 'product-draft') ? 'Draft' : ''
          }} Product-list</li>
      </ol>
    </div>
  </div>
  <div id="main-wrapper">
    <div class="row">
      @if($page == 'index')
      <div class="col-md-12">
        <div class="panel panel-white">
          <div class="panel-heading clearfix">
            <div class="text-left">
              <h4 class="panel-title">{{ (str_replace(routePrefix() . '/', '', Request::path()) == 'product-draft') ?
                'Draft' : '' }} Product List</h4>
            </div>
            <div class="text-right">
              <a href="{{ url(routePrefix(). '/product/create') }}" class="btn btn-outline-primary mb-3"> <i
                  class="icon-plus"></i>
                Add Product</a>
            </div>
          </div>

          <form action="{{ url(routePrefix() . '/product') }}" method="get">
            @csrf
            <input type="search" name="keyword" value="{{ isset($keyword) ? $keyword : ''  }}"
              placeholder="Search from here...">
            <button type="submit">Search</button>
          </form>

          <div class="panel-body">
            <div class="table-responsive">
              <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Thumbnail</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                      <img src="{{ asset('backend/uploads/' . $item->thumbnail) }}" alt="Product thumbnail">
                    </td>
                    <td>{{ $item->category ? $item->category->name : 'N/A' }}</td>
                    <td>{{ $item->brand ? $item->brand->name : 'N/A' }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/product/' . $item->id) }}">View</a>
                      <a class="btn btn-info"
                        href="{{ url(routePrefix(). '/product/' . $item->id . '/edit') }}">Edit</a>
                      <a class="btn btn-danger"
                        href="{{ url(routePrefix(). '/product/delete/' . $item->id) }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $data->links() }}
            </div>
          </div>
        </div>
      </div>

      @elseif($page == 'create' || $page == 'edit')

      <div class="panel panel-white">
        <div class="panel-heading clearfix">
          <div class="text-left">
            <h4 class="panel-title">{{ $page == 'create' ? 'Add' : 'Edit' }} Product</h4>
          </div>

          <div class="text-right">
            <a href="{{ url(routePrefix() . '/product') }}" class="btn btn-info btn-sm">Go back</a>
          </div>
        </div>
      </div>

      <form
        action="{{ $page == 'create' ? url(routePrefix() . '/product') : url(routePrefix() . '/product/' . $data->id) }}"
        method="POST" enctype="multipart/form-data">

        @csrf

        @if($page == 'edit')
        @method('PATCH')
        @endif

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Title and Slug</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="name">Product Name</label>
                      <input type="text" value="{{ $data ? $data->name : old('name') }}"
                        onkeyup="pushSlug(this.value, 'product_slug')" name="name" class="form-control m-t-xxs"
                        id="name" placeholder="Name">
                      @error('name')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="product_slug">Product Url</label>
                      <input type="text" value="{{ $data ? $data->slug : old('slug') }}" name="slug"
                        class="form-control m-t-xxs" id="product_slug" placeholder="Slug">
                      @error('slug')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product description</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <textarea class="form-control" name="description" id="my-editor"
                        placeholder="Meta product_description">{{ $data ? $data->description : old('description') }}</textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Information</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" min="0"
                              value="{{ $data ? $data->purchase_price : old('purchase_price') }}" name="purchase_price"
                              class="form-control m-t-xxs" id="purchase_price" placeholder="Purchase Price">
                            @error('purchase_price')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" min="0" value="{{ $data ? $data->price : old('price') }}" name="price"
                              class="form-control m-t-xxs" id="price" placeholder="Price">
                            @error('price')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" min="0" value="{{ $data ? $data->quantity : old('quantity') }}"
                              name="quantity" class="form-control" id="quantity" placeholder="Quantity">
                            @error('quantity')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="discount_type">Discount type</label>
                            <select name="discount_type" id="discount_type" class="form-control">
                              <option value="Percent">Percent</option>
                              <option value="Flat">Flat</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="number" min="0" value="{{ $data ? $data->discount : old('discount') }}"
                              name="discount" class="form-control" id="discount" placeholder="Discount">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="shipping_cost">shipping_cost</label>
                            <input type="number" min="0"
                              value="{{ $data ? $data->shipping_cost : old('shipping_cost') }}" name="shipping_cost"
                              class="form-control" id="shipping_cost" placeholder="shipping_cost">
                            @error('shipping_cost')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="shipping_days">Shipping days</label>
                            <input type="text" name="shipping_days"
                              value="{{ $data ? $data->shipping_days : old('shipping_days') }}" id="shipping_days"
                              class="form-control">
                            @error('shipping_days')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="unit">Unit</label>
                            <input type="text" name="unit" id="unit" value="{{ $data ? $data->unit : old('unit') }}"
                              class="form-control">
                            @error('unit')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="min">Min</label>
                            <input type="number" min="1" value="{{ $data ? $data->min : old('min') }}" name="min"
                              class="form-control" id="min" placeholder="Min">
                            @error('min')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="max">Max</label>
                            <input type="number" min="0" value="{{ $data ? $data->max : old('max') }}" name="max"
                              class="form-control" id="max" placeholder="Max">
                            @error('max')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-row">
                          <div class="form-group">
                            <label for="tax">Tax</label>
                            <input type="number" min="0" value="{{ $data ? $data->tax : old('tax') }}" name="tax"
                              class="form-control" id="tax" placeholder="Tax">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Seo Meta Tags</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label for="meta_title" class="col-sm-2 fdots-custom-label">Meta Title</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $data ? $data->meta_title : old('meta_title') }}" name="meta_title"
                          class="form-control" id="meta_title" placeholder="Meta title">
                      </div>
                      @error('meta_title')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="form-horizontal">
                    <div class="form-group">
                      <label for="meta_description" class="col-sm-2 fdots-custom-label">Meta description</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="meta_description" id="meta_description"
                          placeholder="Meta description">{{ $data ? $data->meta_description : old('meta_description') }}</textarea>
                      </div>
                      @error('meta_description')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="form-horizontal">
                    <div class="form-group">
                      <label for="meta_image" class="col-sm-2 fdots-custom-label">Meta Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="meta_image" id="meta_image"
                          onchange="previewImage('meta_image', this.files)">
                        @if($data && $data->meta_image)
                        <img height="50" width="50" src="{{ asset('backend/uploads/' . $data->meta_image) }}"
                          alt="Meta Image">
                        @endif
                      </div>
                      @error('meta_image')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>

            </div>



            <div class="col-md-4">

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Categories</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="category">Choose Parent Category</label>
                      <select name="category_id" id="category" class="form-control">
                        <option value="" disabled selected>Select One</option>
                        @foreach ($category as $cat_item )
                        <option value="{{ $cat_item->id }}" @if ( $page=='edit' ) {{ $cat_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $cat_item->name }}</option>
                        @endforeach
                      </select>
                      @error('category_id')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="sub_category">Choose Child Category</label>
                      <select name="sub_category_id" id="sub_category" class="form-control">
                        <option value="" selected>Select One</option>
                        @foreach ( $subCategory as $child_item )
                        <option value="{{ $child_item->id }}" @if ( $page=='edit' ) {{ $child_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $child_item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="brand_name">Choose Brand Name</label>
                      <select name="brand_id" id="brand_name" class="form-control">
                        <option value="" selected>Select One</option>
                        @foreach ( $brand as $brand_item )
                        <option value="{{ $brand_item->id }}" @if ( $page=='edit' ) {{ $brand_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $brand_item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="seller">Choose Seller</label>
                      <select name="seller_id" id="seller" class="form-control">
                        <option value="" selected>Select One</option>
                        @foreach ( $sellers as $seller_item )
                        <option value="{{ $seller_item->id }}" @if ( $page=='edit' ) {{ $seller_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $seller_item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Variation</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="attributes">Product Attribute:(add attribute and value) </label>
                      <br>

                      @php
                      $old_attributes = $data ? json_decode($data->attributes) : [];
                      $old_attributes_arr = [];
                      @endphp

                      @foreach($old_attributes as $old_attribute)
                      @php
                      $old_attributes_arr[] = explode(',', str_replace('"', '', str_replace(']', '', str_replace('[',
                      '', $old_attribute))))[1];
                      @endphp
                      @endforeach

                      @foreach($attributes as $item)
                      {{ $loop->iteration }}. {{ $item->name }}


                      <select name="attributes[]" class="form-control" multiple>

                        @foreach(json_decode($item->value) as $value)
                        <option @if(in_array($value, $old_attributes_arr)) selected @endif
                          value="{{ $item->id .'-'. $value }}">{{ $value }}</option>
                        @endforeach

                      </select>

                      <br>

                      @endforeach
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Attachment</h3>
                </div>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="pdf">Upload Pdf</label>
                      @if($data && $data->pdf)
                      <a href="{{ asset('backend/uploads/' . $data->pdf) }}" target="_blank">Show PDF</a>
                      @endif
                      <input type="file" class="form-control" name="pdf" id="pdf">
                    </div>

                    <div class="form-group">
                      <label for="images">Upload Product Images</label>
                      <input type="file" class="form-control" name="images[]" id="images" multiple>
                      @error('images')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                      @if($page == 'edit' && $data->images)
                      @foreach($data->images as $image)
                      <div class="content">
                        <img src="{{ asset('backend/uploads/' . $image->image) }}" alt="Product images">
                        <a href="{{ url(routePrefix() . '/product/image/delete/' . $image->id) }}"
                          class="btn-img btn-danger">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                      @endforeach
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="thumbnail">Upload Thumbnail Image</label>
                      <input type="file" class="form-control" name="thumbnail" id="thumbnail"
                        onchange="previewImage('feature', this.files)">
                      @error('thumbnail')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <img class="img-thumbnail"
                      src="{{ ($page == 'create' || !$data->thumbnail) ? asset('backend/assets/default-img/noimage.jpg') : asset('backend/uploads/' . $data->thumbnail) }}"
                      id="feature" width="100" height="100" />
                  </div>

                  <div class="from-row status">
                    <label>Publication status : </label>
                    <label class="no-s">
                      @if($page == 'create')
                      <input type="checkbox" name="status" checked> Active
                      @else
                      <input type="checkbox" name="status" {{ $data->status == 'Active' ? 'checked' : '' }}> Active
                      @endif
                    </label>
                  </div>

                  <div class="from-row status">
                    <label>Draft : </label>
                    <label class="no-s">
                      @if($page == 'create')
                      <input type="checkbox" name="is_draft"> Active
                      @else
                      <input type="checkbox" name="is_draft" {{ $data->is_draft == 1 ? 'checked' : '' }}> Active
                      @endif
                    </label>
                  </div>

                  <div class="from-row status">
                    <label>Cash on delivery Available : </label>
                    <label class="no-s">
                      @if($page == 'create')
                      <input type="checkbox" name="isCashAvailable"> Active
                      @else
                      <input type="checkbox" name="isCashAvailable" {{ $data->isCashAvailable == 1 ? 'checked' :
                      '' }}> Active
                      @endif
                    </label>
                  </div>

                  <div class="from-row">
                    <button type="submit" class="btn btn-info m-t-xs m-b-xs">{{ $page == 'create' ? 'Publish' :
                      'Save
                      Changes'
                      }}</button>
                  </div>

                </div>
              </div>


              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Product Tags</h3>
                </div>
                <br>
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="tags">Tags</label>
                      <input type="text" value="{{ $data ? $data->tags : old('tags') }}" name="tags"
                        class="form-control" id="tags" placeholder="Tags">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      @elseif($page == 'show')
      {{
      $data
      }}
      @endif
    </div><!-- Row -->
  </div><!-- Main Wrapper -->
  <div class="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
  </div>
</div><!-- Page Inner -->
@endsection