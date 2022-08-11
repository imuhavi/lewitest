<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ str_replace('-', ' ',
    config('app.name')) }}</title>
  {{-- Ajax Request Meta --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://kit.fontawesome.com/b868f71921.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/') }}/css/bootstrap.min.css">
  @yield('header_css')
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/select2.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/nice-select.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/jquery.nice-number.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/slick.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/hs-menu.min.css" />
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/animate.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/material-design/css/material-design-iconic-font.css" />
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/carousel.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/custom.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/responsive.css">
  <link href="{{ asset('backend/') }}/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

  @php
  $categories = getCategories()
  @endphp


  <header>

    <!---------------------------
          Navbar Top Start 
  ---------------------------->

    <div class="nav-top">
      <div class="container d-flex justify-content-between align-items-center py-2">
        <form action="" class="search-box-desk d-flex align-items-center py-1 order-sm-1 order-1 order-lg-0">
          <div class="search-icon">
            <img class="img-fluid" src="{{ asset('frontend/assets') }}/images/search-normal.png" alt="search-icon">
          </div>
          <input class="search border-0 p-2 ms-1" type="search" id="" placeholder="Search items...">
        </form>
        <!-- Company Logo -->
        <a class="navbar-brand order-0 order-sm-0 order-lg-1" href="{{ route('home') }}"><span class="logo">Five
            Dots</span></a>
        <!-- User Action -->
        <ul class="top-bar-right d-flex align-items-center nav-right order-3 order-sm-3 order-lg-2">

          <li>
            @auth
            <a href="#" class="signIn" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img
                src="{{ asset('frontend/assets') }}/images/profile.png" alt="user-profile"></a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="{{ url(routePrefix(). '/dashboard') }}">{{
                  Str::words(Auth::user()->name) }}</a>
              </li>
              <li><a class="dropdown-item" href="#" onclick="logout()">Log out</a></li>
            </ul>
            <form method="POST" id="logoutForm" action="{{ route('logout') }}">
              @csrf
            </form>

            @else
            <a href="#" class="signIn" data-bs-toggle="modal" data-bs-target="#signIn"><img
                src="{{ asset('frontend/assets') }}/images/profile.png" alt="user-profile"></a>
            @endauth
          </li>

          <li><a href="#"><img src="{{ asset('frontend/assets') }}/images/heart.png" alt="user-profile"></a></li>

          <li><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"><img src="{{ asset('frontend/assets') }}/images/shopping-cart.png"
                alt="user-profile"></a></li>
        </ul>
      </div>
    </div>

    <!--------------------------
          Navbar Mega  Menu
    ---------------------------->
    <nav class="navbar navbar-expand-lg bg-light menu">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">{{ __('Home') }}</a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse mobile-menu" id="navbarNavDropdown">
          <ul class="main_menu navbar-nav">
            @foreach($categories as $category)
            <li class="static"><a href="#">{{
                $category->name }} <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  @foreach($category->subcategory as $subcategory)
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a
                          href="{{ route('subCategoryShop', ['id'=> $subcategory->id, 'slug' => $subcategory->slug]) }}">{{
                          $subcategory->name }}</a></li>
                    </ul>
                  </div>
                  @endforeach
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>

        <div class="nav-item dropdown d-none d-sm-none d-md-none d-lg-block">
          <a class="nav-link dropdown-toggle" href="#" id="language" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Language
          </a>
          <ul class="dropdown-menu" aria-labelledby="language">
            <li><a class="dropdown-item" href="#">Arabic</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!---------------------------
            SIGN IN START Modal
        ---------------------------->
    <section id="account">
      <div class="container">
        <!-- Modal For Login-->
        <div class="modal fade" id="signIn" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><span class="logo">Five Dots</span></h3>
                <!-- <button type="button"></button> -->
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>

                <p>Login with your email & password.</p>
              </div>

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-body">
                  <div class="row mt-3 g-3">
                    <div class="col-12">
                      <label for="email" class="form-label">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Your Email Address" name="email"
                        value="{{ old('email') }}">
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputAddress" placeholder="Password"
                        name="password" value="{{ old('password') }}">
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember Me
                        </label>
                      </div>
                      @if (Route::has('password.request'))
                      <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal" data-bs-target="#forgetPassword">Forget
                        Password?</a>
                      @endif
                    </div>

                    <div class="col-12">
                      <button class="login-btn">Log In</button>
                    </div>
              </form>

              <div class="col-12 text-center">
                <p class="login_or">Or</p>
              </div>

              <div class="col-12 login-with-google">
                <a class="google-login" href="{{ route('gmail') }}"><i class="fab fa-google"></i> Login With Google</a>
              </div>

              <!-- <div class="col-12 login-with-google">
                <a class="twitter-login" href="{{ route('github') }}"><i class="fab fa-twitter"></i> Login With
                  Twitter</a>
              </div>

              <div class="col-12 login-with-google">
                <a class="apple-login" href="{{ route('github') }}"><i class="fab fa-github"></i> Login With
                  Github</a>
              </div> -->

              <div class="d-flex justify-content-center">
                <p>Don't have any account? <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal"
                    data-bs-target="#signUp">Register</a></p>
              </div>

            </div>
          </div>

        </div>
      </div>
      </div>

      <!-- Modal For Sign Up -->
      <div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3><span class="logo">Five Dots</span></h3>
              <!-- <button type="button"></button> -->
              <a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>

              <p>By Register, you agree to our <a href="#">terms</a> & <a href="#">policy.</a></p>
            </div>
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="modal-body">
                <div class="row mt-3 g-3">
                  <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name"
                      value="{{ old('name') }}">
                  </div>

                  <div class="col-12">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address"
                      value="{{ old('email') }}">
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputAddress" placeholder="Password" name="password"
                      required autocomplete="new-password">
                  </div>

                  <div class="col-12">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="inputAddress" placeholder="Confirm Password"
                      name="password_confirmation">
                  </div>

                  <div class="col-12">
                    <button class="login-btn">Register</button>
                  </div>

                  <div class="col-12 text-center">
                    <p class="login_or">Or</p>
                  </div>

                  <div class="col-12 login-with-google">
                    <a class="google-login" href="{{ route('gmail') }}"><i class="fab fa-google"></i> Login With
                      Google</a>
                  </div>

                  <div class="col-12 login-with-google">
                    <a class="twitter-login" href="{{ route('github') }}"><i class="fab fa-twitter"></i> Login With
                      Twitter</a>
                  </div>

                  <div class="col-12 login-with-google">
                    <a class="apple-login" href="{{ route('github') }}"><i class="fab fa-github"></i> Login With
                      Github</a>
                  </div>

                  <div class="d-flex justify-content-center">
                    <p>Already have an account? <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal"
                        data-bs-target="#signIn">Login</a></p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Modal For Forget Password -->
      <div class="modal fade" id="forgetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3><span class="logo">Five Dots</span></h3>
              <!-- <button type="button"></button> -->
              <a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>

              <p>We'll send you a link to reset your password.</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="modal-body forgetPassword-modal">
                <div class="row mt-3 g-3">

                  <div class="col-12">
                    <label for="email" class="form-label">Email Address *</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address">
                  </div>

                  <div class="col-12">
                    <button class="login-btn">Submit Email</button>
                  </div>


                  <div class="col-12 text-center">
                    <p class="login_or">Or</p>
                  </div>

                  <div class="d-flex justify-content-center">
                    <p>Back to <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal"
                        data-bs-target="#signIn">Login</a>
                    </p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      </div>
    </section>
    <!---------------------------
        Cart Item Off canvas
    ---------------------------->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"></div>

    <!----------------------
              Mobile Menu 
      ----------------------->
    <div class="menu-trigger hs-menubar"> <i class="fas fa-bars"></i></div>

    <nav class="hs-navigation">
      <ul class="nav-links">

        @foreach($categories as $category)
        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span> {{ $category->name }} <i class="fas fa-angle-down"></i></span>
          <ul class="its-children">
            <li class="has-child">
              @foreach($category->subcategory as $subcategory)
              <a href="#"> {{ $subcategory->name }} </a>
              @endforeach
            </li>
          </ul>
        </li>
        @endforeach
      </ul>
    </nav>
  </header>

  <script>
    let logoutForm = document.getElementById('logoutForm')
    function logout() {
      event.preventDefault()
      if (confirm('Are you sure to logout ?')) logoutForm.submit()
    }

    let cartWrapper = document.getElementById('offcanvasRight')
    function getCart() {
      fetch('/get-cart')
        .then(response => response.text())
        .then(data => cartWrapper.innerHTML = data)
        .catch(error => console.log(error))
    }
    onload = () => getCart()

    function removeCart(key) {
      fetch(`/remove-cart/${key}`)
        .then(response => response.json())
        .then(data => {
          alert(data)
          getCart()
        })
        .catch(error => console.log(error))
    }
  </script>