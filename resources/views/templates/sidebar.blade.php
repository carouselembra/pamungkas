<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pamungkas</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/demo_1/style.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/main/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    @yield('css')
    <!-- End-CSS -->

  </head>
  <body>
    <div class="container-scroller">
      <!-- TopNav -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="{{ url('/dashboard') }}">
            <svg width="6em" height="28" viewBox="0 0 172 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.25634 21.1022V1.50217H9.50834C11.0763 1.50217 12.3737 1.7635 13.4003 2.28617C14.427 2.80884 15.1923 3.5275 15.6963 4.44217C16.2003 5.35684 16.4523 6.38351 16.4523 7.52217C16.4523 8.60484 16.2097 9.60351 15.7243 10.5182C15.239 11.4142 14.483 12.1422 13.4563 12.7022C12.4297 13.2435 11.1137 13.5142 9.50834 13.5142H5.84034V21.1022H2.25634ZM5.84034 10.6022H9.28434C10.535 10.6022 11.431 10.3315 11.9723 9.79017C12.5323 9.23017 12.8123 8.47417 12.8123 7.52217C12.8123 6.55151 12.5323 5.79551 11.9723 5.25417C11.431 4.69417 10.535 4.41417 9.28434 4.41417H5.84034V10.6022ZM22.6932 21.4382C21.4985 21.4382 20.5185 21.2515 19.7532 20.8782C18.9878 20.4862 18.4185 19.9728 18.0452 19.3382C17.6718 18.7035 17.4852 18.0035 17.4852 17.2382C17.4852 15.9502 17.9892 14.9048 18.9972 14.1022C20.0052 13.2995 21.5172 12.8982 23.5332 12.8982H27.0612V12.5622C27.0612 11.6102 26.7905 10.9102 26.2492 10.4622C25.7078 10.0142 25.0358 9.79017 24.2332 9.79017C23.5052 9.79017 22.8705 9.96751 22.3292 10.3222C21.7878 10.6582 21.4518 11.1622 21.3212 11.8342H17.8212C17.9145 10.8262 18.2505 9.94884 18.8292 9.20217C19.4265 8.45551 20.1918 7.88617 21.1252 7.49417C22.0585 7.08351 23.1038 6.87817 24.2612 6.87817C26.2398 6.87817 27.7985 7.37284 28.9372 8.36217C30.0758 9.35151 30.6452 10.7515 30.6452 12.5622V21.1022H27.5932L27.2572 18.8622C26.8465 19.6088 26.2678 20.2248 25.5212 20.7102C24.7932 21.1955 23.8505 21.4382 22.6932 21.4382ZM23.5052 18.6382C24.5318 18.6382 25.3252 18.3022 25.8852 17.6302C26.4638 16.9582 26.8278 16.1275 26.9772 15.1382H23.9252C22.9732 15.1382 22.2918 15.3155 21.8812 15.6702C21.4705 16.0062 21.2652 16.4262 21.2652 16.9302C21.2652 17.4715 21.4705 17.8915 21.8812 18.1902C22.2918 18.4888 22.8332 18.6382 23.5052 18.6382ZM33.6653 21.1022V7.21417H36.8293L37.1373 9.09017C37.5853 8.41817 38.1733 7.88617 38.9013 7.49417C39.648 7.08351 40.5066 6.87817 41.4773 6.87817C43.624 6.87817 45.1453 7.70884 46.0413 9.37017C46.5453 8.60484 47.2173 7.99817 48.0573 7.55017C48.916 7.10217 49.8493 6.87817 50.8573 6.87817C52.668 6.87817 54.0586 7.41951 55.0293 8.50217C56 9.58484 56.4853 11.1715 56.4853 13.2622V21.1022H52.9013V13.5982C52.9013 12.4035 52.668 11.4888 52.2013 10.8542C51.7533 10.2195 51.0533 9.90217 50.1013 9.90217C49.1306 9.90217 48.3466 10.2568 47.7493 10.9662C47.1706 11.6755 46.8813 12.6648 46.8813 13.9342V21.1022H43.2973V13.5982C43.2973 12.4035 43.064 11.4888 42.5973 10.8542C42.1306 10.2195 41.412 9.90217 40.4413 9.90217C39.4893 9.90217 38.7146 10.2568 38.1173 10.9662C37.5386 11.6755 37.2493 12.6648 37.2493 13.9342V21.1022H33.6653ZM64.696 21.4382C62.96 21.4382 61.616 20.8968 60.664 19.8142C59.7306 18.7315 59.264 17.1448 59.264 15.0542V7.21417H62.82V14.7182C62.82 15.9128 63.0626 16.8275 63.548 17.4622C64.0333 18.0968 64.7986 18.4142 65.844 18.4142C66.8333 18.4142 67.6453 18.0595 68.28 17.3502C68.9333 16.6408 69.26 15.6515 69.26 14.3822V7.21417H72.844V21.1022H69.68L69.4 18.7502C68.9706 19.5715 68.3453 20.2248 67.524 20.7102C66.7213 21.1955 65.7786 21.4382 64.696 21.4382ZM76.1231 21.1022V7.21417H79.2871L79.5671 9.56617C79.9965 8.74484 80.6125 8.09151 81.4151 7.60617C82.2365 7.12084 83.1978 6.87817 84.2991 6.87817C86.0165 6.87817 87.3511 7.41951 88.3031 8.50217C89.2551 9.58484 89.7311 11.1715 89.7311 13.2622V21.1022H86.1471V13.5982C86.1471 12.4035 85.9045 11.4888 85.4191 10.8542C84.9338 10.2195 84.1778 9.90217 83.1511 9.90217C82.1431 9.90217 81.3125 10.2568 80.6591 10.9662C80.0245 11.6755 79.7071 12.6648 79.7071 13.9342V21.1022H76.1231ZM98.6383 16.9582C97.9663 16.9582 97.3409 16.8835 96.7623 16.7342L95.7263 17.7702C96.0436 17.9382 96.4729 18.0782 97.0143 18.1902C97.5556 18.3022 98.4329 18.4142 99.6463 18.5262C101.494 18.6942 102.838 19.1328 103.678 19.8422C104.518 20.5515 104.938 21.5315 104.938 22.7822C104.938 23.6035 104.714 24.3782 104.266 25.1062C103.818 25.8528 103.128 26.4502 102.194 26.8982C101.261 27.3648 100.066 27.5982 98.6103 27.5982C96.6316 27.5982 95.0356 27.2248 93.8223 26.4782C92.6089 25.7502 92.0023 24.6488 92.0023 23.1742C92.0023 21.9235 92.6089 20.8408 93.8223 19.9262C93.4489 19.7582 93.1223 19.5808 92.8423 19.3942C92.5809 19.2075 92.3476 19.0115 92.1423 18.8062V18.1622L94.5783 15.5862C93.4956 14.6342 92.9543 13.4115 92.9543 11.9182C92.9543 10.9848 93.1783 10.1355 93.6263 9.37017C94.0929 8.60484 94.7463 7.99817 95.5863 7.55017C96.4263 7.10217 97.4436 6.87817 98.6383 6.87817C99.4223 6.87817 100.15 6.99017 100.822 7.21417H106.086V9.39817L103.706 9.56617C104.08 10.2755 104.266 11.0595 104.266 11.9182C104.266 12.8515 104.042 13.7008 103.594 14.4662C103.146 15.2315 102.493 15.8382 101.634 16.2862C100.794 16.7342 99.7956 16.9582 98.6383 16.9582ZM98.6383 14.2142C99.3663 14.2142 99.9636 14.0182 100.43 13.6262C100.916 13.2342 101.158 12.6742 101.158 11.9462C101.158 11.2182 100.916 10.6582 100.43 10.2662C99.9636 9.87417 99.3663 9.67817 98.6383 9.67817C97.8729 9.67817 97.2569 9.87417 96.7903 10.2662C96.3236 10.6582 96.0903 11.2182 96.0903 11.9462C96.0903 12.6742 96.3236 13.2342 96.7903 13.6262C97.2569 14.0182 97.8729 14.2142 98.6383 14.2142ZM95.2783 22.8102C95.2783 23.5008 95.5956 24.0142 96.2303 24.3502C96.8836 24.7048 97.6769 24.8822 98.6103 24.8822C99.5063 24.8822 100.234 24.6955 100.794 24.3222C101.354 23.9675 101.634 23.4822 101.634 22.8662C101.634 22.3622 101.448 21.9422 101.074 21.6062C100.72 21.2702 100.001 21.0648 98.9183 20.9902C98.1529 20.9342 97.4436 20.8502 96.7903 20.7382C96.2489 21.0368 95.8569 21.3635 95.6143 21.7182C95.3903 22.0728 95.2783 22.4368 95.2783 22.8102ZM108.3 21.1022V0.942172H111.884V12.8422L116.812 7.21417H121.068L115.384 13.5422L121.992 21.1022H117.512L111.884 14.1302V21.1022H108.3ZM128.137 21.4382C126.942 21.4382 125.962 21.2515 125.197 20.8782C124.432 20.4862 123.862 19.9728 123.489 19.3382C123.116 18.7035 122.929 18.0035 122.929 17.2382C122.929 15.9502 123.433 14.9048 124.441 14.1022C125.449 13.2995 126.961 12.8982 128.977 12.8982H132.505V12.5622C132.505 11.6102 132.234 10.9102 131.693 10.4622C131.152 10.0142 130.48 9.79017 129.677 9.79017C128.949 9.79017 128.314 9.96751 127.773 10.3222C127.232 10.6582 126.896 11.1622 126.765 11.8342H123.265C123.358 10.8262 123.694 9.94884 124.273 9.20217C124.87 8.45551 125.636 7.88617 126.569 7.49417C127.502 7.08351 128.548 6.87817 129.705 6.87817C131.684 6.87817 133.242 7.37284 134.381 8.36217C135.52 9.35151 136.089 10.7515 136.089 12.5622V21.1022H133.037L132.701 18.8622C132.29 19.6088 131.712 20.2248 130.965 20.7102C130.237 21.1955 129.294 21.4382 128.137 21.4382ZM128.949 18.6382C129.976 18.6382 130.769 18.3022 131.329 17.6302C131.908 16.9582 132.272 16.1275 132.421 15.1382H129.369C128.417 15.1382 127.736 15.3155 127.325 15.6702C126.914 16.0062 126.709 16.4262 126.709 16.9302C126.709 17.4715 126.914 17.8915 127.325 18.1902C127.736 18.4888 128.277 18.6382 128.949 18.6382ZM144.849 21.4382C143.617 21.4382 142.534 21.2422 141.601 20.8502C140.668 20.4395 139.921 19.8795 139.361 19.1702C138.801 18.4608 138.465 17.6395 138.353 16.7062H141.965C142.077 17.2475 142.376 17.7142 142.861 18.1062C143.365 18.4795 144.009 18.6662 144.793 18.6662C145.577 18.6662 146.146 18.5075 146.501 18.1902C146.874 17.8728 147.061 17.5088 147.061 17.0982C147.061 16.5008 146.8 16.0995 146.277 15.8942C145.754 15.6702 145.026 15.4555 144.093 15.2502C143.496 15.1195 142.889 14.9608 142.273 14.7742C141.657 14.5875 141.088 14.3542 140.565 14.0742C140.061 13.7755 139.65 13.4022 139.333 12.9542C139.016 12.4875 138.857 11.9182 138.857 11.2462C138.857 10.0142 139.342 8.97817 140.313 8.13817C141.302 7.29817 142.684 6.87817 144.457 6.87817C146.1 6.87817 147.406 7.26084 148.377 8.02617C149.366 8.79151 149.954 9.84617 150.141 11.1902H146.753C146.548 10.1635 145.773 9.65017 144.429 9.65017C143.757 9.65017 143.234 9.78084 142.861 10.0422C142.506 10.3035 142.329 10.6302 142.329 11.0222C142.329 11.4328 142.6 11.7595 143.141 12.0022C143.682 12.2448 144.401 12.4688 145.297 12.6742C146.268 12.8982 147.154 13.1502 147.957 13.4302C148.778 13.6915 149.432 14.0928 149.917 14.6342C150.402 15.1568 150.645 15.9128 150.645 16.9022C150.664 17.7608 150.44 18.5355 149.973 19.2262C149.506 19.9168 148.834 20.4582 147.957 20.8502C147.08 21.2422 146.044 21.4382 144.849 21.4382Z" fill="white"/>
              <path d="M161.003 11.4242V3.70217H163.775L165.799 8.96017L167.999 3.70217H170.573V11.4242H168.637L168.593 6.36417L166.459 11.4242H165.007L162.873 6.18817V11.4242H161.003ZM155.855 11.4242L155.877 5.37417H153.985V3.70217H159.859V5.37417H157.945L157.967 11.4242H155.855Z" fill="white"/>
              </svg> </a>
          <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}">
            <img src="{{ asset('icons/logo-mini.png') }}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <div class="page-title-bar">
            <h4 class="page-title">@yield('page-title')</h4>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              @php
              $cek_supply_system = \App\Supply_system::first();
              $jumlah_notif = \App\Product::where('stok', '<', 10)
              ->count();
              $notifications = \App\Product::where('stok', '<', 10)
              ->get();
              $notification = \App\Product::where('stok', '<', 10)
              ->take(3)
              ->get();
              @endphp
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                @if($cek_supply_system->status == 1)
                  @if($jumlah_notif != 0)
                  <span class="count bg-success">{{ $jumlah_notif }}</span>
                  @endif
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <div class="dropdown-item py-3 border-bottom">
                  @if($cek_supply_system->status == 1)
                  <p class="mb-0 font-weight-medium float-left">Anda Memiliki {{ $jumlah_notif }} Pemberitahuan</p>
                  @else
                  <p class="mb-0 font-weight-medium float-left">Anda Memiliki 0 Pemberitahuan</p>
                  @endif
                  <a href="#" role="button" data-toggle="modal" data-target="#notificationModal"><span class="badge badge-pill badge-primary float-right">Semua</span></a>
                </div>
                @if($cek_supply_system->status == 1)
                  @foreach($notification as $notif)
                  @if($notif->stok != 0)
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i class="mdi mdi-alert m-auto text-warning"></i>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Barang Hampir Habis</h6>
                      <p class="font-weight-light small-text mb-0"> Stok {{ $notif->nama_barang }} tersisa {{ $notif->stok }} </p>
                    </div>
                  </a>
                  @else
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i class="mdi mdi-alert m-auto text-danger"></i>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Barang Telah Habis</h6>
                      <p class="font-weight-light small-text mb-0"> Stok barang {{ $notif->nama_barang }} telah habis</p>
                    </div>
                  </a>
                  @endif
                  @endforeach
                @endif
              </div>
            </li>
            <li class="nav-item dropdown d-none-custom d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('pictures/' . auth()->user()->foto) }}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('pictures/' . auth()->user()->foto) }}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->nama }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ auth()->user()->email }}</p>
                </div>
                <a href="{{ url('/profile') }}" class="dropdown-item">Profil</a>
                <a href="{{ url('/logout') }}" class="dropdown-item">Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- End-TopNav -->

      <div class="container-fluid page-body-wrapper">
        <!-- SideNav -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">
              <div>
                <i class='bx bx-grid-alt nav__icon' ></i>
                <span class="menu-title">Beranda</span>
              </div>
              </a>
            </li>
            @php
            $access = \App\Acces::where('user', auth()->user()->id)
            ->first();
            @endphp
            @if($access->penilaian == 1)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('penetapan') }}">
              <div>
                <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                <span class="menu-title">Penetapan Tujuan</span>
              </div>
              </a>
            </li>
            @endif
            @if($access->struktur_proses == 1)
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/struktur') }}">
              <div>
                <i class='bx bx-folder nav__icon' ></i>
                <span class="menu-title">Struktur & Proses</span>
              </div>
              </a>
            </li>
            @endif
            @if($access->pencapaian_tujuan == 1)
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/pencapaian') }}">
              <div>
                <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                <span class="menu-title">Pencapaian Tujuan</span>
              </div>
              </a>
            </li>
            @endif
            @if($access->kelola_akun == 1)
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#kelola_akun" aria-expanded="false" aria-controls="kelola_akun">
                <div>
                  <i class='bx bx-grid-alt nav__icon' ></i>
                  <span class="menu-title">Kelola Akun</span>
                </div>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="kelola_akun">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/account') }}">Daftar Akun</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/access') }}">Hak Akses</a>
                  </li>
                </ul>
              </div>
            </li>
            @endif
            
            <div class="back-pattern">
              <svg width="362" height="348" viewBox="0 0 362 348" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M214.83 1.34308C239.785 1.34308 254.351 8.68335 263.568 20.3519C272.853 32.1052 276.84 48.3927 280.26 66.6205C280.836 69.6942 281.396 72.821 281.963 75.9863C288.086 110.185 295.015 148.887 332.68 173.846C370.745 199.069 411.726 191.388 447.474 184.688C450.353 184.148 453.199 183.615 456.006 183.106C474.927 179.674 492.029 177.343 506.321 181.206C520.485 185.035 532.031 194.998 539.722 216.587C555.284 260.267 563 286.56 563 312.809C563 339.059 555.284 365.351 539.722 409.031C524.163 452.706 513.459 478.122 496.532 499.37C479.601 520.624 456.394 537.77 415.654 564.766C395.392 578.192 379.849 582.875 366.388 582.475C352.916 582.076 341.371 576.584 329.073 569.313C325.924 567.451 322.73 565.474 319.448 563.443C297.107 549.617 270.683 533.265 226.5 533.265C183.699 533.265 153.389 548.614 126.682 562.138C121.797 564.612 117.032 567.025 112.334 569.271C97.1186 576.547 82.6296 582.073 66.9221 582.475C51.2425 582.876 34.2362 578.171 14.0055 564.766C-26.7348 537.77 -49.9413 520.624 -66.8726 499.37C-83.7993 478.122 -94.5029 452.706 -110.063 409.031C-117.808 387.29 -118.508 372.826 -114.911 361.975C-111.314 351.126 -103.359 343.685 -93.2709 336.11C-90.6655 334.154 -87.924 332.193 -85.0911 330.168C-66.0059 316.521 -42.7768 299.911 -29.1244 261.59C-16.3035 225.602 -20.3852 194.177 -24.0274 166.136C-24.8323 159.94 -25.6157 153.908 -26.1905 148.029C-27.782 131.752 -27.7862 116.658 -22.4004 102.303C-17.0234 87.9714 -6.2274 74.2594 14.0055 60.8524C54.7401 33.8602 79.7991 19.0225 107.214 10.8983C134.633 2.77297 164.476 1.34308 214.83 1.34308Z" stroke="white" stroke-width="2"/>
                <path d="M216.328 59.5738C232.605 59.6196 242.157 59.8787 247.876 61.0774C250.727 61.6749 252.562 62.4947 253.796 63.5888C255.02 64.6739 255.704 66.0747 256.156 67.9486C256.556 69.6043 256.766 71.5821 257.022 73.9904C257.058 74.3345 257.096 74.6874 257.135 75.0493C257.446 77.9297 257.856 81.3422 258.72 85.3703C260.447 93.4315 263.982 103.93 272.137 117.609C279.804 130.47 281.69 140.814 283.338 149.847C283.426 150.33 283.513 150.81 283.601 151.286C285.329 160.676 287.129 168.726 295.591 176.625C304.014 184.487 319.002 192.168 346.973 201.032C374.959 209.901 416.006 219.973 476.608 232.584C506.897 238.886 529.985 244.944 547.153 250.852C564.331 256.763 575.541 262.511 582.111 268.173C588.66 273.816 590.546 279.317 589.246 284.811C587.928 290.378 583.316 296.069 576.526 301.984C569.75 307.886 560.886 313.944 551.185 320.265C548.28 322.158 545.301 324.074 542.281 326.016C535.227 330.552 527.955 335.228 520.915 340.07C510.86 346.987 501.251 354.26 493.381 361.985C485.513 369.707 479.356 377.906 476.239 386.681C474.416 391.813 472.677 396.785 470.993 401.598C461.282 429.362 453.42 451.839 441.866 469.425C428.344 490.008 409.758 503.889 377.139 511.56C344.671 519.195 324.735 503.373 302.733 485.448L301.931 484.795C280.16 467.053 256.264 447.58 216.329 447.58C176.295 447.58 152.2 467.108 130.292 484.865L129.653 485.383C107.557 503.288 87.6218 519.109 55.5197 511.56C-8.9196 496.406 -35.5142 443.176 -43.5564 386.777C-45.5614 372.717 -44.2497 363.199 -40.773 355.61C-37.2899 348.007 -31.6113 342.283 -24.7471 335.835C-24.032 335.163 -23.3046 334.484 -22.5662 333.794C-9.12082 321.24 7.96926 305.282 21.0991 268.324C33.347 233.849 32.4817 207.942 31.7337 185.546C31.6361 182.624 31.5405 179.762 31.4763 176.949C31.1981 164.758 31.5085 153.501 34.7639 142.209C38.0166 130.926 44.2192 119.578 55.7703 107.237C100.749 59.1823 148.618 59.3449 211.108 59.5571C212.837 59.563 214.577 59.5689 216.328 59.5738Z" stroke="white"/>
                <path d="M218.988 105.982C232.133 110.622 240.243 117.678 245.827 126.15C251.437 134.662 254.526 144.641 257.547 155.218C257.803 156.115 258.059 157.017 258.315 157.921C264.091 178.278 270.342 200.312 294.637 216.393C319.322 232.733 343.759 230.513 365.973 228.495C366.576 228.441 367.178 228.386 367.778 228.332C390.55 226.277 410.753 225.003 427.352 243.896C440.005 258.298 453.86 265.024 465.054 270.459C468.989 272.369 472.595 274.12 475.704 275.989C481.706 279.595 485.879 283.606 487.455 289.981C489.05 296.431 488.038 305.489 483.114 319.295C473.278 346.875 452.508 381.715 427.661 410.584C415.241 425.014 401.824 437.927 388.274 447.688C374.714 457.456 361.079 464.025 348.215 465.852C335.278 467.689 325.433 466.4 316.905 463.46C308.48 460.555 301.304 456.029 293.618 451.181L293.255 450.952C277.589 441.072 260.029 430.179 226.556 430.179C193.118 430.179 171.481 440.893 151.993 450.671L151.533 450.902C132.241 460.583 115.101 469.185 90.4198 465.851C65.4051 462.472 39.2237 450.434 18.4961 433.624C-2.24317 416.804 -17.3999 395.308 -20.5811 373.085C-22.1533 362.102 -19.1912 354.307 -13.5334 347.766C-7.81229 341.153 0.665783 335.815 10.2178 329.846L10.5351 329.647C29.498 317.797 52.2037 303.607 63.3421 272.376C73.5993 243.616 69.8479 216.82 66.4601 192.622C66.1585 190.467 65.8597 188.333 65.5739 186.22C62.0675 160.29 60.5391 137.649 78.7845 118.231C115.517 79.1391 165.592 87.1354 218.988 105.982Z" stroke="white" stroke-width="2"/>
                <path d="M151.324 105.5C164.039 105.5 175.82 111.524 187.017 121.074C198.215 130.624 208.782 143.658 219.067 157.591C223.361 163.409 227.611 169.392 231.836 175.339C237.709 183.605 243.532 191.802 249.355 199.389C259.374 212.444 269.462 223.794 279.957 230.762C300.858 244.639 317.577 250.211 334.041 252.305C345.614 253.777 357.073 253.527 369.734 253.251C375.04 253.136 380.557 253.016 386.382 253.016C406 253.016 427.337 263.487 441.788 279.544C456.231 295.591 463.737 317.147 455.853 339.321C447.963 361.512 425.145 377.554 398.934 391.536C389.096 396.785 378.805 401.73 368.676 406.599C365.326 408.209 361.994 409.81 358.701 411.411C345.463 417.85 332.869 424.282 322.417 431.221C317.256 434.648 312.689 436.312 308.551 436.638C304.419 436.964 300.675 435.959 297.15 433.979C290.063 430 283.898 422.113 277.351 413.245C276.745 412.425 276.137 411.596 275.524 410.762C269.54 402.619 263.168 393.949 255.48 387.106C246.988 379.548 236.86 374.189 223.824 374.189C210.792 374.189 200.146 379.544 190.878 387.091C182.713 393.74 175.587 402.117 168.829 410.061C167.926 411.122 167.03 412.176 166.138 413.217C158.548 422.078 151.339 429.98 143.462 433.969C139.537 435.956 135.459 436.965 131.092 436.638C126.722 436.311 122.025 434.645 116.869 431.221C97.3931 418.291 78.3068 421.883 62.0153 424.95C60.7073 425.196 59.4174 425.439 58.1468 425.669C49.5599 427.227 41.913 428.218 35.4297 426.096C29.0014 423.993 23.6195 418.788 19.6728 407.688C15.7485 396.652 17.4213 385.725 22.4374 374.803C27.4588 363.87 35.8145 352.979 45.1996 342.049C49.0673 337.544 53.1171 333.026 57.1752 328.498C62.9375 322.069 68.7166 315.621 74.0148 309.168C83.057 298.156 90.7829 287.036 94.7933 275.757C101.353 257.309 99.2647 241.2 97.401 226.822C96.9891 223.645 96.5882 220.552 96.2939 217.537C95.4795 209.191 95.4771 201.449 98.2342 194.086C100.987 186.734 106.514 179.702 116.869 172.826C127.396 165.837 131.645 158.047 132.853 150.278C134.009 142.848 132.371 135.483 130.928 128.994C130.871 128.734 130.813 128.475 130.756 128.218C130.013 124.864 129.357 121.77 129.182 119C129.007 116.233 129.317 113.85 130.454 111.892C131.585 109.945 133.575 108.349 136.906 107.236C140.247 106.119 144.908 105.5 151.324 105.5Z" stroke="white"/>
                </svg>
                
            </div>
          </ul>
        </nav>
        <!-- End-SideNav -->

        <div class="main-panel">
          <div class="row">
            <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Daftar Notifikasi</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-12">
                        @if($cek_supply_system->status == 1)
                          @foreach($notifications as $notif)
                          @if($notif->stok != 0)
                          <div class="d-flex justify-content-start align-items-center mb-3">
                            <div class="icon-notification">
                              <i class="mdi mdi-alert m-auto text-warning"></i>
                            </div>
                            <div class="text-group ml-3">
                              <p class="m-0 title-notification">Barang Hampir Habis</p>
                              <p class="m-0 description-notification">Stok {{ $notif->nama_barang }} tersisa {{ $notif->stok }}</p>
                            </div>
                          </div>
                          @else
                          <div class="d-flex justify-content-start align-items-center mb-3">
                            <div class="icon-notification">
                              <i class="mdi mdi-alert m-auto text-danger"></i>
                            </div>
                            <div class="text-group ml-3">
                              <p class="m-0 title-notification">Barang Telah Habis</p>
                              <p class="m-0 description-notification">Stok barang {{ $notif->nama_barang }} telah habis</p>
                            </div>
                          </div>
                          @endif
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-wrapper" id="content-web-page">
            @yield('content')
          </div>
          <div class="content-wrapper" id="content-web-search" hidden="">
            <div class="row">
              <div class="col-12 text-left">
                <h3 class="d-block">Cari Halaman</h3>
                <h5 class="mt-3 d-block"><span class="result-1"></span> <span class="result-2"></span></h5>
              </div>
              <div class="col-12 mt-3">
                <div class="row" id="page-result-parent">
                </div>
              </div>
            </div>
          </div>
          {{-- <footer class="footer" id="footer-content">
            
          </footer> --}}
        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <script src="{{ asset('assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/shared/misc.js') }}"></script>
    <script src="{{ asset('plugins/js/jquery.form-validator.min.js') }}"></script>
    <script src="{{ asset('plugins/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('plugins/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/templates/script.js') }}"></script>
    <script type="text/javascript">
      $(document).on('input', 'input[name=search_page]', function(){
        if($(this).val() != ''){
          $('#content-web-page').prop('hidden', true);
          $('#content-web-search').prop('hidden', false);
          var search_word = $(this).val();
          $.ajax({
            url: "{{ url('/search') }}/" + search_word,
            method: "GET",
            success:function(response){
              $('.result-1').html(response.length + ' Hasil Pencarian');
              $('.result-2').html('dari "' + search_word + '"');
              var lengthLoop = response.length - 1;
              var searchResultList = '';
              for(var i = 0; i <= lengthLoop; i++){
                var page_url = "{{ url('/', ':id') }}";
                page_url = page_url.replace('%3Aid', response[i].page_url);
                searchResultList += '<a href="'+ page_url +'" class="page-result-child mb-4 w-100"><div class="col-12"><div class="card card-noborder b-radius"><div class="card-body"><div class="row"><div class="col-12"><h5 class="d-block page_url">'+ response[i].page_name +'</h5><p class="align-items-center d-flex justify-content-start"><span class="icon-in-search mr-2"><i class="mdi mdi-chevron-double-right"></i></span> <span class="breadcrumbs-search page_url">'+ response[i].page_title +'</span></p><div class="search-description"><p class="m-0 p-0 page_url">'+ response[i].page_content.substring(0, 500) +'...</p></div></div></div></div></div></div></a>';
              }
              $('#page-result-parent').html(searchResultList);
              $('.page_url:contains("'+search_word+'")').each(function(){
                  var regex = new RegExp(search_word, 'gi');
                  $(this).html($(this).text().replace(regex, '<span style="background-color: #607df3;">'+search_word+'</span>'));
              });
            }
          });
        }else{
          $('#content-web-page').prop('hidden', false);
          $('#content-web-search').prop('hidden', true);
        }
      });
    </script>
    @yield('script')
    <!-- End-Javascript -->
  </body>
</html>