@extends('backend.master')
@section('dashboard_active')
active
@endsection
@section('content')
<div class="page-inner">
  <div class="page-title">
    <div class="page-breadcrumb">
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </div>
  </div>
  <div id="main-wrapper">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel-green dashboar-card">
          <div>
            <p>Total Revenue</p>
            <h2><span data-plugin=" counterup">65841</span>
            </h2>
            <p>Jan - Apr 2017</p>
          </div>
          <div>
            <i class="fa fa-money" aria-hidden="true"></i>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-lg-3 col-md-6">
        <div class="panel-blue dashboar-card">
          <div>
            <p>Total Customer</p>
            <h2><span data-plugin=" counterup">65841</span>
            </h2>
            <p>Jan - Apr 2017</p>
          </div>
          <div>
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div><!-- end col -->

      <div class="col-lg-3 col-md-6">
        <div class="panel-yellow dashboar-card">
          <div>
            <p>Total Products</p>
            <h2><span data-plugin=" counterup">65841</span>
            </h2>
            <p>Jan - Apr 2017</p>
          </div>
          <div>
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>

          </div>
        </div>
      </div><!-- end col -->

      <div class="col-lg-3 col-md-6">
        <div class="panel-red dashboar-card">
          <div>
            <p>Total Shop</p>
            <h2><span data-plugin=" counterup">65841</span>
            </h2>
            <p>Jan - Apr 2017</p>
          </div>
          <div>
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div><!-- end col -->


    </div>
    <!-- end row -->
    <hr>

    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-white">
          <div class="panel-heading clearfix">
            <h3 class="panel-title">Sales</h3>
            <div class="panel-control">
              <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-reload"
                data-original-title="Reload"><i class="icon-reload"></i></a>
            </div>
          </div>
          <div class="panel-body">
            <div class="panel-header-stats">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <i class="icon-basket"></i>
                  <h4 class="no-m">$14,213</h4>
                </div>
                <div class="col-md-3 col-xs-6">
                  <i class="icon-globe"></i>
                  <h4 class="no-m">$374,700</h4>
                </div>
                <div class="col-md-3 col-xs-6">
                  <i class="icon-credit-card"></i>
                  <h4 class="no-m">$2,134</h4>
                </div>
                <div class="col-md-3 col-xs-6">
                  <i class="icon-shield"></i>
                  <h4 class="no-m">907</h4>
                </div>
              </div>
            </div>
            <div>
              <canvas id="chart1" height="165"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="panel panel-white">
          <div class="panel-heading clearfix">
            <h3 class="panel-title">Orders</h3>
          </div>
          <div class="panel-body statement-card">
            <div class="statement-card-head">
              <h3>Latest Order</h3>
              <p><sup>$</sup><b>207,430</b></p>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <th scope="row">ORDER ID 4111</th>
                  <td>johndoe</td>
                  <td>N1</td>
                  <td class="text-success"><b>$16</b></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Main Wrapper -->
  <div class="page-footer">
    <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
  </div>
</div><!-- Page Inner -->
@endsection