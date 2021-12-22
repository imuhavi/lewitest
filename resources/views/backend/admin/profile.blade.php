@extends('backend.master');
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb breadcrumb-with-header">
                  <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                  <li><a href="#">User</a></li>
                  <li class="active">User-Profile</li>
              </ol>
          </div>
      </div>
      <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">User Profile Information</h4>
                    </div>
                    <div class="panel-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Change Password</h4>
                    </div>
                    <div class="panel-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="current_password">Current Passord</label>
                                    <input type="password" class="form-control m-t-xxs" id="current_password"
                                        placeholder="Current Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="new_password">New Passord</label>
                                    <input type="password" class="form-control m-t-xxs" id="new_password"
                                        placeholder="Current Password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="conformation_password">Confirm Passord</label>
                                    <input type="password" class="form-control m-t-xxs" id="conformation_password"
                                        placeholder="Confirm Password">
                                </div>
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