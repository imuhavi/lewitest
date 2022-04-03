@extends('backend.master')
@section('product_active') active open @endsection
@section('subproduct_active') active @endsection


@section('content')


<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb breadcrumb-with-header">
        <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url(routePrefix(). '/product') }}">Product</a></li>
        <li class="active">Product-list</li>
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
              <h4 class="panel-title">Product List</h4>
            </div>

            <div class="text-right">
              <a href="{{ url(routePrefix(). '/product/create') }}" class="btn btn-outline-primary mb-3"> <i
                  class="icon-plus"></i>
                Add Product</a>
            </div>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Publish</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>
                      <a class="btn btn-info" href="#">Edit</a>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
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
              <div class="panel panel-white">
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="category">Product Name</label>
                      <input type="text" value="{{ $data ? $data->name : old('name') }}"
                        onkeyup="pushSlug(this.value, 'category_slug')" name="name" class="form-control m-t-xxs"
                        id="category" placeholder="Name">
                      @error('name')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="category_slug">Product Url</label>
                      <input type="text" value="{{ $data ? $data->slug : old('slug') }}" name="slug"
                        class="form-control m-t-xxs" id="category_slug" placeholder="Slug">
                      @error('slug')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-white">
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="description">Product description</label>
                      <textarea class="form-control m-t-xxs" name="product_description" id="my-editor"
                        placeholder="Meta product_description">{{ $data ? $data->product_description : old('product_description') }}</textarea>
                      @error('product_description')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>


              <div class="panel panel-white">
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="category">Meta title</label>
                      <input type="text" value="{{ $data ? $data->meta_title : old('meta_title') }}" name="meta_title"
                        class="form-control m-t-xxs" id="category" placeholder="Meta title">
                      @error('meta_title')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label for="description">Meta description</label>
                      <textarea class="form-control m-t-xxs" name="meta_description" id="description"
                        placeholder="Meta description">{{ $data ? $data->meta_description : old('meta_description') }}</textarea>
                      @error('meta_description')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-white">
                <div class="panel-body">
                  <div class="form-row">
                    <div class="form-group">
                      <label for="category">Choose Parent Category</label>
                      <select name="category_id" id="category" class="form-control">
                        <option value="" disabled selected>Select One</option>
                        @foreach ( $category as $cat_item )
                        <option value="{{ $cat_item->id }}" @if ( $page=='edit' ) {{ $cat_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $cat_item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group">
                      <label for="category">Choose Child Category</label>
                      <select name="category_id" id="category" class="form-control">
                        <option value="" disabled selected>Select One</option>
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
                      <label for="category">Choose Brand Name</label>
                      <select name="category_id" id="category" class="form-control">
                        <option value="" disabled selected>Select One</option>
                        @foreach ( $brand as $brand_item )
                        <option value="{{ $brand_item->id }}" @if ( $page=='edit' ) {{ $brand_item->id == $data->id ?
                          'selected'
                          : '' }} @endif
                          >{{ $brand_item->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-white">
                <div class="panel-body">



                  <div class="form-row">
                    <div class="form-group">
                      <label for="thumbnail">Upload Feature Image</label>
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

                  <div class="from-row">
                    <button type="submit" class="btn btn-info m-t-xs m-b-xs">{{ $page == 'create' ? 'Publish' :
                      'Save
                      Changes'
                      }}</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </form>
      @endif
    </div><!-- Row -->
  </div><!-- Main Wrapper -->
  <div class="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
  </div>
</div><!-- Page Inner -->
@endsection