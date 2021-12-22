@extends('backend.backend-master');
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
                  <li class="active">Category-list</li>
              </ol>
          </div>
      </div>
      <div id="main-wrapper">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-white">
                      <div class="panel-heading clearfix text-right">
                          <a href="" class="btn btn-outline-primary mb-3"> <i class="icon-plus"></i> Add Category</a>
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
          </div><!-- Row -->
      </div><!-- Main Wrapper -->
      <div class="page-footer">
          <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
      </div>
  </div><!-- Page Inner -->
@endsection