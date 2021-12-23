@extends('backend.master');
@section('brand_active')
active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('brand.index') }}">Brand</a></li>
                <li class="active">Brand-list</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Brand List</h4>
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
                        <h4 class="panel-title">Add Brand</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="brand">Brand Name</label>
                                    <input type="text" class="form-control m-t-xxs" id="brand"
                                        placeholder="brand name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="brand_img">Choose Brand Photo</label>
                                    <input type="file" class="form-control" name="brand_img" id="brand_img"
                                        onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                                </div>

                                <img class="img-thumbnail" src="{{ asset('backend/assets/default-img/user.jpeg') }}"
                                    id="image_id" width="100" height="100" />
                            </div>

                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Save</button>
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