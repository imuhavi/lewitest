<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5dots Multi-vendor E-commerces</title>
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/b868f71921.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Css link -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/assets/') }}/css/bootstrap.min.css">

  @yield('header_css')

  <!-- Select 2 -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/select2.css">


  <!-- Nice Select -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/nice-select.css">

  <!-- Nice Number Style -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets/') }}/css/jquery.nice-number.min.css">



  <!-- Owl carousel -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/owl.theme.default.min.css">
  <!-- Slick Slider Css Link -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/slick.css">

  <!-- hs Menu CSS-->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/hs-menu.min.css" />

  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/animate.css">

  <!--Material Design Iconic Font-->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/material-design/css/material-design-iconic-font.css" />

  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/carousel.css">

  <!-- Custom Css Link -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/custom.css">
  <!-- Responsive Css Link -->
  <link rel="stylesheet" href="{{ asset('/frontend/assets') }}/css/responsive.css">
</head>


<body>
  @if(request()->path() !== 'subscription' && explode('/', request()->path())[0] !== 'seller-register')
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

          <li><a href="{{ route('wishlist') }}"><img src="{{ asset('frontend/assets') }}/images/heart.png"
                alt="user-profile"></a></li>

          <li><a href="pages/cart.html" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
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

        <div class="collapse navbar-collapse mobile-menu" id="navbarNavDropdown">
          <ul class="main_menu navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="home">Home </a>
            </li>
            <li class="nav-item"><a href="product.html">new arrival</a></li>
            <li class="static"><a href="#">Clothes <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">sofa</li>
                      <li><a href="#">All Sofa</a></li>
                      <li><a href="#">Fabric Sofa</a></li>
                      <li><a href="#">Wooden Sofa</a></li>
                      <li><a href="#">L-Shaped Sofa</a></li>
                      <li><a href="#">Leather Sofa</a></li>
                      <li><a href="#">Rexin Sofa</a></li>
                      <li><a href="#">Sofa-Bed</a></li>
                      <li><a href="#">3-Seater Sofa</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">center table</li>
                      <li><a href="#">All Center Table</a></li>
                      <li><a href="#">Center Table with Glass Top</a></li>
                      <li><a href="#">Center Table with Wooden Top</a></li>
                      <li><a href="#">Center Table with Storage</a></li>
                      <li><a href="#">Corner Table</a></li>
                      <li><a href="#">Modular Center Table</a></li>
                      <li><a href="#">Non-Lacquer Center Table</a></li>
                      <li><a href="#">Nested Table</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">tv cabinet</li>
                      <li><a href="#">All TV Cabinet</a></li>
                      <li><a href="#">TV Cabinet with Hanging Unit</a></li>
                      <li><a href="#">Low Height TV Cabinet</a></li>
                      <li><a href="#">Modular TV Cabinet</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">divan</li>
                      <li><a href="#">All Divan</a></li>
                      <li><a href="#">Fabric Divan</a></li>
                      <li><a href="#">Wooden Divan</a></li>
                      <li><a href="#">Modular Divan</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">open shelves</li>
                      <li><a href="#">All Open Shelves</a></li>
                      <li><a href="#">Book Shelves</a></li>
                      <li><a href="#">Wall Shelves</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">chair</li>
                      <li><a href="#">Rocking Chair</a></li>
                      <li><a href="#">Easy Chair</a></li>
                      <li><a href="#">Lobby Chair</a></li>
                      <li><a href="#">Accent Chair</a></li>
                      <li><a href="#">Foot Stool</a></li>
                      <li><a href="#">Telephone Seater</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">shoe rack</li>
                      <li><a href="#">All Shoe Rack</a></li>
                      <li><a href="#">Storage</a></li>
                      <li><a href="#">Shoe Rack with Mirror</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Cradle</li>
                      <li><a href="#">All Cradle</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">File Rack</li>
                      <li><a href="#"> All File Rack</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">lobby</li>
                      <li><a href="#">All Set</a></li>
                      <li><a href="#">Lobby Table</a></li>
                      <li><a href="#">Lobby Chair</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">stand</li>
                      <li><a href="#"> Hanger Stand</a></li>
                      <li><a href="#">Iron Stand</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="static"><a href="#">Beauty <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Bed</li>
                      <li><a href="#">All Bed</a></li>
                      <li><a href="#"> King Size Bed</a></li>
                      <li><a href="#">Wooden Sofa</a></li>
                      <li><a href="#">Queen Size Bed</a></li>
                      <li><a href="#">Semi Double Bed</a></li>
                      <li><a href="#">Bed with Storage</a></li>
                      <li><a href="#">Sofa cum Bed</a></li>
                      <li><a href="#">Folding Bed</a></li>
                      <li><a href="#">Folding Wall Mounted Bed</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Wardrobe</li>
                      <li><a href="#">All Wardrobe</a></li>
                      <li><a href="#">Wardrobe with Mirror</a></li>
                      <li><a href="#">Modular Wardrobe</a></li>
                      <li><a href="#">Non-Lacquer 2-Door Wardrobe</a></li>
                      <li><a href="#">Non-Lacquer 3-Door Wardrobe</a></li>
                      <li><a href="#">Non-Lacquer 4-Door Wardrobe</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Chest Of Drawers</li>
                      <li><a href="#">All Chest of Drawers</a></li>
                      <li><a href="#">Non-Lacquer Chest of Drawers</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title"> Reading Table</li>
                      <li><a href="#">All Reading Table</a></li>
                      <li><a href="#">Folding Reading Table</a></li>
                      <li><a href="#">Reading Table Chair</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Dressing Table</li>
                      <li><a href="#">All Dressing Table</a></li>
                      <li><a href="#">Non-Lacquer Dressing Table</a></li>
                      <li><a href="#">Dressing Table Seater</a></li>
                      <li><a href="#">Dressing Table with Storage</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Bed-side Table</li>
                      <li><a href="#">All Bed Side Table</a></li>
                      <li><a href="#">Low Height Bed-side Table</a></li>
                      <li><a href="#">Non-Lacquer Bed Side Table</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Almirah</li>
                      <li><a href="#">All Household Almirah</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Mattress</li>
                      <li><a href="#">All Mattress</a></li>
                      <li><a href="#">King Size Mattress</a></li>
                      <li><a href="#">Queen Size Mattress</a></li>
                      <li><a href="#"> Semi Double Mattress</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="static"><a href="#">Perfumes <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  <div class="col-lg-4">
                    <ul class="mega_item">
                      <li class="menu_title">Dining</li>
                      <li><a href="#"> All Dining Table Set</a></li>
                      <li><a href="#">8-Seater Dining Table Set</a></li>
                      <li><a href="#">6-Seater Dining Table Set</a></li>
                      <li><a href="#">4-Seater Dining Table Set</a></li>
                      <li><a href="#">Round-Shaped Dining Table Set</a></li>
                      <li><a href="#">Dining Table Set with Glass Top</a></li>
                      <li><a href="#">Dining Table Set with Wooden Top</a></li>
                      <li><a href="#">Dining Table Set with Wall Hanging</a></li>
                      <li><a href="#">Extendable Dining Table Set</a></li>
                      <li><a href="#">All Dining Table</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Chair</li>
                      <li><a href="#">All Dining Chair</a></li>
                      <li><a href="#">Wooden Dining Chair</a></li>
                      <li><a href="#">Fabric Dining Chair</a></li>
                      <li><a href="#">Wooden Bench</a></li>
                      <li><a href="#">Step Ladder-Chair</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Cafeteria</li>
                      <li><a href="#">All Cafeteria Set</a></li>
                      <li><a href="#">Cafeteria Table</a></li>
                      <li><a href="#">Fabric Dining Chair</a></li>
                      <li><a href="#">Cafeteria Chair</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Dinner Wagon</li>
                      <li><a href="#">All Dinner Wagon</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Showcase</li>
                      <li><a href="#">All Showcase</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Tea Trolley</li>
                      <li><a href="#">All Tea Trolley</a></li>
                      <li><a href="#">Wooden Tea Trolley</a></li>
                      <li><a href="#">Serving Tray</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Mini Cabinet</li>
                      <li><a href="#">All Mini Cabinet</a></li>
                      <li><a href="#">Bar Cabinet</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="static"><a href="#">Accesories <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Sofa</li>
                      <li><a href="#">All Sofa</a></li>
                      <li><a href="#">Fabric Sofa</a></li>
                      <li><a href="#">Wooden Sofa</a></li>
                      <li><a href="#">Rexin Sofa</a></li>
                      <li><a href="#">3-Seater Sofa</a></li>
                      <li><a href="#">2-Seater Sofa</a></li>
                      <li><a href="#"> Single Seater</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Side Rack</li>
                      <li><a href="#">All Side Rack</a></li>
                      <li><a href="#">Lacquer Side Rack</a></li>
                      <li><a href="#">Non-Lacquer Side Rack</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Conference Table</li>
                      <li><a href="#">All Conference Table</a></li>
                      <li><a href="#">Lacquer Conference Table</a></li>
                      <li><a href="#">Non-Lacquer Conference Table</a></li>
                      <li><a href="#">Modular Conference Table</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Swivel Chair</li>
                      <li><a href="#">Chief Executive Chair</a></li>
                      <li><a href="#">Mid-Level Executive Chair</a></li>
                      <li><a href="#"> Executive Chair</a></li>
                    </ul>
                    <ul class="mega_item">
                      <li class="menu_title">Fixed Chair</li>
                      <li><a href="#">All Fixed Chair</a></li>
                      <li><a href="#">Visitor Chair</a></li>
                      <li><a href="#">Auditorium Chair</a></li>
                      <li><a href="#">Group Chairr</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Executive Table</li>
                      <li><a href="#">All Executive Table</a></li>
                      <li><a href="#">Lacquer Executive Table</a></li>
                      <li><a href="#">Non-Lacquer Executive Table</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Office Almirah</li>
                      <li><a href="#">All Office Almirah</a></li>
                      <li><a href="#">Mild Steel Drawer Unit</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li class="menu_title">Computer Table</li>
                      <li><a href="#">All Computer Table</a></li>
                      <li><a href="#">Lacquer Computer Table</a></li>
                      <li><a href="#">Non-Lacquer Computer Table</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="static"><a href="#">Electronics <i class="fas fa-angle-down"></i></a>
              <div class="mega_full">
                <div class="row">
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a href="#">All Institutional</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a href="#">Hotel &amp; Restaurant</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a href="#">Hospital</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a href="#">Academic</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-2">
                    <ul class="mega_item">
                      <li><a href="#">Auditori</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Men's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Women's</a>
            </li>
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
        <div class="modal fade" id="signIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3><span class="logo">Five Dots</span></h3>
                <!-- <button type="button"></button> -->
                <a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></a>

                <p>Login with your email & password.</p>
              </div>
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
                      <input type="text" class="form-control" id="inputAddress" placeholder="Password" name="password"
                        value="{{ old('password') }}">
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
                <button class="google-login"><i class="fab fa-google"></i> Login With Google</button>
              </div>

              <div class="col-12 login-with-google">
                <button class="twitter-login"><i class="fab fa-twitter"></i> Login With Twitter</button>
              </div>

              <div class="col-12 login-with-google">
                <button class="apple-login"><i class="fab fa-apple"></i> Login With Apple</button>
              </div>

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

            <div class="d-flex justify-content-center">
              <p>Already have an account? <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal"
                  data-bs-target="#signIn">Login</a></p>
            </div>
          </div>
        </div>
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
            <div class="modal-body forgetPassword-modal">
              <div class="row mt-3 g-3">
                <div class="col-12">
                  <label for="email" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="email" placeholder="Your Email Address">
                </div>

                <div class="col-12">
                  <button class="login-btn">Submit Email</button>
                </div>

                <div class="col-12 text-center">
                  <p class="login_or">Or</p>
                </div>

                <div class="d-flex justify-content-center">
                  <p>Back to <a href="#" class="fs-6 fw-bold" data-bs-toggle="modal" data-bs-target="#signIn">Login</a>
                  </p>
