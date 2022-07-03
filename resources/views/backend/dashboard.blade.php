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
            <h3>Total Revenue</h3>
            <h2><span data-plugin=" counterup">SAR 2049</span>
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
            <h3>Total Customer</h3>
            <h2><span data-plugin=" counterup">3293</span>
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
            <h3>Total Product</h3>
            <h2><span data-plugin=" counterup">500</span>
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
            <h3>Total Shop</h3>
            <h2><span data-plugin=" counterup">20</span>
            </h2>
            <p>Jan - Apr 2017</p>
          </div>
          <div>
            <i class="icon-home"></i>
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
            <h3 class="panel-title">Latest Withdrow</h3>
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
    <p class="no-s">Made with <i class="fa fa-heart"></i> by 5dots</p>
  </div>
</div><!-- Page Inner -->
@endsection