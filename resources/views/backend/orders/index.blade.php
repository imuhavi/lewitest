@extends('backend.master')
@section('order_active') active @endsection
@section('content')
<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb breadcrumb-with-header">
        <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url(routePrefix(). '/order-list') }}">Order</a></li>
        <li class="active">Order-list</li>
      </ol>
    </div>
  </div>
  <div id="main-wrapper">
    <div class="row">
      <div class="col-md-12">

        <div class="row mailbox-header">
          <div class="col-md-9">
            <h4 class="panel-title">Order List</h4>
          </div>

          <div class="col-md-3">
            <form action="{{ url(routePrefix() . '/product') }}" method="get">
              @csrf
              <div class="input-group">
                <input class="form-control input-search" type="search" name="keyword"
                  value="{{ isset($keyword) ? $keyword : ''  }}" placeholder="Search from here...">
                <span class="input-group-btn">
                  <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form>
          </div>
        </div>

        <div class="panel panel-white">

          <div class="panel-body">
            <div class="table-responsive">
              <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>Order</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($orders as $item)
                  <tr>
                    <td>Order Id #{{ $item->id }}</td>
                    <td>
                      SAR {{ $item->amount + $item->shipping_cost + $item->tax - $item->coupon_discount_amount }}
                    <td>
                      {{ $item->status }}
                    </td>
                    <td>
                      {{ $item->user->name }}
                    </td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/product/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>
                      <a class="btn btn-warning" href="{{ url(routePrefix(). '/product/' . $item->id . '/edit') }}"><i
                          class="fa fa-edit"></i></a>
                      <a class="btn btn-danger" href="{{ url(routePrefix(). '/product/delete/' . $item->id) }}"><i
                          class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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