>>>>>>> 3f2498e320ddd00010e32bd8a8ce4138d0dc414b
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      </div>
    </section>

    <!---------------------------
        Cart Item Off canvas
    ---------------------------->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Shopping Cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="order-summary">
          <div class="heading-checkout">
            <h5>Your Order Items</h5>
          </div>
          <div class="row order-item">
            <div class="col-3 text-start0">
              <img class="rounded w-75" src="{{ asset('frontend/assets') }}/images/product-img-2.png" alt="product">
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
              <span class="cart-item-del"><i class="fas fa-trash-alt"></i></span>
            </div>
          </div>

          <div class="row order-item">
            <div class="col-3">
              <img class="rounded w-75" src="{{ asset('frontend/assets') }}/images/product-img-2.png" alt="product">
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
              <span class="cart-item-del"><i class="fas fa-trash-alt"></i></span>
            </div>
          </div>

          <div class="row order-item">
            <div class="col-3">
              <img class="rounded w-75" src="{{ asset('frontend/assets') }}/images/product-img-2.png" alt="product">
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
              <span class="cart-item-del"><i class="fas fa-trash-alt"></i></span>
            </div>
          </div>



        </div>

        <div class="order-calculation">
          <div class="row">
            <div class="col-6">
              <h5>Total Amount</h5>
            </div>
            <div class="col-6">
              <h5 class="price-text sub-total-text text-end"> SAR 441.40 </h5>
            </div>
          </div>

        </div>

        <div class="place-order">
          <a href="{{ route('cart') }}" class="place-order-button">Process To Checkout</a>
        </div>

      </div>
    </div>

    <!----------------------
              Mobile Menu 
      ----------------------->
    <div class="menu-trigger hs-menubar"> <i class="fas fa-bars"></i></div>

    <nav class="hs-navigation">
      <ul class="nav-links">
        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>new arrival<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">
            <li class="has-child">
              <a href="product.html">all item</a>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>living <i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">sofa <i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">sofa 1</a> </li>
                <li> <a href="#1">sofa 2</a> </li>
                <li> <a href="#1">sofa 3</a> </li>
                <li> <a href="#1">sofa 4</a> </li>
                <li> <a href="#1">sofa 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">center table <i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">center table 1 </a> </li>
                <li> <a href="#1">center table 2 </a> </li>
                <li> <a href="#1">center table 3 </a> </li>
                <li> <a href="#1">center table 4 </a> </li>
                <li> <a href="#1">center table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">tv cabinet<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">tv cabinet 1 </a> </li>
                <li> <a href="#1">tv cabinet 2 </a> </li>
                <li> <a href="#1">tv cabinet 3 </a> </li>
                <li> <a href="#1">tv cabinet 4 </a> </li>
                <li> <a href="#1">tv cabinet 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">open shelves<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">open shelves 1 </a> </li>
                <li> <a href="#1">open shelves 2 </a> </li>
                <li> <a href="#1">open shelves 3 </a> </li>
                <li> <a href="#1">open shelves 4 </a> </li>
                <li> <a href="#1">open shelves 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">shoe rack<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">shoe rack 1 </a> </li>
                <li> <a href="#1">shoe rack 2 </a> </li>
                <li> <a href="#1">shoe rack 3 </a> </li>
                <li> <a href="#1">shoe rack 4 </a> </li>
                <li> <a href="#1">shoe rack 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">lobby<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">lobby 1 </a> </li>
                <li> <a href="#1">lobby 2 </a> </li>
                <li> <a href="#1">lobby 3 </a> </li>
                <li> <a href="#1">lobby 4 </a> </li>
                <li> <a href="#1">lobby 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">divan<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">divan 1 </a> </li>
                <li> <a href="#1">divan 2 </a> </li>
                <li> <a href="#1">divan 3 </a> </li>
                <li> <a href="#1">divan 4 </a> </li>
                <li> <a href="#1">divan 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">chair<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">chair 1 </a> </li>
                <li> <a href="#1">chair 2 </a> </li>
                <li> <a href="#1">chair 3 </a> </li>
                <li> <a href="#1">chair 4 </a> </li>
                <li> <a href="#1">chair 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Cradle<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Cradle 1 </a> </li>
                <li> <a href="#1">Cradle 2 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">stand<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">stand 1 </a> </li>
                <li> <a href="#1">stand 2 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">File Rack<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">File Rack 1 </a> </li>
                <li> <a href="#1">File Rack 2 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>bedroom<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">bed<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">bed 1</a> </li>
                <li> <a href="#1">bed 2</a> </li>
                <li> <a href="#1">bed 3</a> </li>
                <li> <a href="#1">bed 4</a> </li>
                <li> <a href="#1">bed 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">Wardrobe<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Wardrobe 1 </a> </li>
                <li> <a href="#1">Wardrobe 2 </a> </li>
                <li> <a href="#1">Wardrobe 3 </a> </li>
                <li> <a href="#1">Wardrobe 4 </a> </li>
                <li> <a href="#1">Wardrobe 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Chest Of Drawers<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Chest Of Drawers 1 </a> </li>
                <li> <a href="#1">Chest Of Drawers 2 </a> </li>
                <li> <a href="#1">Chest Of Drawers 3 </a> </li>
                <li> <a href="#1">Chest Of Drawers 4 </a> </li>
                <li> <a href="#1">Chest Of Drawers 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Dressing Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Dressing Table 1 </a> </li>
                <li> <a href="#1">Dressing Table 2 </a> </li>
                <li> <a href="#1">Dressing Table 3 </a> </li>
                <li> <a href="#1">Dressing Table 4 </a> </li>
                <li> <a href="#1">Dressing Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Bed-side Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Bed-side Table 1 </a> </li>
                <li> <a href="#1">Bed-side Table 2 </a> </li>
                <li> <a href="#1">Bed-side Table 3 </a> </li>
                <li> <a href="#1">Bed-side Table 4 </a> </li>
                <li> <a href="#1">Bed-side Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Mattress<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Mattress 1 </a> </li>
                <li> <a href="#1">Mattress 2 </a> </li>
                <li> <a href="#1">Mattress 3 </a> </li>
                <li> <a href="#1">Mattress 4 </a> </li>
                <li> <a href="#1">Mattress 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Reading Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Reading Table 1 </a> </li>
                <li> <a href="#1">Reading Table 2 </a> </li>
                <li> <a href="#1">Reading Table 3 </a> </li>
                <li> <a href="#1">Reading Table 4 </a> </li>
                <li> <a href="#1">Reading Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Almirah<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Almirah 1 </a> </li>
                <li> <a href="#1">Almirah 2 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>Dining<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">Dining<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Dining 1</a> </li>
                <li> <a href="#1">Dining 2</a> </li>
                <li> <a href="#1">Dining 3</a> </li>
                <li> <a href="#1">Dining 4</a> </li>
                <li> <a href="#1">Dining 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">Chair<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Chair 1 </a> </li>
                <li> <a href="#1">Chair 2 </a> </li>
                <li> <a href="#1">Chair 3 </a> </li>
                <li> <a href="#1">Chair 4 </a> </li>
                <li> <a href="#1">Chair 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Cafeteria<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Cafeteria 1 </a> </li>
                <li> <a href="#1">Cafeteria 2 </a> </li>
                <li> <a href="#1">Cafeteria 3 </a> </li>
                <li> <a href="#1">Cafeteria 4 </a> </li>
                <li> <a href="#1">Cafeteria 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Dinner Wagon<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Dinner Wagon 1 </a> </li>
                <li> <a href="#1">Dinner Wagon 2 </a> </li>
                <li> <a href="#1">Dinner Wagon 3 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Tea Trolley<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Tea Trolley 1 </a> </li>
                <li> <a href="#1">Tea Trolley 2 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Showcase<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Showcase 1 </a> </li>
                <li> <a href="#1">Showcase 2 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Mini Cabinet<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Mini Cabinet 1 </a> </li>
                <li> <a href="#1">Mini Cabinet 2 </a> </li>
                <li> <a href="#1">Mini Cabinet 3 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>office<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">Sofa<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Sofa 1</a> </li>
                <li> <a href="#1">Sofa 2</a> </li>
                <li> <a href="#1">Sofa 3</a> </li>
                <li> <a href="#1">Sofa 4</a> </li>
                <li> <a href="#1">Sofa 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">Side Rack<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Side Rack 1 </a> </li>
                <li> <a href="#1">Side Rack 2 </a> </li>
                <li> <a href="#1">Side Rack 3 </a> </li>
                <li> <a href="#1">Side Rack 4 </a> </li>
                <li> <a href="#1">Side Rack 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Swivel Chair<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Swivel Chair 1 </a> </li>
                <li> <a href="#1">Swivel Chair 2 </a> </li>
                <li> <a href="#1">Swivel Chair 3 </a> </li>
                <li> <a href="#1">Swivel Chair 4 </a> </li>
                <li> <a href="#1">Swivel Chair 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Executive Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Executive Table 1 </a> </li>
                <li> <a href="#1">Executive Table 2 </a> </li>
                <li> <a href="#1">Executive Table 3 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Office Almirah<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Office Almirah 1 </a> </li>
                <li> <a href="#1">Office Almirah 2 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Computer Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Computer Table 1 </a> </li>
                <li> <a href="#1">Computer Table 2 </a> </li>
                <li> <a href="#1">Computer Table 3 </a> </li>
                <li> <a href="#1">Computer Table 4 </a> </li>
                <li> <a href="#1">Computer Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Director Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Director Table 1 </a> </li>
                <li> <a href="#1">Director Table 2 </a> </li>
                <li> <a href="#1">Director Table 3 </a> </li>
                <li> <a href="#1">Director Table 4 </a> </li>
                <li> <a href="#1">Director Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Conference Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Conference Table 1 </a> </li>
                <li> <a href="#1">Conference Table 2 </a> </li>
                <li> <a href="#1">Conference Table 3 </a> </li>
                <li> <a href="#1">Conference Table 4 </a> </li>
                <li> <a href="#1">Conference Table 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">Fixed Chair<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Fixed Chair 1 </a> </li>
                <li> <a href="#1">Fixed Chair 2 </a> </li>
                <li> <a href="#1">Fixed Chair 3 </a> </li>
                <li> <a href="#1">Fixed Chair 4 </a> </li>
                <li> <a href="#1">Fixed Chair 5 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span> Institutional<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">
            <li class="has-child">
              <a href="#">all Institutional </a>
              <a href="#">Hotel &amp; Restaurant</a>
              <a href="#">Hospital</a>
              <a href="#">Academic</a>
              <a href="#">Auditori</a>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>showpiece<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">showpiece 1</a> </li>
                <li> <a href="#1">showpiece 2</a> </li>
                <li> <a href="#1">showpiece 3</a> </li>
                <li> <a href="#1">showpiece 4</a> </li>
                <li> <a href="#1">showpiece 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">showpiece 1 </a> </li>
                <li> <a href="#1">showpiece 2 </a> </li>
                <li> <a href="#1">showpiece 3 </a> </li>
                <li> <a href="#1">showpiece 4 </a> </li>
                <li> <a href="#1">showpiece 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">showpiece 1 </a> </li>
                <li> <a href="#1">showpiece 2 </a> </li>
                <li> <a href="#1">showpiece 3 </a> </li>
                <li> <a href="#1">showpiece 4 </a> </li>
                <li> <a href="#1">showpiece 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">showpiece 1 </a> </li>
                <li> <a href="#1">showpiece 2 </a> </li>
                <li> <a href="#1">showpiece 3 </a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">showpiece 1 </a> </li>
                <li> <a href="#1">showpiece 2 </a> </li>
                <li> <a href="#1">showpiece 3 </a> </li>
                <li> <a href="#1">showpiece 4 </a> </li>
                <li> <a href="#1">showpiece 5 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>home appliance<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">home appliance 1</a> </li>
                <li> <a href="#1">home appliance 2</a> </li>
                <li> <a href="#1">home appliance 3</a> </li>
                <li> <a href="#1">home appliance 4</a> </li>
                <li> <a href="#1">home appliance 5</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">home appliance 1 </a> </li>
                <li> <a href="#1">home appliance 2 </a> </li>
                <li> <a href="#1">home appliance 3 </a> </li>
                <li> <a href="#1">home appliance 4 </a> </li>
                <li> <a href="#1">home appliance 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">home appliance 1 </a> </li>
                <li> <a href="#1">home appliance 2 </a> </li>
                <li> <a href="#1">home appliance 3 </a> </li>
                <li> <a href="#1">home appliance 4 </a> </li>
                <li> <a href="#1">home appliance 5 </a> </li>
              </ul>
            </li>
            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">home appliance 1 </a> </li>
                <li> <a href="#1">home appliance 2 </a> </li>
                <li> <a href="#1">home appliance 3 </a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">title<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">home appliance 1 </a> </li>
                <li> <a href="#1">home appliance 2 </a> </li>
                <li> <a href="#1">home appliance 3 </a> </li>
                <li> <a href="#1">home appliance 4 </a> </li>
                <li> <a href="#1">home appliance 5 </a> </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="has-child">
          <span class="its-parent">
            <span class="icon"></span>Kid’s<i class="fas fa-angle-down"></i></span>
          <ul class="its-children">

            <li class="has-child">
              <span class="its-parent">Bed<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Kids’ Bunk Bed</a> </li>
              </ul>
            </li>

            <li class="has-child">
              <span class="its-parent">Study Table<i class="fas fa-angle-down"></i></span>
              <ul class="its-children">
                <li> <a href="#1">Kids’ Study Table </a> </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

  </header>
  @endif

  <script>
    // Logout
    let logoutForm = document.getElementById('logoutForm')
    function logout() {
      event.preventDefault()
      if (confirm('Are you sure to logout ?')) logoutForm.submit()
    }
  </script>