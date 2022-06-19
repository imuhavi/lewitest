@extends('frontend.master')
@section('header_css')
<link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/jquery.nice-number.min.css">
@endsection
@section('content')
<main>
  <!-- Bradcum Here -->
  <div class="container my-3">
    <nav aria-label="breadcrumb my-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add to Cart</li>
      </ol>
    </nav>
  </div>

  <section id="cart_view">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-12 col-sm-12 col-md-12">
          <div class="cart_item_heading">
            <h5>My Cart (4 Items) </h5>
            <h4>Total: SAR 906</h4>
          </div>

          <div class="select_all">
            <input type="checkbox">
            <p>select all (5 items)</p>
            <a href="#"><i class="far fa-trash-alt"></i>delete</a>
          </div>

          <div class="cart_list">
            <div class="cart_item_details">
              <div class="check_box">
                <input type="checkbox">
              </div>
              <div class="cart_pro_img">
                <img src="{{ asset('frontend/assets/') }}/images/product-img-2.png" alt="product">
              </div>
              <div class="cart_pro_text">
                <p class="item_name">your product name here</p>
                <a href="#"><i class="far fa-trash-alt"></i></a>
                <a href="#"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="cart_text_tk">
                <input type="number" placeholder="1" value="1" min="0">
                <h6>SAR 906</h6>
              </div>
            </div>
            <div class="cart_item_details">
              <div class="check_box">
                <input type="checkbox">
              </div>
              <div class="cart_pro_img">
                <img src="{{ asset('frontend/assets/') }}/images/product-img-2.png" alt="product">
              </div>
              <div class="cart_pro_text">
                <p class="item_name">your product name here</p>
                <a href="#"><i class="far fa-trash-alt"></i></a>
                <a href="#"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="cart_text_tk">
                <input type="number" placeholder="1" value="1" min="0">
                <h6>SAR 906</h6>
              </div>
              <div class="cart_text"></div>
            </div>
            <div class="cart_item_details">
              <div class="check_box">
                <input type="checkbox">
              </div>
              <div class="cart_pro_img">
                <img src="{{ asset('frontend/assets/') }}/images/product-img-3.png" alt="product">
              </div>
              <div class="cart_pro_text">
                <p class="item_name">your product name here</p>
                <a href="#"><i class="far fa-trash-alt"></i></a>
                <a href="#"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="cart_text_tk">
                <input type="number" placeholder="1" value="1" min="0">
                <h6>SAR 906</h6>
              </div>
              <div class="cart_text"></div>
            </div>
          </div>


        </div>

        <div class="col-lg-12 col-12 col-sm-12 col-md-12">
          <div class="checkout_text">

            <h4 class="order">Order summary</h4>
            <p>Subtotal (5 items) <span>SAR 500</span></p>
            <p>Shipping Cost <span>+ SAR 30</span></p>
            <p>Tax <span>+ SAR 100</span></p>
            <hr>
            <h6 class="total">Grand Total <span> SAR 630</span></h6>
            <p>Discount<span>SAR 230</span></p>

            <hr>
            <h6 class="total">Total Amount <span> SAR 350</span></h6>

            <div class="checkout-btn">
              <a href="" class="btn common-btn">Proceed to Checkout</a>
            </div>
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
                <p>We connect the dots.</p>
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
</main>

@endsection
@section('footer_js')
<!-- Nice Number -->
<script src="{{ asset('/frontend/assets/') }}/js/jquery.nice-number.min.js"></script>
@endsection