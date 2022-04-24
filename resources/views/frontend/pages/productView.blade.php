@extends('frontend.master')
@section('header_css')
<link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/jquery.nice-number.min.css">
@endsection
@section('content')
<main>
  <section id="product-detials">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="product-image">
            <div class="slider">
              <div class="slide-item">
                <img id="img_01" class="img-fluid" src="{{ asset('frontend/assets/') }}/images/feature-img.jpeg"
                  alt="Feature Images">
              </div>

              <div class="slide-nav-item">

                <img id="img_02" class="img-fluid" src="{{ asset('frontend/assets/') }}/images/accesories-1.png"
                  alt="Feature Images">
              </div>
              <div class="slide-nav-item">

                <img id="img_03" class="img-fluid" src="{{ asset('frontend/assets/') }}/images/accesories-2.png"
                  alt="Feature Images">
              </div>
              <div class="slide-nav-item">

                <img id="img_04" class="img-fluid" src="{{ asset('frontend/assets/') }}/images/accesories-3.png"
                  alt="Feature Images">
              </div>
              <div class="slide-nav-item">

                <img id="img_05" class="img-fluid" src="{{ asset('frontend/assets/') }}/images/accesories-4.png"
                  alt="Feature Images">
              </div>
            </div>
            <div class="slide-nav">
              <div class="slide-nav-item">
                <img class="w-75" src="{{ asset('frontend/assets/') }}/images/feature-img.jpeg" alt="">
              </div>
              <div class="slide-nav-item">
                <img class="w-75" src="{{ asset('frontend/assets/') }}/images/accesories-1.png" alt="">
              </div>
              <div class="slide-nav-item">
                <img class="w-75" src="{{ asset('frontend/assets/') }}/images/accesories-2.png" alt="">
              </div>
              <div class="slide-nav-item">
                <img class="w-75" src="{{ asset('frontend/assets/') }}/images/accesories-3.png" alt="">
              </div>
              <div class="slide-nav-item">
                <img class="w-75" src="{{ asset('frontend/assets/') }}/images/accesories-4.png" alt="">
              </div>

            </div>
          </div>
        </div>

        <!--------------------------
              Product Content Details
          ---------------------------->
        <div class="col-md-6">
          <div class="product-content">
            <h3 class="title">Etiam rhoncus. Maecenas tempus, tellus eget condimentum</h3>
            <p class="summary">Loremipsum: Adolorsit amet</p>
            <h3 class="price">SAR 77.50</h3>
            <p class="previous-price">SAR <span class="old-price">100.00</span> <span class="discount">OFF 35%</span>
            </p>
            <div class="product-color">
              <p>Color: </p>
              <ul class="d-flex">
                <li><a href="#" class="color-1"></a></li>
                <li><a href="#" class="color-2"></a></li>
                <li><a href="#" class="color-3"></a></li>
                <li><a href="#" class="color-4"></a></li>
              </ul>
            </div>

            <div class="product-size">
              <p>Size: </p>
              <ul class="d-flex">
                <li><a href="#">S</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">XL</a></li>
                <li><a href="#">2XL</a></li>
              </ul>
            </div>

            <div class="product-qty mt-5">
              <div class="nice-number">
                <input class="qty-input" type="number" value="1" min="0">
              </div>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="add-wishlist"><img src="{{ asset('frontend/assets/') }}/images/heart.png"
                  alt="user-profile"></a>
            </div>

            <p class="category">Category: Beauty</p>
            <div class="d-flex share-product">
              <p>Share This Item:</p>
              <ul class="d-flex">
                <li class="me-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="me-3"><a href="#"><i class="fab fa-instagram"></i></li>
                <li class="me-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>

            <div class="installment-payment d-flex border justify-content-between align-items-center">
              <p>or 4 interest-free payment of <br> 300 AED. <a href="#">Learn More</a></p>

              <a href="#"><img class="img-fluid" src="{{ asset('frontend/assets/') }}/images/fitbit-logo.png"
                  alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--------------------------
        Product Details
    ---------------------------->
  <section id="product-description">
    <div class="container">
      <div class="row">
        <div class="col-12 product-descriptio-title">
          <ul class="nav mb-3 justify-content-center description-head" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                type="button" role="tab" aria-controls="pills-home" aria-selected="true">Product Description</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional
                Information</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque cupiditate veritatis quisquam. Ut eaque
              autem asperiores consequuntur hic, repellat unde. Adipisci alias numquam labore eius porro facere
              necessitatibus cum, accusamus, qui quia ut provident. Quam error aperiam, eveniet iusto voluptas est
              quasi
              molestiae tempore autem consequuntur adipisci deserunt delectus. Accusantium, ea at expedita delectus
              nisi
              fuga maiores doloremque praesentium earum libero in repellendus quidem officiis, ducimus suscipit
              eligendi
              quia. Similique tempore incidunt et. Quas aliquam sequi dolorum dolor consequuntur natus deleniti, nisi
              nam illo excepturi corporis ducimus, quidem inventore, nostrum soluta quaerat quis perspiciatis
              voluptatum
              suscipit voluptas beatae qui dicta.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Excepturi voluptatem quod ipsum sed nisi error dolor nobis eligendi commodi quis unde doloribus ea optio
              consectetur blanditiis non iure quam, corporis veniam harum ex eaque neque, mollitia quas. Rem
              recusandae,
              iure culpa eos harum voluptate at, labore tempore commodi neque consequuntur nobis sit non. Inventore
              praesentium deleniti nam neque corrupti harum, perspiciatis laudantium minus vitae quia laboriosam
              molestiae est odit beatae at optio id esse fugiat ipsam. Perferendis porro tempora illum perspiciatis
              dolores autem. Placeat, ullam est quaerat dolores impedit voluptatibus sit rerum aliquam temporibus
              incidunt, autem vero, obcaecati quae distinctio?</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <table class="table table-bordered">
                <tr>
                  <td>Product Name</td>
                  <td>Mobile Phone</td>
                </tr>
                <tr>
                  <td>Product Name</td>
                  <td>Product detailse</td>
                </tr>
                <tr>
                  <td>Product Name</td>
                  <td>Product detailse</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--------------------------
        Related Product
    --------------------------->
  <section id="related-category-product">
    <div class="container">
      <div class="row g-4">
        <h2 class="section-title text-center mb-4">Related Product</h2>
        <div class="col-md-3">
          <div class="related-product-container">
            <div class="product-img">
              <a class="w-100" href="#"><img class="img-fluid"
                  src="{{ asset('frontend/assets/') }}/images/product-img-5.jpeg" alt="product-img-1"></a>
            </div>
            <div class="p-3">
              <a href="#" class="product-title">Womes wihtie watches</a>
              <h3 class="new-price my-3 text-dark">SAR <span class="text-dark">230.00</span></h3>
              <div class="d-flex justify-content-between">
                <div class="off">
                  <span class="old-price text-dark">SAR 340</span>
                  <span class="discount">30% OFF</span>
                </div>
                <span class="wishlist"><i class="far fa-heart"></i></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="related-product-container">
            <a class="w-100" href="#"><img class="img-fluid"
                src="{{ asset('frontend/assets/') }}/images/product-img-6.png" alt="product-img-1"></a>

            <div class="p-3">
              <a href="#" class="product-title">Womens Red Clothes</a>
              <h3 class="new-price my-3 text-dark">SAR <span class="text-dark">230.00</span></h3>
              <div class="d-flex justify-content-between">
                <div class="off">
                  <span class="old-price text-dark">SAR 340</span>
                  <span class="discount">30% OFF</span>
                </div>
                <span class="wishlist"><i class="far fa-heart"></i></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="related-product-container">
            <a class="w-100" href="#"><img class="img-fluid"
                src="{{ asset('frontend/assets/') }}/images/product-img-7.png" alt="product-img-1"></a>

            <div class="p-3">
              <a href="#" class="product-title">Womens White Jeckets</a>
              <h3 class="new-price my-3 text-dark">SAR <span class="text-dark">230.00</span></h3>
              <div class="d-flex justify-content-between">
                <div class="off">
                  <span class="old-price text-dark">SAR 340</span>
                  <span class="discount">30% OFF</span>
                </div>
                <span class="wishlist"><i class="far fa-heart"></i></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="related-product-container">
            <a class="w-100" href="#"><img class="img-fluid"
                src="{{ asset('frontend/assets/') }}/images/product-img-9.png" alt="product-img-1"></a>

            <div class="p-3">
              <a href="#" class="product-title">Womens sunglass</a>
              <h3 class="new-price my-3 text-dark">SAR <span class="text-dark">230.00</span></h3>
              <div class="d-flex justify-content-between">
                <div class="off">
                  <span class="old-price text-dark">SAR 340</span>
                  <span class="discount">30% OFF</span>
                </div>
                <span class="wishlist"><i class="far fa-heart"></i></span>
              </div>
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