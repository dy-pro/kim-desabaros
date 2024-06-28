 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('frontend/images/Logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block">Dashboard KIM Baros</a>
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
                 @if(Auth::user()->role == 'admin')
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/user_management" class="nav-link {{ str_contains(Request::url(),'user_management') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Pengguna</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/category_management" class="nav-link {{ str_contains(Request::url(), 'category_management') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Kategori Produk</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/activity_management" class="nav-link {{str_contains(Request::url(), 'activity_management') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>Kegiatan</p>
              </a>
          </li>
          @endif
            <li class="nav-item">
                <a href="/product_management" class="nav-link {{ str_contains(Request::url(), 'product_management') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>Produk</p>
                </a>
            </li>
            
        </ul>
    </nav>
    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>