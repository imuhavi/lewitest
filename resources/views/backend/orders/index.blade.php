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
      @if($page == 'index')
      <div class="col-md-12">
        <div class="row mailbox-header">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <div class="input-group" style="display: flex">
                  <div>
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                      <span class="icon-cloud-download" style="font-size: 14px;"></span> Export <span
                        class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Excel</a></li>
                      <li><a href="#">CSV</a></li>
                    </ul>
                  </div>
                  <input type="text" class="form-control date-picker" placeholder="From" style="margin: 0 10px">
                  <input type="text" class="form-control date-picker" placeholder="To">
                </div>
              </div>
              <div class="col-md-4">

              </div>
            </div>
          </div>

          <div class="col-md-3">
            <form action="{{ url(routePrefix() . '/orders') }}" method="get">
              <div class="input-group">
                <input class="form-control input-search" type="search" name="keyword"
                  value="{{ isset($keyword) ? $keyword : ''  }}" placeholder="Search from here...">
                <span class="input-group-btn">
                  <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                </span>
                <span class="input-group-btn">
                  <a href="{{ url( routePrefix() .'/orders') }}" class="btn btn-warning"
                    style="margin-left: 10px">Clear</a>
                </span>
              </div>
            </form>
          </div>
        </div>

        <div class="panel panel-white">
          @if(routePrefix() === 'admin')
          <div class="panel-body">
            <div class="table-responsive">
              <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Customer</th>
                    <th>Store</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($orders as $item)
                  <tr>
                    <td>#{{ $item->id }}</td>
                    <td>
                      SAR {{ $item->amount + $item->shipping_cost + $item->tax - $item->coupon_discount_amount }}
                    <td>
                      {{ $item->payment_method }}
                    </td>
                    <td>
                      @if($item->status == 'Complete')
                      @php
                      $status = 'success';
                      @endphp
                      @elseif($item->status == 'Cancel')
                      @php
                      $status = 'danger';
                      @endphp
                      @elseif($item->status == 'Accept')
                      @php
                      $status = 'info';
                      @endphp
                      @elseif($item->status == 'Pending')
                      @php
                      $status = 'warning';
                      @endphp
                      @endif
                      <span class="badge badge-pill badge-{{$status}}">
                        {{ $item->status }}
                      </span>
                    </td>
                    <td>
                      {{ $item->user->name }}
                    </td>

                    <td>
                      {{ $item->order_details[0]->seller->shop_name ?? '' }}
                    </td>

                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/order/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>

                      @if($item->status == 'Pending')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/accept') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      <a class="btn btn-warning"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/cancel') }}">
                        <i class="fa fa-times"></i>
                      </a>
                      @elseif($item->status == 'Accept')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/complete') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $orders->links() }}
            </div>
          </div>
          @endif

          @if(routePrefix() === 'seller')
          <div class="panel-body">
            <div class="table-responsive">
              <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Customer</th>
                    <th>Store</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($orders as $item)
                  <tr>
                    <td>#{{ $item->id }}</td>
                    <td>
                      SAR {{ $item->amount + $item->shipping_cost + $item->tax - $item->coupon_discount_amount }}
                    <td>
                      {{ $item->payment_method }}
                    </td>
                    <td>
                      @if($item->status == 'Complete')
                      @php
                      $status = 'success';
                      @endphp
                      @elseif($item->status == 'Cancel')
                      @php
                      $status = 'danger';
                      @endphp
                      @elseif($item->status == 'Accept')
                      @php
                      $status = 'info';
                      @endphp
                      @elseif($item->status == 'Pending')
                      @php
                      $status = 'warning';
                      @endphp
                      @endif
                      <span class="badge badge-pill badge-{{$status}}">
                        {{ $item->status }}
                      </span>
                    </td>
                    <td>
                      {{ $item->user->name }}
                    </td>

                    <td>
                      {{ $item->order_details[0]->seller->shop_name ?? '' }}
                    </td>

                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/order/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>

                      @if($item->status == 'Pending')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/accept') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      <a class="btn btn-warning"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/cancel') }}">
                        <i class="fa fa-times"></i>
                      </a>
                      @elseif($item->status == 'Accept')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/complete') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $orders->links() }}
            </div>
          </div>
          @elseif(routePrefix() === 'customer')

          <div class="panel-body">
            <div class="table-responsive">
              <table class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Customer</th>
                    <th>Store</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($orders as $item)
                  <tr>
                    <td>#{{ $item->id }}</td>
                    <td>
                      SAR {{ $item->amount + $item->shipping_cost + $item->tax - $item->coupon_discount_amount }}
                    <td>
                      {{ $item->payment_method }}
                    </td>
                    <td>
                      @if($item->status == 'Complete')
                      @php
                      $status = 'success';
                      @endphp
                      @elseif($item->status == 'Cancel')
                      @php
                      $status = 'danger';
                      @endphp
                      @elseif($item->status == 'Accept')
                      @php
                      $status = 'info';
                      @endphp
                      @elseif($item->status == 'Pending')
                      @php
                      $status = 'warning';
                      @endphp
                      @endif
                      <span class="badge badge-pill badge-{{$status}}">
                        {{ $item->status }}
                      </span>
                    </td>
                    <td>
                      {{ $item->user->name }}
                    </td>

                    <td>
                      {{ $item->order_details[0]->seller->shop_name ?? '' }}
                    </td>

                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/order/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>

                      @if($item->status == 'Pending')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/accept') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      <a class="btn btn-warning"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/cancel') }}">
                        <i class="fa fa-times"></i>
                      </a>
                      @elseif($item->status == 'Accept')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/order/' . $item->id . '/update/complete') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $orders->links() }}
            </div>
          </div>

          @endif
        </div>
      </div>
    </div>

    @elseif($page == 'show')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">

          <div class="panel-heading clearfix">
            <div class="text-left float-left">
              <h3 class="panel-title">Order Information</h3>
            </div>
            <div class="text-right">
              <a href="{{ url( routePrefix() .'/orders') }}" class="btn btn-info btn-sm">Go back</a>
            </div>
          </div>

          <div class="panel-body">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th class="45%" width="45%">Invoice No:</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">#{{ $singgleOrder->id }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Date:</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ date('d F, Y', strtotime($singgleOrder->created_at))}}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Customer Name</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->user ? $singgleOrder->user->name : 'N/A' }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Customer Email</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->user ? $singgleOrder->user->email : 'N/A' }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Shipping Address</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">
                    @if($singgleOrder->user && $singgleOrder->user->userDetail)
                    <p>{{ $singgleOrder->city($singgleOrder->user->userDetail->city_id) }}, {{
                      $singgleOrder->state($singgleOrder->user->userDetail->state_id) }}, {{
                      $singgleOrder->user->userDetail->address }}, {{ $singgleOrder->user->userDetail->postal_code }}
                    </p>
                    @else
                    N/A
                    @endif
                  </td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Product Name</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->order_details[0]->product->name }}</td>
                </tr>

                @if(!empty($singgleOrder->order_details[0]->size))
                <tr>
                  <th class="45%" width="45%">Product Size</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->order_details[0]->size }}</td>
                </tr>
                @endif

                @if(!empty($singgleOrder->order_details[0]->color))
                <tr>
                  <th class="45%" width="45%">Product Color</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->order_details[0]->color }}</td>
                </tr>
                @endif

                <tr>
                  <th class="45%" width="45%">Unit Price</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ number_format($singgleOrder->order_details[0]->unit_price, 2) }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Product Quantity</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">{{ $singgleOrder->order_details[0]->quantity }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Shipping Cost</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">SAR {{ number_format($singgleOrder->shipping_cost, 2) }}</td>
                </tr>

                <tr>
                  <th class="45%" width="45%">Tax</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">SAR {{ number_format($singgleOrder->tax, 2) }}
                  </td>
                </tr>

                @php
                $discount = $order->coupon_discount_amount ?? 0
                @endphp

                @if($discount != 0)
                <tr>
                  <th class="45%" width="45%">Discount Amount</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">SAR {{ $singgleOrder->order_details[0]->quantity }}</td>
                </tr>
                @endif

                <tr>
                  <th class="45%" width="45%">Total Amount</th>
                  <td width="10%">:</td>
                  <td class="45%" width="45%">SAR {{ number_format(($singgleOrder->amount + $singgleOrder->shipping_cost
                    +
                    $singgleOrder->tax) - $discount, 2) }}</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @endif


  </div><!-- Main Wrapper -->
  <div class="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by 5dots</p>
  </div>
</div><!-- Page Inner -->
@endsection