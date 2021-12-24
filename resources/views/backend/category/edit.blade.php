@extends('backend.master');
@section('category_active')
active
@endsection
@section('content')
<div class="page-inner">
    <div class="page-title">
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('category.index') }}">Category</a></li>
                <li class="active">Category-Edit</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">

        <div class="row">
            <div class="col-md-8">

                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Category List</h4>
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
                        <h4 class="panel-title">Edit Category</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category">Category Name</label>
                                    <input type="text" class="form-control m-t-xxs" id="category"
                                        placeholder="category name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category_img">Choose Category Photo</label>
                                    <input type="file" class="form-control" name="category_img" id="category_img"
                                        onchange="previewImage('category_preview', this.files)">
                                </div>

                                <img class="img-thumbnail" src="{{ asset('backend/assets/default-img/user.jpeg') }}"
                                    id="category_preview" width="100" height="100" />
                            </div>

                            <div class="status">
                                <label class="no-s">
                                    <input type="checkbox"> Active
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Save Changes</button>
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