@extends('backend.master')
@section('meta_title')
{{ Str::title($data->shop_name) }} View
@endsection

@section('meta_description')
<!-- {{ Str::limit($data->name, 100) }} -->
@section('content')
<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb breadcrumb-with-header">
        <li><a href="{{ url(routePrefix() . '/dashboard') }}">Dashboard</a></li>
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
            @if ($data->shop->shop_logo)
            <img src="{{ asset('/backend/uploads/' . $data->shop->shop_logo) }}" class="thumbnail-img"
              alt="Seller - {{ $data->shop->shop_logo }}">
            @else
            <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}" class="thumbnail-img"
              alt="Default Shop Logo">
            @endif
            <h4 class="text-center m-t-lg">{{ $data->shop->shop_name }}</h4>
            <hr>
            <ul class="list-unstyled text-center">
              <li>
                <p><i class="icon-pointer m-r-xs"></i>{{ $data->shop->address }}, {{ $data->shop->city }}</p>
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
        <div class="panel panel-info">

          <div class="panel-heading clearfix">
            <div class="text-left float-left">
              <h3 class="panel-title">Shop & Seller Information</h3>
            </div>
            <div class="text-right">
              <a href="{{ url(routePrefix() . '/seller-list') }}" class="btn btn-info btn-sm">Go back</a>
            </div>
          </div>

          <div class="panel-body">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th class="45%" width="45%">Package Name:</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $data->shop->subscription->name }} ({{ $data->shop->subscription->days
                    }} Days)
                  </td>
                </tr>
                <tr>
                  <th class="45%" width="45%">Shop Name</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $data->shop->shop_name }}</td>
                </tr>
                <tr>
                  <th width="45%">Shop Logo</th>
                  <td width="10%">:</td>
                  <td width="45%">
                    @if ($data->shop->shop_logo)
                    <img src="{{ asset('/backend/uploads/'.$data->shop->shop_logo) }}" class="thumbnail-img"
                      alt="Shop logo - {{ $data->shop->shop_logo }}">
                    @else
                    <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}" class="thumbnail-img"
                      alt="Default Shop Logo">
                    @endif
                  </td>
                </tr>

                <tr>
                  <th width="45%">Seller Email</th>
                  <td width="10%">:</td>
                  <td width="45%">{{ $data->email }}</td>
                </tr>
                <tr>
                  <th width="45%">Seller Phone Number</th>
                  <td width="10%">:</td>
                  <td width="45%">@if($data->phone_1)
                    {{ $data->phone_1 }}
                    @else
                    <span class="text-danger">No number added</span>
                    @endif , @if($data->phone_2)
                    {{ $data->phone_2 }}
                    @else
                    <span class="text-danger">No number added</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <th width="45%">Shop Location</th>
                  <td width="10%">:</td>
                  <td width="45%">{{ $data->shop->state ?? null }}, {{ $data->shop->city ?? null }}</td>
                </tr>

                <tr>
                  <th width="45%">Shop Address</th>
                  <td width="10%">:</td>
                  <td width="45%">{{ $data->shop->address ?? null }}, {{ $data->shop->postal_code }}</td>
                </tr>

                <tr>
                  <th width="45%">Shop Expired</th>
                  <td width="10%">:</td>

                  <td width="45%">{{ date('d-M-Y', strtotime('+' . $data->shop->subscription->days . ' day',
                    strtotime($data->shop->created_at ))) }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div><!-- Row -->
  </div><!-- Main Wrapper -->
  <div class="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by 5dots</p>
  </div>
</div><!-- Page Inner -->
@endsection