@extends('backend.master')
@section('order_active') active @endsection

@section('content')
<style>
  @page {
    size: auto;
    margin: 0mm;
  }
</style>
<div class="page-inner">
  <div class="page-title" id="page-title">
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
                    <th>Order Create</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Customer</th>
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
                    </td>
                    <td>
                      {{ $item->created_at->diffForHumans() }}
                    </td>


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



                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/order/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>

                      @if(auth()->user()->role == 'Admin')
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
                    <th>Product SKU</th>
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
                      {{ $item->order_details }}
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
                      {{ $item->order_details[0]->shop->shop_name ?? '' }}
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

    <div id="main-wrapper">
      <div class="row">
        <div class="invoice col-md-12">
          <div class="panel panel-white">
            <div class="panel-body" id="print_invoice">
              <div class="row">
                <div class="col-md-12">
                  <table class="table">
                    <tr>
                      <td style="border-top: none !important;">
                        <h2 class="m-b-md m-t-xxs"><b>5dots</b></h2>
                        Al-Khobar<br>
                        Phone: (123) 456-7890
                      </td>
                      <td class="text-right" style="border-top: none !important;">
                        <h2 class="m-b-md m-t-xxs">Invoice: #{{ $singleOrder->id }}</h2>
                        <a href="{{ url( routePrefix() .'/orders') }}" class="btn btn-info btn-sm" id="button">Go
                          back</a>
                        <button type="button" class="btn btn-default" onclick="invoicePrint()"><i
                            class="fa fa-print"></i>
                          Print</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong class="m-b-md">Shipping Address</strong><br>
                        @if($singleOrder->user && $singleOrder->user->userDetail)
                        <p>{{ $singleOrder->user->userDetail->postal_code }}, {{
                          $singleOrder->user->userDetail->address }},<br> {{
                          $singleOrder->city($singleOrder->user->userDetail->city_id) }}, <br>{{
                          $singleOrder->state($singleOrder->user->userDetail->state_id) }}.
                        </p>
                        @else
                        N/A
                        @endif
                      </td>
                      <td class="text-right">
                        <strong class="m-b-md">Customer Details</strong><br>
                        <p>
                          {{ $singleOrder->user ? $singleOrder->user->name : 'N/A' }} <br>
                          {{ $singleOrder->user ? $singleOrder->user->email : 'N/A' }} <br>
                          {{ $singleOrder->user ? $singleOrder->user->phone_1 : 'N/A <br>' }}
                          {{ date('d F, Y', strtotime($singleOrder->created_at))}}
                        </p>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-12">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>SL</th>
                        <th>Product Name</th>
                        <th>SKU</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Quanity</th>
                        <th>Price</th>
                        <th class="text-right">Total</th>
                      </tr>
                    </thead>
                    @php
                    $total = 0;
                    @endphp
                    <tbody>
                      @foreach($singleOrder->order_details as $key => $order)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->product->product_sku }}</td>
                        <td>
                          @if(!empty($order->size))
                          {{ $order->size }}
                          @endif
                        </td>
                        <td>
                          @if(!empty($order->color))
                          {{ $order->color }}
                          @endif
                        </td>
                        <td>
                          {{ $order->quantity }}
                        </td>
                        <td>
                          SA {{ $order->unit_price }}
                        </td>
                        <td class="text-right">
                          SA {{ $order->unit_price * $order->quantity}}
                        </td>

                        @php
                        $total += ($order->unit_price * $order->quantity)
                        @endphp
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12">
                  @php
                  $discount = $singleOrder->coupon_discount_amount
                  @endphp

                  <table class="table">
                    <tr>
                      <td width="75%" style="border-top: none;"></td>
                      <td style="border-top: none;">
                        <table class="table">
                          <tr>
                            <td class="text-right" style="padding: 5px !important">
                              <h4 class="no-m">Subtotal</h4>
                              <h3 class="no-m m-t-sm">SA {{ number_format($total, 2) }}</h3>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-right" style="padding: 5px !important">
                              <h4 class="no-m">Shipping</h4>
                              <h3 class="no-m m-t-sm">SA {{ number_format($singleOrder->shipping_cost, 2) }}</h3>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-right" style="padding: 5px !important">
                              <h4 class="no-m">Tax</h4>
                              <h3 class="no-m m-t-sm">SA {{ $singleOrder->tax }}</h3>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-right" style="padding: 5px !important">
                              <h4 class="no-m">Discount</h4>
                              <h3 class="no-m m-t-sm">SA {{ number_format($discount, 2) }}</h3>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-right" style="padding: 5px !important">
                              <h4 class="no-m text-success">Total Amount</h4>
                              <h2 class="no-m text-success m-t-sm">SA {{ number_format(($singleOrder->amount +
                                $singleOrder->shipping_cost
                                +
                                $singleOrder->tax) - $discount, 2) }}</h2>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>

              </div>
              <!--row-->
            </div>
          </div>
        </div>
      </div><!-- Row -->
    </div><!-- Main Wrapper -->
    @endif


  </div><!-- Main Wrapper -->
  <div class="page-footer" id="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by 5dots</p>
  </div>
</div><!-- Page Inner -->
@endsection

@section('footer_js')
<script>
  let button = document.getElementById("button");
  let page_title = document.getElementById("page-title");
  let footer = document.getElementById("page-footer")
  function invoicePrint() {
    footer.style.display = 'none'
    button.style.display = 'none';
    page_title.style.display = 'none';
    window.print()
  }
</script>
@endsection