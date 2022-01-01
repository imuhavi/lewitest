@extends('backend.master')
@section('brand_active')
    active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url(routePrefix(). '/brand') }}">Brand</a></li>
                <li class="active">Brand-list</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="row">
            @if($page == 'index')
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-white">
                      <div class="panel-heading clearfix">
                          <div class="text-left">
                              <h4 class="panel-title">Brand List</h4>
                          </div>

                          <div class="text-right">
                              <a class="btn btn-info btn-sm" href="{{ url(routePrefix() . '/brand/create') }}">Add
                                  Brand</a>
                          </div>
                      </div>

                      <div class="panel-body">
                          <div class="table-responsive">
                              <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                  <thead>
                                      <tr>
                                          <th>Sl</th>
                                          <th>Name</th>
                                          <th>Logo</th>
                                          <th>Banner</th>
                                          <th>Status</th>
                                          <th width="120" style="text-align: center">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ( $data as $brandItem )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $brandItem->name }}</td>
                                            <td>
                                              @if($brandItem->logo)
                                              <img src="{{ asset('/backend/uploads/' . $brandItem->logo) }}"
                                                  class="small-image" alt="Category icon - {{ $brandItem->logo }}">
                                              @else
                                              <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}"
                                                  class="small-image" alt="Default Brand logo">
                                              @endif
                                            </td>
                                            <td>
                                              @if($brandItem->banner)
                                              <img src="{{ asset('/backend/uploads/' . $brandItem->banner) }}"
                                                  class="small-image" alt="Category icon - {{ $brandItem->banner }}">
                                              @else
                                              <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}"
                                                  class="small-image" alt="Default Brand banner">
                                              @endif
                                            </td>
                                            <td>
                                              <span
                                                  class="badge badge-pill
                                                  badge-{{ $brandItem->status === 'Active' ? 'success' : 'danger' }}">{{ $brandItem->status }}</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-info" href="{{ url(routePrefix().'/brand/'. $brandItem->id).'/edit' }}"><i class="fa fa-edit"></i></a>

                                                <a class="btn btn-sm btn-info"
                                                    href="{{ url( routePrefix() . '/brand/' . $brandItem->id) }}"><i
                                                        class="fa fa-eye"></i></a>

                                                <form style="display: inline-block"
                                                    action="{{ route('brand.destroy', $brandItem->id) }}" method="post">
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
            @elseif ($page == 'create' || $page == 'edit' )
              <div class="col-md-6 col-md-offset-3">
                  <div class="panel panel-white">
                      <div class="panel-heading clearfix">
                          <div class="text-left">
                              <h4 class="panel-title">{{ $page == 'create' ? 'Add' : 'Edit' }} Brand</h4>
                          </div>

                          <div class="text-right">
                              <a href="{{ url(routePrefix() . '/brand') }}" class="btn btn-info btn-sm">Go back</a>
                          </div>
                      </div>
                      <div class="panel-body">
                          <form action="{{ $page == 'create' ? url(routePrefix() . '/brand') : url(routePrefix() . '/brand/' . $data->id) }}"
                              method="post" enctype="multipart/form-data">

                              @csrf
                              @if ($page == 'edit')
                                @method('PATCH')
                              @endif
                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="brand">Brand Name</label>
                                      <input type="text" class="form-control m-t-xxs" id="brand"
                                          placeholder="brand name" name="name" value="{{ $data ? $data->name : old('name')}}" onkeyup="pushSlug(this.value, 'brand_slug')">

                                       @error('name')
                                       <small class="text-danger">{{ $message }}</small>
                                       @enderror
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="brand_logo">Upload Brand Logo</label>
                                      <input type="file" class="form-control" name="logo" id="brand_logo" onchange="previewImage('logo', this.files)">
                                      @error('logo')
                                      <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>

                                  <img class="img-thumbnail"
                                      src="{{ ($page == 'create' || !$data->logo) ? asset('backend/assets/default-img/noimage.jpg') : asset('backend/uploads/' . $data->logo) }}" id="logo" width="100" height="100" />
                              </div>

                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="brand_banner">Upload Banner</label>
                                      <input type="file" class="form-control" name="banner" id="brand_banner" onchange="previewImage('banner', this.files)">
                                      @error('banner')
                                      <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>

                                  <img class="img-thumbnail" src="{{ ($page == 'create' || !$data->banner) ? asset('backend/assets/default-img/noimage.jpg') : asset('backend/uploads/' . $data->banner) }}"
                                      id="banner" width="100" height="100" />
                              </div>

                              <div class="from-row status">
                                  <label>Publication status : </label>
                                  <label class="no-s">
                                      @if($page == 'create')
                                      <input type="checkbox" name="status" checked> Active
                                      @else
                                      <input type="checkbox" name="status"
                                          {{ $data->status == 'Active' ? 'checked' : '' }}> Active
                                      @endif
                                  </label>
                              </div>

                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="brand_slug">Slug</label>
                                      <input type="text" value="{{ $data ? $data->slug : old('slug') }}" name="slug" class="form-control m-t-xxs" id="brand_slug" placeholder="Slug">
                                      @error('slug')
                                      <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="brand">Meta title</label>
                                      <input type="text" value="{{ $data ? $data->meta_title : old('meta_title') }}" name="meta_title"
                                          class="form-control m-t-xxs" id="brand" placeholder="Meta title">
                                      @error('meta_title')
                                      <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group">
                                      <label for="description">Meta description</label>
                                      <textarea class="form-control m-t-xxs" name="meta_description" id="description"
                                          placeholder="Meta description">{{ $data ? $data->meta_description : old('meta_desription') }}</textarea>
                                      @error('meta_description')
                                      <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                              </div>

                              <button type="submit" class="btn btn-info m-t-xs m-b-xs">{{ $page == 'create' ? 'Save' : 'Save Changes' }}</button>
                          </form>
                      </div>
                  </div>
              </div>
            @elseif ($page == 'show')
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading clearfix">
                        <div class="text-left float-left">
                            <h3 class="panel-title">Brand</h3>
                        </div>
                        <div class="text-right">
                            <a href="{{ url(routePrefix() . '/brand') }}" class="btn btn-info btn-sm">Go back</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th class="45%" width="45%">Brand Name</th>
                                    <td width="10%">:</td>
                                    <td class="45%" width="45%">{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <th width="45%">Banner Photo</th>
                                    <td width="10%">:</td>
                                    <td width="45%">
                                        @if($data->banner)
                                        <img src="{{ asset('/backend/uploads/' . $data->banner) }}"
                                            class="thumbnail-img" alt="Brand Banner - {{ $data->banner }}">
                                        @else
                                        <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}"
                                            class="thumbnail-img" alt="Default Brand Banner">
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th width="45%">Brand Logo</th>
                                    <td width="10%">:</td>
                                    <td width="45%">
                                        @if($data->logo)
                                        <img src="{{ asset('/backend/uploads/' . $data->logo) }}" class="thumbnail-img"
                                            alt="Category Banner - {{ $data->logo }}">
                                        @else
                                        <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}"
                                            class="thumbnail-img" alt="Default category Banner">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th width="45%">Brand Url</th>
                                    <td width="10%">:</td>
                                    <td width="45%">{{ $data->slug }}</td>
                                </tr>
                                <tr>
                                    <th width="45%">Meta Title</th>
                                    <td width="10%">:</td>
                                    <td width="45%">{{ $data->meta_title ?? Null }}</td>
                                </tr>

                                <tr>
                                    <th width="45%">Meta Description</th>
                                    <td width="10%">:</td>
                                    <td width="45%">{{ $data->meta_description ?? Null }}</td>
                                </tr>

                                <tr>
                                    <th width="45%">Brand Status</th>
                                    <th width="10%">:</th>
                                    <td width="45%">
                                        <span
                                            class="badge badge-pill badge-{{ $data->status === 'Active' ? 'success' : 'danger' }}">{{ $data->status }}</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th width="45%">Brand Create</th>
                                    <th width="10%">:</th>
                                    <td width="45%">{{ $data->created_at->diffForHumans() }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div><!-- Page Inner -->
@endsection