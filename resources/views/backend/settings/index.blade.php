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
                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                      aria-expanded="true" aria-controls="collapseOne">
                                      General Settings
                                  </a>
                              </h4>
                          </div>
                          
                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                              aria-labelledby="headingOne">
                              <div class="panel-body">
                                  
                                <div class="tabs-left" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#generalSetting" role="tab"
                                                data-toggle="tab">General Settings</a></li>
                                        <li role="presentation"><a href="#seo" role="tab" data-toggle="tab">SEO</a>
                                        </li>
                                       
                                    </ul>

                                   
                                </div>


                              </div>
                          </div>
                      </div>

                      <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                      href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Social Logins
                                  </a>
                              </h4>
                          </div>

                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                              aria-labelledby="headingTwo">
                              <div class="panel-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                  ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                  quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                  it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                  helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                  excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                  sustainable VHS.
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="col-md-9">
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
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" name="full_name" value="{{ auth()->user()->name }}"
                                            id="full_name" class="form-control">
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
                                        <input type="email" title="You can not update your verified email" disabled
                                            value="{{ auth()->user()->email }}" id="email" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone(primary)</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="tel" name="phone" value="{{ auth()->user()->phone_1 }}" id="phone"
                                            class="form-control">
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
                                        <input type="tel" name="mobile" value="{{ auth()->user()->phone_2 }}"
                                            id="mobile" class="form-control">
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
                                        <textarea name="address" id="address"
                                            class="form-control">{{ auth()->user()->address }}</textarea>
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

               {{-- SEO Settings --}}
               <div role="tabpanel" class="tab-pane fade" id="seo">
                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                       commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                       penatibus et magnis dis parturient montes, nascetur ridiculus
                       mus.</p>
               </div>

               <div role="tabpanel" class="tab-pane fade" id="tab11">
                   <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                       sem. Nulla consequat massa quis enim. Donec pede justo,
                       fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                       rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
               </div>

               <div role="tabpanel" class="tab-pane fade" id="tab12">
                   <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                       sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
                       Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id,
                       lorem. Maecenas nec odio et ante tincidunt tempus.</p>
               </div>
           </div>
        </div>

      </div>
    </div>

  </div>
@endsection