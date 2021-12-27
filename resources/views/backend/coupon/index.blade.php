@extends('backend.master');
@section('coupon_active')
active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url(routePrefix(). '/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url(routePrefix(). '/coupon') }}">Coupon</a></li>
                <li class="active">Coupon-list</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="row">
            <div class="col-md-8">

                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Coupon List</h4>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <a class="btn btn-info" href="#">Edit</a>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Create Coupon</h4>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="coupon_name">Coupon Name</label>
                                    <input type="text" class="form-control m-t-xxs" id="coupon_name"
                                        placeholder="Coupon name">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="coupon_code">Coupon Code</label>
                                    <input type="text" class="form-control m-t-xxs" id="coupon_name"
                                        placeholder="Coupon Code">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="starting_date">Starting date of Coupon</label>
                                    <input type="date" name="starting_date"
                                        class="form-control"
                                        id="starting_date" placeholder="Ex: New Year 2021">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="end_date">End date of Coupon</label>
                                    <input type="date" name="end_date"
                                        class="form-control"
                                        id="end_date" placeholder="Ex: New Year 2021">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="discount_type">Discount Type</label>
                                    <select class="form-control" name="discount_type" id="discount_type">
                                        <option value="" disabled selected>Select Discount Type</option>
                                        <option value="1">Fixed Amount($)</option>
                                        <option value="2">Percentage(%)</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="discount_amount">Discount Amount</label>
                                    <input type="number" name="discount_amount"
                                        class="form-control" placeholder="Ex: 300">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="min_amount">Minium Amount</label>
                                    <input type="number" name="min_amount"
                                        class="form-control" id="min_amount"
                                        placeholder="Ex: 300">
                                </div>
                            </div>



                            <div class="from-row status">
                                <label class="no-s">
                                    <input type="checkbox"> Active
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
                        </form>
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