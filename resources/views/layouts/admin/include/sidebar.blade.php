 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('frontend/images/Logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dashboard KIM Baros</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/manajemen_pengguna" class="nav-link {{ Request::is('manajemen_pengguna') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Pengguna</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/manajemen_kategori" class="nav-link {{ Request::is('manajemen_kategori') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Kategori</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/manajemen_produk" class="nav-link {{ str_contains(Request::url(), 'manajemen_produk') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Produk</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/community_management" class="nav-link {{ str_contains(Request::url(), 'community_management') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Komunitas</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="/manajemen_kegiatan" class="nav-link {{ Request::is('manajemen_kegiatan') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>Kegiatan</p>
                </a>
            </li>
        </ul>
    </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>