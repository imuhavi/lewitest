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
                        <h4 class="panel-title">Manage Profile Information</h4>
                    </div>
                    <div class="panel-body">
                        <div class="card mb-4">
                            <form action="{{ url('/admin/update-profile') }}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="card-body">

                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Profile Photo</p>
                                      </div>
                                      <div class="col-sm-5">
                                          <input type="file"
                                            accept="image/*"
                                            onchange="previewImage('avatar_preview', this.files)"
                                            name="profile_photo" id="profile_photo" class="form-control">
                                      </div>
                                      <div class="col-sm-4">
                                        @if(auth()->user()->avatar)
                                            <img class="img avatar" id="avatar_preview"
                                                src="{{ asset('backend/images' . auth()->user()->avatar) }}" alt="" width="80px" height="80px">
                                        @else
                                            <img class="img avatar" id="avatar_preview"
                                                src="{{ asset('backend/assets/default-img/user.jpeg') }}" alt="" width="80px" height="80px">
                                        @endif
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Full Name</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="text" name="full_name" value="{{ auth()->user()->name }}" id="full_name" class="form-control">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Email</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="email" name="email" value="{{ auth()->user()->email }}" id="email" class="form-control">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Phone(primary)</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="tel" name="phone" value="{{ auth()->user()->phone_1 }}" id="phone" class="form-control">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Mobile(optional)</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="tel" name="mobile" value="{{ auth()->user()->phone_2 }}"  id="mobile" class="form-control">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Address</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <textarea name="address" value="{{ auth()->user()->address }}"  id="address" class="form-control"></textarea>
                                      </div>
                                  </div>
                                  <div class="row" style="margin-top: 20px">
                                    <div class="col-sm-12 text-right ">
                                      <button class="btn btn-info" type="submit">Save Changes</button>
                                    </div>
                                  </div>
                              </div>
                            </form>
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
                        <form action="#" method="POST">

                          @csrf
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
                            <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Update</button>
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