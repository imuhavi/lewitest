# Multi vendor ecommerce application

## Rasel

    1) Project init
    2) Laravel Default Authentication System Add
    3) Backend Templete Mastaring Done
    4) Category, subcateogry, product, copun model,controler and blade page create.
    5) Email Verification Testing and Mailtrip SMTP Setup
    6) User Profile Blade Page Create and Design
    7) Brand Blade/model/controler Create
    8) Order Blade / Seller Blade
    9) Update Routes / Add Mailbox Blade and Compose
    10) Settings Blade Design Done
    11) Sucategory CRUD
    12) Brand CRUD Done
    13) Customer List
    14) Seller List View
    15) Seller/Store Profile View
    16) Sellerseeder File Create insert demo data
    17) Seller Profile
    18) Update Seller Profile Design

## Hridoy

    1) Project docs file init
    2) Route files created for admin, seller & customer
    3) Middleware created for admin, seller & customer
    4) Custom helper file created
    5) Middleware updated for admin, seller & customer
    6) Update migration files (Category, Subcategory & Coupon)
    7) Profile update
    8) Password update
    9) Category CRUD
    10) Default category
    11) Website setting
    12) Socail config


Profile (Seller section)

<!-- @if ( auth()->user()->role == $isSeller)
    <hr>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-white">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Manage Seller Information</h4>
          </div>
          <div class="panel-body">
            <div class="card mb-4">
              <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Shop Logo</p>
                    </div>
                    <div class="col-sm-5">
                      <input type="file" accept="image/*" onchange="previewImage('shop_logo_preview', this.files)"
                        name="shop_logo" id="shop_logo" class="form-control">
                    </div>
                    <div class="col-sm-4">
                      @if($data->shop_logo)
                      <img class="img avatar" id="shop_logo_preview"
                        src="{{ asset('backend/uploads/' . $data->shop_logo) }}" alt="Shop-{{ $data->shop_logo }}"
                        width="80px" height="80px">
                      @else
                      <img class="img avatar" id="shop_logo_preview"
                        src="{{ asset('backend/assets/default-img/noimage.jpg') }}" alt="shop default logo" width="80px"
                        height="80px">
                      @endif
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Shop Name</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="shop_name" value="{{ $data->shop_name }}" id="shop_name"
                        class="form-control">
                      @error('shop_name')
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
                        value="{{ $data->email }}" id="email" class="form-control">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone(primary)</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="tel" name="primary_phone" value="{{ $data->primary_phone }}" id="primary_phone"
                        class="form-control">
                      @error('primary_phone')
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
                      <input type="tel" name="secondary_phone" value="{{ $data->secondary_phone }}" id="secondary_phone"
                        class="form-control">
                      @error('secondary_phone')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="shop_location" value="{{ $data->shop_location }}" id="shop_location"
                        class="form-control">
                      @error('shop_location')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="shop_address" value="{{ $data->shop_address }}" id="shop_address"
                        class="form-control">
                      @error('shop_address')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="col-sm-3">
                      <input type="text" name="city" value="{{ $data->city }}" id="city" class="form-control">
                      @error('address')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="row" style="margin-top: 20px">
                    <div class="col-sm-12 text-right ">
                      <button class="btn btn-info" type="submit">Save Change</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif -->