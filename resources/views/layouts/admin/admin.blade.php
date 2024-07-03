<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Desa Baros</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempus Dominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.39.0/build/css/tempusdominus-bootstrap-4.min.css" />
  <!-- Select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script> 

  <link href="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.css" rel="stylesheet">
  {{-- <style>
    
    </style> --}}
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="display: flex; align-items:center; justify-content:space-between; width:100%; padding-right:20px">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item"> --}}
        {{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link active"> --}}
          {{-- <button class="btn btn-outline-primary" id="logout-form" action="{{ route('logout') }}" method="POST">Tambah Produk</a> --}}

        {{-- <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-primary">Logout</a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <button class="btn btn-outline-primary" id="logout-form" action="{{ route('logout') }}" method="POST">Logout</button>

            </form> --}}
            <div class="hidden sm:flex sm:items-center sm:ms-6">
              <div class="dropdown">
                  <button class="btn btn-white text-sm font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <div>
                          <img src="{{ Auth::user()->image ? asset('users/' . Auth::user()->image) : asset('image/default-user.jpg') }}" alt="Profile Image" class="rounded-circle" width="40" height="40">
                      </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                      <li>
                          <a class="dropdown-item" href="{{ route('profile.edit') }}">
                              {{ __('Edit Profile') }}
                          </a>
                      </li>
                      <li>
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </a>
                          </form>
                      </li>
                  </ul>
              </div>
          </div>
          
           
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 {{-- Sidebar --}}
 @include('layouts.admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hallo, Admin</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.admin.include.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- Include Moment.js -->
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>

<!-- Include Tempus Dominus JS -->
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.39.0/build/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

<!-- Include your custom scripts -->
@yield('scripts')

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('AdminLTE/dist/js/pages/dashboard3.js')}}"></script>

<script src="https://cdn.datatables.net/v/dt/dt-2.0.8/datatables.min.js"></script>
<script>
  $(document).ready(function() {
    $('.dataTable').dataTable();
  })
</script>
</body>
</html>
