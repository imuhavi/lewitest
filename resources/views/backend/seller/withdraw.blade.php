@extends('backend.master')
@section('seller_active') active open @endsection
@section('subseller2') active @endsection
@section('content')
<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb breadcrumb-with-header">
        <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url(routePrefix(). '/seller-list') }}">Seller</a></li>
        <li class="active">Withdraw</li>
      </ol>
    </div>
  </div>
  <div id="main-wrapper">
    @if(auth()->user()->role == 'seller')
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="panel-red dashboar-card">
          <div>
            <h3>Avaiable Balance</h3>
            <h2><span data-plugin=" counterup">SAR {{ number_format(auth()->user()->balance, 2) }}</span>
            </h2>
          </div>
          <div>
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-md-4"></div>
      <div class="col-lg-4 col-md-6">
        <div class="panel-yellow dashboar-card">
          <div>
            <h3>Pending Balance</h3>
            <h2><span data-plugin=" counterup">SAR 100.00</span>
            </h2>
          </div>
          <div>
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
        </div>
      </div><!-- end col -->

    </div>
    <!-- end row -->
    <hr>
    @endif
    <div class="row">
      <div class="col-md-12">
        <div class="row mailbox-header">
          <div class="col-md-7">
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

          <div class="col-md-2">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i
                class="icon-plus"></i> Payout
              Request</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">PAYOUT REQUEST</h3>

                  </div>
                  <hr>
                  <div class="modal-body">
                    <h3>Available balance: <strong>SAR {{ number_format(auth()->user()->balance, 2) }}</strong></h3>

                    <form action="{{ route('withdrawRequest') }}" method="post">
                      @csrf
                      <div class="input-group m-b-sm">
                        <span class="input-group-addon" id="basic-addon1">SAR</span>
                        <input name="amount" type="number" required max="{{ number_format(auth()->user()->balance) }}"
                          class="form-control" placeholder="Amount" aria-describedby="basic-addon1">
                      </div>

                      <small>Minimum withdrawal limit is SAR 100.00</small>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  </form>
                </div>
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
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-white">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Withdraw Request List</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Transation Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($data as $key => $item)
                  <tr>
                    <td>{{ $data->firstitem() + $key }}</td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                    <td>SR {{ $item->amount }}</td>
                    <td>Not Avaiable</td>
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
                      <a class="btn btn-info" href="{{ url(routePrefix(). '/withdrow/' . $item->id) }}"><i
                          class="fa fa-eye"></i></a>

                      @if(auth()->user()->role == 'Admin')
                      @if($item->status == 'Pending')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/withdrow/' . $item->id . '/update/accept') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      <a class="btn btn-warning"
                        href="{{ url(routePrefix(). '/withdrow/' . $item->id . '/update/cancel') }}">
                        <i class="fa fa-times"></i>
                      </a>
                      @elseif($item->status == 'Accept')
                      <a class="btn btn-success"
                        href="{{ url(routePrefix(). '/withdrow/' . $item->id . '/update/complete') }}">
                        <i class="fa fa-check"></i>
                      </a>
                      @endif
                      @endif
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="5" class="text-center">
                      <strong>No Withdrow Request Avaiable!</strong>
                    </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Row -->

    @if($page == 'show')
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-info">

        <div class="panel-heading clearfix">
          <div class="text-left float-left">
            <h3 class="panel-title">Withdraw</h3>
          </div>
          <div class="text-right">
            <a href="{{ url(routePrefix() . '/withdraw') }}" class="btn btn-info btn-sm">Go back</a>
          </div>
        </div>

        <div class="panel-body">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th class="45%" width="45%">Seller Name</th>
                <td width="10%">:</td>
                <td class="45%" width="45%">{{ $singgleWithdraw }}</td>
              </tr>

            </tbody>
          </table>
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