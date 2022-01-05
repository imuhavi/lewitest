@extends('backend.master')
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url( routePrefix() . '/dashboard') }}">Dashboard</a></li>
                <li><a href="#">Seller</a></li>
                <li class="active">Seller-Profile</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="user-profile-panel panel panel-white">
                    <div class="panel-heading">
                        <div class="panel-title">Seller Profile</div>
                    </div>
                    <div class="panel-body">
                        @if( $data->shop_logo )
                          <img src="{{ asset('/backend/uploads/' . $data->shop_logo) }}" class="thumbnail-img" alt="Seller - {{ $data->shop_logo }}">
                        @else
                          <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}" class="thumbnail-img" alt="Default Shop Logo">
                        @endif
                        <h4 class="text-center m-t-lg">{{ $data->shop_name }}</h4>
                        <hr>
                        <ul class="list-unstyled text-center">
                            <li>
                                <p><i class="icon-pointer m-r-xs"></i>{{ $data->shop_address }}, {{ $data->city }},
                                    {{ $data->country }}</p>
                            </li>
                            <li>
                                <p><i class="icon-envelope-open m-r-xs"></i><a href="#">{{ $data->email }}</a>
                                </p>
                            </li>
                        </ul>
                        <hr>
                        <a class="btn btn-info btn-block" href="#"><i class="icon-plus m-r-xs"></i>View Store</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Manage Profile Information</h4>
                    </div>
                    <div class="panel-body">
                        <div class="card mb-4">
                            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-3">
                                          <p class="mb-0">Shop Logo</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="file" accept="image/*"
                                                onchange="previewImage('shop_logo_preview', this.files)"
                                                name="shop_logo" id="shop_logo" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            @if($data->shop_logo)
                                            <img class="img avatar" id="shop_logo_preview"
                                                src="{{ asset('backend/uploads/' . $data->shop_logo) }}" alt="Shop-{{ $data->shop_logo }}"
                                                width="80px" height="80px">
                                            @else
                                            <img class="img avatar" id="shop_logo_preview"
                                                src="{{ asset('backend/assets/default-img/noimage.jpg') }}" alt="shop default logo"
                                                width="80px" height="80px">
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Shop Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="shop_name" value="{{ $data->shop_name }}"
                                                id="shop_name" class="form-control">
                                            @error('shop_name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" title="You can not update your verified email" disabled
                                                value="{{ $data->email }}" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone(primary)</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="tel" name="primary_phone" value="{{ $data->primary_phone }}"
                                                id="primary_phone" class="form-control">
                                            @error('primary_phone')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile(optional)</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="tel" name="secondary_phone"
                                                value="{{ $data->secondary_phone }}"
                                                id="secondary_phone" class="form-control">
                                            @error('secondary_phone')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="shop_location"
                                                value="{{ $data->shop_location }}" id="shop_location"
                                                class="form-control">
                                            @error('shop_location')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-sm-3">
                                            <input type="text" name="shop_address" value="{{ $data->shop_address }}"
                                                id="shop_address" class="form-control">
                                            @error('shop_address')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-sm-3">
                                            <input type="text" name="city" value="{{ $data->city }}"
                                                id="city" class="form-control">
                                            @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-sm-12 text-right ">
                                            <button class="btn btn-info" type="submit">Save Change</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div><!-- Page Inner -->
@endsection