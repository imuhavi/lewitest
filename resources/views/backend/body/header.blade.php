<head>

  <!-- Title -->
  <title>{{ str_replace('-', ' ',
    config('app.name')) }} | {{ ucfirst(routePrefix()) }} - @yield('meta_title', 'Dashboard') </title>

  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta charset="UTF-8">
  <meta name="description" content="@yield('meta_description', 'Welcome to our admin panel')" />
  <meta name="keywords" content="admin,dashboard" />
  <meta name="author" content="stacks" />

  <!-- Styles -->
  <link href="{{ asset('backend/') }}/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet" />
  <link href="{{ asset('backend/') }}/assets/plugins/uniform/css/default.css" rel="stylesheet" />
  <link href="{{ asset('backend/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <link href="{{ asset('backend/') }}/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

  <link href="{{ asset('backend/') }}/assets/plugins/summernote-master/summernote.css" rel="stylesheet"
    type="text/css" />

  <!-- Theme Styles -->
  <link href="{{ asset('backend/') }}/assets/css/meteor.min.css" rel="stylesheet" type="text/css" />
  <link href="{{ asset('backend/') }}/assets/css/layers/dark-layer.css" class="theme-color" rel="stylesheet"
    type="text/css" />
  <link href="{{ asset('backend/') }}/assets/css/custom.css" rel="stylesheet" type="text/css" />

  <script src="{{ asset('backend/') }}/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="compact-menu">

  <div class="overlay"></div>

  <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
    <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right"
        id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
    <div class="slimscroll chat">
      <div class="chat-item chat-item-left">
        <div class="chat-image">
          <img src="{{ asset('backend/assets/images/avatar2.png') }}" alt="">
        </div>
        <div class="chat-message">
          Duis aute irure dolor?
        </div>
      </div>
      <div class="chat-item chat-item-right">
        <div class="chat-message">
          Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
        </div>
      </div>
      <div class="chat-item chat-item-left">
        <div class="chat-image">
          <img src="{{ asset('backend/assets/images/avatar2.png') }}" alt="">
        </div>
        <div class="chat-message">
          Ut ullamcorper, ligula.
        </div>
      </div>
      <div class="chat-item chat-item-right">
        <div class="chat-message">
          In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
        </div>
      </div>
      <div class="chat-item chat-item-left">
        <div class="chat-image">
          <img src="{{ asset('backend/assets/images/avatar2.png') }}" alt="">
        </div>
        <div class="chat-message">
          Curabitur pretium?
        </div>
      </div>
      <div class="chat-item chat-item-right">
        <div class="chat-message">
          Etiam tempor. Ut tempor! ull amcorper.
        </div>
      </div>
    </div>
    <div class="chat-write">
      <form class="form-horizontal" action="javascript:void(0);">
        <input type="text" class="form-control" placeholder="Say something">
      </form>
    </div>
  </nav>
  <form class="search-form" action="#" method="GET">
    <div class="input-group">
      <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
      <span class="input-group-btn">
        <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
      </span>
    </div><!-- Input Group -->
  </form><!-- Search Form -->

  <main class="page-content content-wrap">
    <div class="navbar">
      <div class="navbar-inner">
        <div class="sidebar-pusher">
          <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
            <i class="icon-arrow-right"></i>
          </a>
        </div>
        <div class="logo-box">
          <a href="{{ route('home') }}" target="_blank" class=" logo-text"><span>{{ str_replace('-', ' ',
              config('app.name')) }}</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
          <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
        </div>
        <div class="topmenu-outer">
          <div class="top-menu">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
              </li>


              {{-- <li>
                <a href="#cd-nav" class="cd-nav-trigger"><i class="icon-support"></i></a>
              </li> --}}

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-settings"></i>
                </a>
                <ul class="dropdown-menu dropdown-md dropdown-list theme-settings" role="menu">
                  <li class="li-group">
                    <ul class="list-unstyled">
                      <li class="no-link" role="presentation">
                        Fixed Header
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right fixed-header-check">
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="li-group">
                    <ul class="list-unstyled">
                      <li class="no-link" role="presentation">
                        Fixed Sidebar
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right fixed-sidebar-check">
                        </div>
                      </li>
                      <li class="no-link" role="presentation">
                        Horizontal bar
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right horizontal-bar-check">
                        </div>
                      </li>
                      <li class="no-link" role="presentation">
                        Toggle Sidebar
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right toggle-sidebar-check">
                        </div>
                      </li>
                      <li class="no-link" role="presentation">
                        Compact Menu
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right compact-menu-check" checked>
                        </div>
                      </li>
                      <li class="no-link" role="presentation">
                        Hover Menu
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right hover-menu-check">
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="li-group">
                    <ul class="list-unstyled">
                      <li class="no-link" role="presentation">
                        Boxed Layout
                        <div class="ios-switch pull-right switch-md">
                          <input type="checkbox" class="js-switch pull-right boxed-layout-check">
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="no-link"><button class="btn btn-default reset-options">Reset
                      Options</button></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-open"></i><span
                    class="badge badge-danger pull-right">6</span></a>
                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                  <li>
                    <p class="drop-title">You have 6 new messages!</p>
                  </li>
                  <li class="dropdown-menu-list slimscroll messages">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt="">
                          </div>
                          <p class="msg-name">Michael Lewis</p>
                          <p class="msg-text">Yeah science!</p>
                          <p class="msg-time">3 minutes ago</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png"
                              alt="">
                          </div>
                          <p class="msg-name">John Doe</p>
                          <p class="msg-text">Hi Nick</p>
                          <p class="msg-time">8 minutes ago</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online off"></div><img class="img-circle" src="assets/images/avatar3.png"
                              alt="">
                          </div>
                          <p class="msg-name">Emma Green</p>
                          <p class="msg-text">Let's meet!</p>
                          <p class="msg-time">56 minutes ago</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online on"></div><img class="img-circle" src="assets/images/avatar5.png" alt="">
                          </div>
                          <p class="msg-name">Nick Doe</p>
                          <p class="msg-text">Nice to meet you</p>
                          <p class="msg-time">2 hours ago</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online on"></div><img class="img-circle" src="assets/images/avatar2.png" alt="">
                          </div>
                          <p class="msg-name">Michael Lewis</p>
                          <p class="msg-text">Yeah science!</p>
                          <p class="msg-time">5 hours ago</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="msg-img">
                            <div class="online off"></div><img class="img-circle" src="assets/images/avatar4.png"
                              alt="">
                          </div>
                          <p class="msg-name">John Doe</p>
                          <p class="msg-text">Hi Nick</p>
                          <p class="msg-time">9 hours ago</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="drop-all"><a href="#" class="text-center">All Messages</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i><span
                    class="badge badge-danger pull-right">3</span></a>
                <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                  <li>
                    <p class="drop-title">You have 3 pending tasks!</p>
                  </li>
                  <li class="dropdown-menu-list slimscroll tasks">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">
                          <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                          <span class="badge badge-roundless badge-default pull-right">1m</span>
                          <p class="task-details">New user registered</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                          <span class="badge badge-roundless badge-default pull-right">24m</span>
                          <p class="task-details">3 Charts refreshed</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                          <span class="badge badge-roundless badge-default pull-right">24m</span>
                          <p class="task-details">2 Missed calls</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="user-name">{{ Auth::user()->name ?? "" }}<i class="fa fa-angle-down"></i></span>
                  @if(auth()->user()->avatar)
                  <img class="img-circle avatar" src="{{ asset('backend/uploads/' . auth()->user()->avatar) }}"
                    width="40" height="40" alt="">
                  @else
                  <img class="img-circle avatar" src="{{ asset('backend/assets/default-img/user.jpeg') }}" width="40"
                    height="40" alt="">
                  @endif
                </a>
                <ul class="dropdown-menu dropdown-list" role="menu">
                  <li role="presentation"><a href="{{ route('userProfile') }}"><i class="icon-user"></i>Profile</a>
                  </li>

                  <li role="presentation" class="divider"></li>

                  <li role="presentation"><a href="#" onclick="logout()"><i class="icon-key m-r-xs"></i>Log out</a></li>
                </ul>

                <form method="POST" id="logoutForm" action="{{ route('logout') }}">
                  @csrf
                </form>

              </li>


            </ul><!-- Nav -->
          </div><!-- Top Menu -->
        </div>
      </div>
    </div><!-- Navbar -->

    <script>
      // Logout
      let logoutForm = document.getElementById('logoutForm')
      function logout() {
        event.preventDefault()
        if (confirm('Are you sure to logout ?')) logoutForm.submit()
      }
    </script>