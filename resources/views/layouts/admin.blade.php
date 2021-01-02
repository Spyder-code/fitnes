<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->

    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/fav.png') }}" type="image/x-icon">
    {{-- <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script> --}}
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/dataTables.css')}}">
    <link href="{{asset('admin/css/tabel.css')}}" rel="stylesheet">
    @livewireStyles
    <script type="text/javascript" charset="utf8" src="{{asset('admin/js/dataTables.js')}}"></script>
    <script src="{{asset('admin/js/tabel.js')}}"></script>
    @yield('head')
    <style>
        #headerJudul{
            margin-right: 250px;
        }
        @media(max-width:600px){
            #headerJudul{
            margin-right: 40px;
        }
        }
    </style>
  </head>
  <body class="bg-light">
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-light">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo">@yield('role')</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li><h1 id="headerJudul">@yield('judul')</h1></li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('admin.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">{{Auth::user()->name}}</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('logout')}}" onclick="return confirm('Are you sure?')">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="{{url('logout')}}" onclick="return confirm('Are you sure?')">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper bg-light">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas bg-light" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('admin.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                </div>
                {{-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> --}}
              </a>
            </li>
            @if (Auth::user()->hasRole('admin'))
                {{-- <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/profile')}}">
                    <span class="menu-title">Profile</span>
                    <i class="mdi mdi-account menu-icon"></i>
                  </a>
                </li> --}}
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/list-member')}}">
                    <span class="menu-title">List Member</span>
                    <i class="mdi mdi-account-card-details menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/list-artikel')}}">
                    <span class="menu-title">List Artikel</span>
                    <i class="mdi mdi-more menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/transaksi')}}">
                    <span class="menu-title">Transaksi</span>
                    <i class="mdi mdi-cash menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/absensi')}}">
                    <span class="menu-title">Absensi</span>
                    <i class="mdi mdi-checkbox-marked-outline menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('admin/pesan')}}">
                    <span class="menu-title">Pesan</span>
                    <i class="mdi mdi-message menu-icon"></i>
                  </a>
                </li>
            @endif
            {{-- <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <a href="{{url('logout')}}" onclick="return confirm('are you sure ?')" class="btn btn-block btn-lg mt-4">Logout</a>
              </span>
            </li> --}}
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @yield('content')


          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{-- <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script> --}}
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/misc.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    @yield('custom-script')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
