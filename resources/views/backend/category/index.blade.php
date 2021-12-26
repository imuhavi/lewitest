@extends('backend.master')
@section('category_active')
  active
@endsection
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb breadcrumb-with-header">
                  <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
                  <li><a href="{{ url(routePrefix(). '/category') }}">Category</a></li>
                  <li class="active">Category-list</li>
              </ol>
          </div>
      </div>
      <div id="main-wrapper">
          <div class="row">
          
            @if($page == 'index')
              <div class="col-md-10">
                  <div class="panel panel-white"> 
                      <div class="panel-heading clearfix">
                          <div class="float-left">
                            <h4 class="panel-title">Category List</h4>
                          </div>
                          <div class="float-right">
                            <a class="btn btn-info btn-sm" href="{{ url(routePrefix() . '/category/create') }}">Add category</a>
                          </div>
                      </div>
                      <div class="panel-body">
                          <div class="table-responsive">
                              <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                  <thead>
                                      <tr>
                                          <th>SL</th>
                                          <th>Name</th>
                                          <th>Icon</th>
                                          <th>Banner</th>
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
                                            <img src="{{ asset('/backend/uploads/' . $item->icon) }}" class="small-image" alt="Category icon - {{ $item->icon }}">
                                          </td>
                                          <td>
                                            <img src="{{ asset('/backend/uploads/' . $item->banner) }}" class="small-image" alt="Category banner - {{ $item->banner }}">
                                          </td>
                                          <td>
                                            <span class="badge badge-pill badge-{{ $item->status === 'Active' ? 'success' : 'danger' }}">{{ $item->status }}</span>
                                          </td>
                                          <td>
                                            <a class="btn btn-sm btn-info" href="{{ url( routePrefix() . '/category/' . $item->id . '/edit') }}"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-info" href="{{ url( routePrefix() . '/category/' . $item->id) }}"><i class="fa fa-eye"></i></a>
                                            <form action="{{ route('category.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            @elseif($page == 'create' || $page == 'edit')
              <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">{{ $page == 'create' ? 'Add' : 'Edit' }} Category</h4>
                        <a href="{{ url(routePrefix() . '/category') }}" class="btn btn-info btn-sm">Go back</a>
                    </div>
                    <div class="panel-body">
                        <form action="{{ $page == 'create' ? url(routePrefix() . '/category') : url(routePrefix() . '/category/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($page == 'edit')
                            @method('PATCH')
                        @endif
                            <div class="form-row">
                            <div class="form-group">
                                <label for="category">Name</label>
                                <input type="text" value="{{ $data ? $data->name : '' }}" onkeyup="pushSlug(this.value, 'category_slug')" name="name" class="form-control m-t-xxs" id="category"
                                    placeholder="Name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category_img">Icon</label>
                                    <input type="file" class="form-control" name="icon" id="category_img"
                                        onchange="previewImage('icon', this.files)">
                                        @error('icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>

                                <img class="img-thumbnail"
                                    src="{{ $page == 'create' ? asset('backend/assets/default-img/user.jpeg') : asset('backend/uploads/' . $data->icon) }}"
                                    id="icon" width="100" height="100" />
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category_banner">Banner</label>
                                    <input type="file" class="form-control" name="banner" id="category_banner"
                                        onchange="previewImage('banner', this.files)">
                                        @error('banner')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                </div>

                                <img class="img-thumbnail"
                                    src="{{ $page == 'create' ? asset('backend/assets/default-img/user.jpeg') : asset('backend/uploads/' . $data->banner) }}"
                                    id="banner" width="100" height="100" />
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
                            <div class="form-row">
                            <div class="form-group">
                                <label for="category_slug">Slug</label>
                                <input type="text" value="{{ $data ? $data->slug : '' }}" name="slug" class="form-control m-t-xxs" id="category_slug"
                                    placeholder="Slug">
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group">
                                <label for="category">Meta title</label>
                                <input type="text" value="{{ $data ? $data->meta_title : '' }}" name="meta_title" class="form-control m-t-xxs" id="category"
                                    placeholder="Meta title">
                                    @error('meta_title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group">
                                <label for="description">Meta description</label>
                                <textarea class="form-control m-t-xxs" name="meta_description" id="description"
                                    placeholder="Meta description">{{ $data ? $data->meta_description : '' }}</textarea>
                                    @error('meta_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">{{ $page == 'create' ? 'Save' : 'Update' }}</button>
                        </form>
                    </div>
                </div>
              </div>
              
            @elseif('show')
                <a href="{{ url(routePrefix() . '/category') }}" class="btn btn-info btn-sm">Go back</a>
                <h1>Show the data here. You have $data !</h1>
                {{ $data }}
            @endif

          </div><!-- Row -->
      </div><!-- Main Wrapper -->
      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
      </div>
  </div><!-- Page Inner -->
@endsection