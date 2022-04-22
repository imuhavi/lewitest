@extends('frontend.master')
@section('content')
<main>
  <section class="checkout-section">
    <div class="container">
      <div class="row breadcrumb-main">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>

      </div>
      <div class="row">
        <!-- Shipping Address -->
        <div class="col-lg-7 p-0 left">
          <div class="shipping-form">
            <div class="heading-checkout">
              <h4>Billing Details</h4>
            </div>
            <div class="row mt-3 g-3">
              <div class="col-lg-12">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Your Full Name">
              </div>
              <div class="col-lg-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email Address">
              </div>
              <div class="col-5 col-md-6 col-lg-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Your Phone Number">
              </div>

              <div class="col-lg-5 col-md-6">
                <label for="state" class="form-label">State</label>
                <select id="state" class="form-select state">
                  <option selected>Choose State</option>
                  <option>Eastern Provence</option>
                </select>
              </div>

              <div class="col-lg-4 col-md-6">
                <label for="city" class="form-label">City</label>
                <select id="city" class="form-select city">
                  <option selected>Choose City</option>
                  <option>Dammam</option>
                </select>
              </div>

              <div class="col-lg-3 col-md-6">
                <label for="inputZip" class="form-label">Postal Code</label>
                <input type="text" class="form-control" id="inputZip">
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor">
              </div>

              <div class="col-12">
                <label for="orderNotes" class="form-label">Order Notes</label>
                <textarea class="form-control" id="orderNotes" placeholder="Note About Your Order..."></textarea>
              </div>
            </div>
          </div>

          <div class="payment-method">
            <div class="heading-checkout">
              <h4>Select Payment Method</h4>
            </div>
            <ul class="payment-method-list">
              <li>
                <input id="bank" type="checkbox">
                <label for="bank">Direct Bank Transfer</label>
              </li>
              <li>
                <input id="paypal" type="checkbox">
                <label for="paypal">Paypal</label>
              </li>
              <li>
                <input id="card" type="checkbox">
                <label for="card">Credit Card</label>
              </li>
              <li>
                <input id="delivery" type="checkbox">
                <label for="delivery">Cash on Delivery</label>
              </li>
            </ul>
          </div>
        </div>

        <!-- Order Item % Calculation -->
        <div class="col-lg-5 p-0 right">
          <div class="order-summary">
            <div class="heading-checkout">
              <h4>Your Order Items</h4>
            </div>
            <div class="row order-item">
              <div class="col-3 text-start0">
                <img class="rounded w-75" src="{{ asset('frontend/assets/') }}/images/product-img-2.png" alt="product">
              </div>
              <div class="col-6">
                <p>Your Product Name Here</p>
                <p>
                  <small>
                    (Color: red, Size: SM)
                  </small>
                </p>
              </div>
              <div class="col-3 text-end">
                <p>SAR 120</p>
              </div>
            </div>

            <div class="row order-item">
              <div class="col-3">
                <img class="rounded w-75" src="{{ asset('frontend/assets/') }}/images/product-img-2.png" alt="product">
              </div>
              <div class="col-6">
                <p>Your Product Name Here</p>
                <p>
                  <small>
                    (Color: red, Size: SM)
                  </small>
                </p>
              </div>
              <div class="col-3 text-end">
                <p>SAR 120</p>
              </div>
            </div>

            <div class="row order-item">
              <div class="col-3">
                <img class="rounded w-75" src="{{ asset('frontend/assets/') }}/images/product-img-2.png" alt="product">
              </div>
              <div class="col-6">
                <p>Your Product Name Here</p>
                <p>
                  <small>
                    (Color: red, Size: SM)
                  </small>
                </p>
              </div>
              <div class="col-3 text-end">
                <p>SAR 120</p>
              </div>
            </div>


          </div>

          <div class="order-calculation">
            <div class="heading-checkout">
              <h4>Payment Calculation</h4>
            </div>
            <div class="row mt-3 g-3">
              <div class="col-6">
                <h6>Subtotal:</h6>
              </div>
              <div class="col-6">
                <h6 class="price-text sub-total-text text-end"> SAR 41.40 </h6>
              </div>

              <div class="col-6">
                <h6>Shipping Cost:</h6>
              </div>
              <div class="col-6">
                <h6 class="price-text sub-total-text text-end"> SAR 41.40 </h6>
              </div>

              <div class="col-6">
                <h6>Tax:</h6>
              </div>
              <div class="col-6">
                <h6 class="price-text sub-total-text text-end"> SAR 41.40 </h6>
              </div>

              <div class="col-6">
                <h6>Discount Amount:(If applicable)</h6>
              </div>
              <div class="col-6">
                <h6 class="price-text sub-total-text text-end"> SAR 41.40 </h6>
              </div>
              <hr>
              <div class="col-6">
                <h5>Total Amount</h5>
              </div>
              <div class="col-6">
                <h5 class="price-text sub-total-text text-end"> SAR 441.40 </h5>
              </div>
            </div>

          </div>

          <div class="place-order">
            <button class="place-order-button">Place Order</button>
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
</main>
@endsection