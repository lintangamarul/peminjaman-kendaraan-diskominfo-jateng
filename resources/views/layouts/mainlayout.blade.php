<!DOCTYPE html>
<html lang="en">

<head>
    <title>Peminjaman Kendaraan Diskominfo Jateng</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <link rel="icon" href="{{ asset('style/assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('style/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('style/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/jquery.mCustomScrollbar.css') }}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/style.css') }}">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="{{ asset('style/assets/logo.png') }}" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>

                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <span>User, {{ isset(Auth::user()->name) ? Auth::user()->name : 'client' }}</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="user-profile.html">
                                          <i class="ti-user"></i> Profile
                                      </a>
                                  </li>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="auth-normal-sign-in.html">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius mt-2" src="{{ asset('style/assets/images/jateng.svg') }}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">Diskomnfo Jateng<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
                          </div>
                          <div class="pcoded-navigation-label mt-2" data-i18n="nav.category.navigation">Equipment</div>
                          <ul class="pcoded-item pcoded-left-item">

                            @if (Auth::user())
                                @if (Auth::user()->role_id == 1)
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/dashboard') echo 'active'; ?>">
                                        <a href="/dashboard" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/cars') echo 'active'; ?>">
                                        <a href="/cars" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-car"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Kendaraan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/') echo 'active'; ?>">
                                        <a href="/" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-harddrives"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Daftar Kendaraan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/categories') echo 'active'; ?>">
                                        <a href="/categories" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers-alt"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Kategori</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                    <div class="pcoded-navigation-label mt-2" data-i18n="nav.category.forms">Log &amp; Proccess</div>

                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/rent-logs') echo 'active'; ?>">
                                        <a href="/rent-logs" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-bookmark-alt"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Log Peminjaman</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/car-rent') echo 'active'; ?>">
                                        <a href="/car-rent" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-layers-alt"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Peminjaman Kendaraan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/car-return') echo 'active'; ?>">
                                        <a href="/car-return" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-reload"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Pengembalian Kendaraan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <div class="pcoded-navigation-label mt-2" data-i18n="nav.category.forms">Account</div>

                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/users') echo 'active'; ?>">
                                        <a href="/users" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Users</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/logout') echo 'active'; ?>">
                                        <a href="/logout" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-shift-left"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                @else
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/profile') echo 'active'; ?>">
                                        <a href="/profile" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/cars') echo 'active'; ?>">
                                        <a href="/cars" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-car"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Kendaraan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="<?php if ($_SERVER['REQUEST_URI'] == '/logout') echo 'active'; ?>">
                                        <a href="/logout" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-shift-left"></i><b>D</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="<?php if ($_SERVER['REQUEST_URI'] == '/login') echo 'active'; ?>">
                                    <a href="/login" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-shift-left"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Login</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            @endif


                          </ul>

                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->


                    <div class="content ">
                      @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery-ui/jquery-ui.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/popper.js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/pages/widget/excanvas.js') }}assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="{{ asset('style/assets/pages/waves/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/jquery-slimscroll/jquery.slimscroll.js') }} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/modernizr/modernizr.js') }} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('style/assets/js/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('style/assets/js/chart.js/Chart.js') }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/gauge.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/light.js') }}"></script>
    <script src="{{ asset('style/assets/pages/widget/amchart/pie.min.js') }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset('style/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/vertical-layout.min.js') }} "></script>
    <!-- custom js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('style/assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/assets/js/script.js') }} "></script>
</body>

</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Kendaraan | @yield('tittle')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#">Peminjaman Kendaraan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="body-content h-100  ">
            <div class="row g-0  h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">

                    @if (Auth::user())
                        @if (Auth::user()->role_id == 1)
                            <a href="/dashboard" @if(request()->route()->uri =='dashboard') class="active" @endif >Dashboard</a>
                            <a href="/cars" @if(request()->route()->uri =='cars'|| request()->route()->uri =='car-add'  || request()->route()->uri =='car-edit/{slug}' || request()->route()->uri =='car-delete/{slug}') class="active" @endif >Kendaraan</a>
                            <a href="/"@if(request()->route()->uri =='/') class="active" @endif>Daftar Kendaraan</a>
                            <a href="/categories" @if(request()->route()->uri =='categories' || request()->route()->uri =='category-add' || request()->route()->uri =='category-edit/{slug}' || request()->route()->uri =='category-delete/{slug}' ) class="active" @endif >Categori</a>
                            <a href="/users"@if(request()->route()->uri =='users' || request()->route()->uri =='registered-users'|| request()->route()->uri =='user-detail/{slug}'|| request()->route()->uri =='user-ban/{slug}' || request()->route()->uri =='user-banned' ) class="active" @endif >Users</a>
                            <a href="/rent-logs"@if(request()->route()->uri =='rent-logs') class="active" @endif >Rent Log</a>
                            <a href="/car-rent" @if(request()->route()->uri =='car-rent') class="active" @endif>Peminjaman Kendaraan</a>
                            <a href="/car-return" @if(request()->route()->uri =='car-return') class="active" @endif>Pengembalian Kendaraan</a>
                            <a href="/logout">Logout</a>
                        @else
                            <a href="/profile"@if(request()->route()->uri =='profile') class="active" @endif >Profile</a>
                            <a href="/"@if(request()->route()->uri =='/') class="active" @endif>Daftar Kendaraan</a>
                            <a href="/logout"@if(request()->route()->uri =='logout') class="active" @endif >Logout</a>
                        @endif
                    @else
                        <a href="/login">Login</a>
                    @endif

                </div>
                <div class="content p-5 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> --}}
