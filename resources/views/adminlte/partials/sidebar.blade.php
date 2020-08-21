<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link bg-danger elevation-2">
    <img src="{{ asset('/img/Mwuc_fmP_400x400.jpg')}}"
         alt="Auto2000 Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('/img/pngfind.com-user-icon-png-938537.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Home
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             
        <li class="nav-item">
          <a href="/pelanggan" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Pelanggan
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/bookings" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              List Booking
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/chart" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Grafik MRA/SA
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>