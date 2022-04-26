@extends('frontend.master')
@section('content')
<!-- Package Section Start -->
<section class="container py-5 position-relative" id="package">
  <div class="text-center mb-5">
    <h2 class=" section-title">Merchant Pricing</h2>
    <p>Pricing is the process whereby a business sets the price at which it will sell its products and services,<br>
      and
      may be
      part of the business marketing plan</p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 position-relative">
    <div class="col">
      <div class="card shadow">
        <div class="card-header text-center bg-dark p-2">
          <h3 class="text-white">Basic</h3>
        </div>
        <div class="card-body bg-light">
          <div class="package-price text-center mb-4">
            <h2 class="card-title">960.00 SAR</h2>
            <p><small>One Months</small></p>
          </div>
          <ul class="list-unstyled package-feature ">
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Full space
              access</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Dedicated
              team
            </li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Buffet
              food</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> premium
              Decoration</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> pay as
              plan</li>
          </ul>

        </div>
        <div class="card-footer text-center">
          <a href="{{ route('sellerRegister') }}" class="btn btn-dark w-75 p-2">Get Started</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header text-center bg-dark p-3 rounded-3">
          <h3 class="text-white">Standard</h3>
        </div>
        <div class="card-body bg-light">
          <div class="package-price text-center mb-4">
            <h2 class="card-title">2880.00 SAR</h2>
            <p><small>Three Months</small></p>
          </div>
          <ul class="list-unstyled package-feature ">
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Full space
              access</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Dedicated
              team
            </li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Buffet
              food</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> premium
              Decoration</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> pay as
              plan</li>
          </ul>

        </div>
        <div class="card-footer text-center">
          <a href="{{ route('sellerRegister') }}" class="btn btn-dark w-75 p-3">Get Started</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card shadow">
        <div class="card-header text-center bg-dark p-2">
          <h3 class="text-white">Premium</h3>
        </div>
        <div class="card-body bg-light">
          <div class="package-price text-center mb-4">
            <h2 class="card-title">5570.00 SAR</h2>
            <p><small>Six Months</small></p>
          </div>
          <ul class="list-unstyled package-feature ">
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Full space
              access</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Dedicated
              team
            </li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> Buffet
              food</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> premium
              Decoration</li>
            <li class="bg-white px-4 py-3 m-3 shadow-sm rounded-pill"><i class="fas fa-check-circle"></i> pay as
              plan</li>
          </ul>

        </div>
        <div class="card-footer text-center">
          <a href="{{ route('sellerRegister') }}" class="btn btn-dark w-75 p-2">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!------------------------------- 
                  Subscription Section
              -------------------------------->
<section id="subscription">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 p-md-4">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-7">
            <div class="subscribe-content">
              <h2>Get your update news</h2>
              <p>If you are going to use a passage of Lorem Ipsum, you need to <br>be sure there isn't anything
                embarrassing.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5">
            <form action="" class="subscribe-from">
              <div class="input-group">
                <input class="form-control subscribe-input" type="email" placeholder="Put Your Email">
                <button class="subscribe-btn" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection