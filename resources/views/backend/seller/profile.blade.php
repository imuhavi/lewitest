@extends('backend.master')
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
            @if ($data->shop_logo)
            <img src="{{ asset('/backend/uploads/' . $data->shop_logo) }}" class="thumbnail-img"
              alt="Seller - {{ $data->shop_logo }}">
            @else
            <img src="{{ asset('backend/assets/default-img/noimage.jpg') }}" class="thumbnail-img"
              alt="Default Shop Logo">
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
                  <th class="45%" width="45%">Shop Name</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $data->shop_name }}</td>
                </tr>
                <tr>
                  <th width="45%">Shop Logo</th>
                  <td width="10%">:</td>
                  <td width="45%">
                    @if ($data->shop_logo)
                    <img src="{{ asset('/backend/uploads/' . $data->shop_logo) }}" class="thumbnail-img"
                      alt="Shop logo - {{ $data->shop_logo }}">
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
                  <td width="45%">{{ $data->primary_phone }}, {{ $data->secondary_phone }}</td>
                </tr>
                <tr>
                  <th width="45%">Shop Location</th>
                  <td width="10%">:</td>
                  <td width="45%">{{ $data->shop_location ?? null }}</td>
                </tr>

                <tr>
                  <th width="45%">Shop Address</th>
                  <td width="10%">:</td>
                  <td width="45%">{{ $data->shop_address ?? null }}, {{ $data->city }}</td>
                </tr>
              </tbody>
            </table>
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