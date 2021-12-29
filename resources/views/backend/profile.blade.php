@extends('backend.master')
@section('content')
  <div class="page-inner">
      <div class="page-title">
          <div class="page-breadcrumb">
              <ol class="breadcrumb breadcrumb-with-header">
                  <li><a href="{{ url( routePrefix() . '/dashboard') }}">Dashboard</a></li>
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
                            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
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
                                                src="{{ asset('backend/uploads/' . auth()->user()->avatar) }}" alt="" width="80px" height="80px">
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
                                            @error('full_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Email</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="email" title="You can not update your verified email" disabled value="{{ auth()->user()->email }}" id="email" class="form-control">
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Phone(primary)</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="tel" name="phone" value="{{ auth()->user()->phone_1 }}" id="phone" class="form-control">
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Mobile(optional)</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <input type="tel" name="mobile" value="{{ auth()->user()->phone_2 }}"  id="mobile" class="form-control">
                                            @error('mobile')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-sm-3">
                                          <p class="mb-0">Address</p>
                                      </div>
                                      <div class="col-sm-9">
                                          <textarea name="address" id="address" class="form-control">{{ auth()->user()->address }}</textarea>
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                      </div>
                                  </div>
                                  <div class="row" style="margin-top: 20px">
                                    <div class="col-sm-12 text-right ">
                                      <button class="btn btn-info" type="submit">Update</button>
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
                        <form action="{{ route('updatePassword') }}" method="POST">
                          @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="current_password">Current Passord</label>
                                    <input type="password" name="current_password" class="form-control m-t-xxs" id="current_password"
                                        placeholder="Current Password">
                                    @error('current_password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password">New Passord</label>
                                    <input type="password" name="password" class="form-control m-t-xxs" id="password"
                                        placeholder="Current Password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="conformation_password">Confirm Passord</label>
                                    <input type="password" class="form-control m-t-xxs" name="password_confirmation" id="conformation_password"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info m-t-xs m-b-xs">Update</button>
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