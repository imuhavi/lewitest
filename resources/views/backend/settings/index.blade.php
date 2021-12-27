@extends('backend.master')
@section('settings_active')  active @endsection
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
        <div class="col-md-3">
          <div class="panel panel-white">
              <div class="panel-heading clearfix">
                  <h3 class="panel-title">Settings</h3>
              </div>

              <div class="panel-body">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      {{-- General Settings --}}
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#general_settings"
                                      aria-expanded="true" aria-controls="collapseOne">
                                      General Settings
                                  </a>
                              </h4>
                          </div>

                          <div id="general_settings" class="panel-collapse collapse in" role="tabpanel"
                              aria-labelledby="headingOne">
                              <div class="panel-body">  
                                <div class="tabs-left" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#generalSetting" role="tab"
                                                data-toggle="tab">General Settings</a></li>
                                        <li role="presentation"><a href="#seo" role="tab" data-toggle="tab">SEO</a>
                                        </li>

                                        <li role="presentation"><a href="#mail" role="tab" data-toggle="tab">Mail Configuration</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                              </div>
                          </div>
                      </div>

                      {{-- Socail Login Settings --}}
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                      href="#socail_login" aria-expanded="false" aria-controls="collapseTwo">
                                      Social Logins
                                  </a>
                              </h4>
                          </div>

                          <div id="socail_login" class="panel-collapse collapse" role="tabpanel"
                              aria-labelledby="headingTwo">
                              <div class="panel-body">
                                <div class="tabs-left" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a href="#facebook" role="tab"
                                                data-toggle="tab">Facebook </a></li>

                                        <li role="presentation"><a href="#google" role="tab" data-toggle="tab">Google</a>
                                        </li>

                                        <li role="presentation"><a href="#twitter" role="tab" data-toggle="tab">Twitter</a>
                                        </li>

                                    </ul>
                                </div>
                              </div>
                          </div>
                      </div>

                      {{-- Payment Getway Setup --}}
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                      href="#payment_method" aria-expanded="false" aria-controls="collapseTwo">
                                      Payment Methods
                                  </a>
                              </h4>
                          </div>


                          <div id="payment_method" class="panel-collapse collapse" role="tabpanel"
                              aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  

                                <div class="tabs-left" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a href="#payment" role="tab"
                                                data-toggle="tab">Setup Payment Methods </a></li>
                                    </ul>
                                </div>


                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="col-md-9">

           <div class="panel panel-white">
             <div class="panel-body">
               <!-- Tab panes -->
               <div class="tab-content">
                   {{-- General Settings --}}
                   <div role="tabpanel" class="tab-pane active fade in" id="generalSetting">
                       <div class="card mb-4">
                           <form action="" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="card-body">

                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Website Name</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <input type="text" name="website_title" id="website_title"
                                               class="form-control">
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Website Logo (White)</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="file" accept="image/*"
                                               onchange="previewImage('whiteLogo', this.files)"
                                               name="profile_photo" id="profile_photo" class="form-control">
                                       </div>
                                       <div class="col-sm-4" style="margin-top: 10px">
                                           <img class="img avatar" id="whiteLogo"
                                               src="{{ asset('backend/assets/default-img/user.jpeg') }}" alt=""
                                               width="80px" height="80px">
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Website Logo (Black)</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="file" accept="image/*"
                                               onchange="previewImage('blackLogo', this.files)" name="profile_photo"
                                               id="profile_photo" class="form-control">
                                       </div>
                                       <div class="col-sm-4" style="margin-top: 10px">
                                           <img class="img avatar" id="blackLogo"
                                               src="{{ asset('backend/assets/default-img/user.jpeg') }}" alt=""
                                               width="80px" height="80px">
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Website Email</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <input type="email" id="email" class="form-control" name="web_mail">
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Web Mobile Number</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <input type="tel" name="phone" class="form-control" id="phone">
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Address</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <textarea name="address" id="address" class="form-control"></textarea>
                                       </div>
                                   </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Copyright Text</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea name="address" id="address" class="form-control"></textarea>
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

                   {{-- SEO Settings --}}
                   <div role="tabpanel" class="tab-pane fade" id="seo">
                       <div class="card mb-4">
                           <form action="" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="card-body">

                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Meta Title</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <input type="text" name="website_title" id="website_title"
                                               class="form-control">
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Meta Description</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <textarea name="address" id="address" class="form-control"></textarea>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Meta Keyword</p>
                                       </div>
                                       <div class="col-sm-9">
                                           <input type="tel" name="phone" class="form-control" id="phone">
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

                   {{-- Mail Setup Settings --}}
                   <div role="tabpanel" class="tab-pane fade" id="mail">
                       <div class="card mb-4">
                           <form action="" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="card-body">

                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Type</p>
                                       </div>
                                       <div class="col-sm-5">
                                          <select name="mailtype" id="" class="form-control">
                                            <option value="" select disabled>Select Type</option>
                                            <option value="">SMTP</option>
                                            <option value="">GMAIL</option>
                                          </select>
                                       </div>
                                   </div>
                                   <hr>

                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Host</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="text" name="mailhost" class="form-control" id="mailhost">
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Port</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="tel" name="mailport" class="form-control" id="mailport">
                                       </div>
                                   </div>
                                   
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Username</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="text" name="mailusername" class="form-control" id="mailusername">
                                       </div>
                                   </div>
                                   
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Password</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="text" name="mailpassword" class="form-control"
                                               id="mailpassword">
                                       </div>
                                   </div>
                                   
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Encryption</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="text" name="mailencryption" class="form-control"
                                               id="mailencryption">
                                       </div>
                                   </div>
                                   
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail Address</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="email" name="mailaddress" class="form-control" id="mailaddress">
                                       </div>
                                   </div>
                                   
                                   <hr>
                                   <div class="row">
                                       <div class="col-sm-3">
                                           <p class="mb-0">Mail From Name</p>
                                       </div>
                                       <div class="col-sm-5">
                                           <input type="text" name="mailfromname" class="form-control"
                                               id="mailfromname">
                                       </div>
                                   </div>
                                   
                                   <div class="row" style="margin-top: 20px">
                                       <div class="col-sm-8 text-right ">
                                           <button class="btn btn-info" type="submit">Save Configuration</button>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>

                   </div>

                   {{-- Social Login Facebook --}}
                   <div role="tabpanel" class="tab-pane fade" id="facebook">
                     <div class="card mb-4">
                         <form action="" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="card-body">

                                 <div class="row">
                                     <div class="col-sm-3">
                                         <p class="mb-0">App Id</p>
                                     </div>
                                     <div class="col-sm-5">
                                         <input type="text" name="app_id" id="app_id"
                                             class="form-control">
                                     </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <p class="mb-0">App Secret</p>
                                     </div>
                                     <div class="col-sm-5">
                                         <input type="text" name="app_secret" class="form-control" id="app_secret">
                                     </div>
                                 </div>

                                 <div class="row" style="margin-top: 20px">
                                     <div class="col-sm-8 text-right ">
                                         <button class="btn btn-info" type="submit">Update</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                   </div>

                   {{-- Social Login Google --}}
                   <div role="tabpanel" class="tab-pane fade" id="google">
                     <div class="card mb-4">
                         <form action="" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="card-body">

                                 <div class="row">
                                     <div class="col-sm-3">
                                         <p class="mb-0">Client Id</p>
                                     </div>
                                     <div class="col-sm-5">
                                         <input type="text" name="client_id" id="client_id" class="form-control">
                                     </div>
                                 </div>
                                 <hr>
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <p class="mb-0">Client Secret</p>
                                     </div>
                                     <div class="col-sm-5">
                                         <input type="text" name="client_secret" class="form-control" id="client_secret">
                                     </div>
                                 </div>

                                 <div class="row" style="margin-top: 20px">
                                     <div class="col-sm-8 text-right ">
                                         <button class="btn btn-info" type="submit">Update</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                   </div>

                    {{-- Social Login Twitter --}}
                    <div role="tabpanel" class="tab-pane fade" id="twitter">
                        <div class="card mb-4">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Twitter App Id</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="twitter_app_id" id="twitter_app_id" class="form-control">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Twitter App Secret</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="twitter_app_secret" class="form-control" id="twitter_app_secret">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 20px">
                                        <div class="col-sm-8 text-right ">
                                            <button class="btn btn-info" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                     {{-- Payment Method --}}
                     <div role="tabpanel" class="tab-pane fade" id="payment">
                         <div class="card mb-4">
                             <form action="" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <div class="card-body">

                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Publisable Key</p>
                                         </div>
                                         <div class="col-sm-5">
                                             <input type="text" name="publisable_key" id="publisable_key"
                                                 class="form-control">
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <p class="mb-0">Publisable Secret</p>
                                         </div>
                                         <div class="col-sm-5">
                                             <input type="text" name="publisable_sectet" class="form-control"
                                                 id="publisable_sectet">
                                         </div>
                                     </div>

                                     <div class="row" style="margin-top: 20px">
                                         <div class="col-sm-8 text-right ">
                                             <button class="btn btn-info" type="submit">Update</button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
               </div>
             </div>
           </div>
        </div>

      </div>
    </div>

  </div>
@endsection