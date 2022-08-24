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
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="panel-green dashboar-card">
          <div>
            <h3>Avaiable Balance</h3>
            <h2><span data-plugin=" counterup">SAR 1000.00</span>
            </h2>
          </div>
          <div>
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-md-4"></div>
      <div class="col-lg-4 col-md-6">
        <div class="panel-blue dashboar-card">
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
            <div class="">
              <!-- Small modal -->
              <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm">Payout
                Request</button>

              <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="mySmallModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                      massa. Cum
                      sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br><br>Donec
                      quam
                      felis,
                      ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                      justo,
                      fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                      venenatis
                      vitae,
                      justo.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                  </div>
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
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Transation Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>
                      <a class="btn btn-info" href="#">Edit</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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