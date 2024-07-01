<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="icon" href="{{url('frontend/images/Logo.png')}}" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/login.css')}}">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary w-200">
            <div class="card-header text-center">
                <img class="img-fluid" src="{{ asset('frontend/images/Logo.png') }}" alt="Desa Baros" width="90" height="70">
            </div>
            <div class="card-body">
                <p class="login-box-msg"></p>
                
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control w-input" name="email" placeholder="Email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $message }}</span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" id="inputPassword">
                        <div class="input-group-append" onclick="togglePassword()">
                            <div class="input-group-text">
                                <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $message }}</span>
                    @enderror
                    <div class="row">
                        {{-- <div class="col-8  justify-content-center">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                {{ __('Belum punya akun?') }}
                            </a>
                        </div> --}}
                        <!-- /.col -->
                        <div class="col-12  justify-content-center">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-3">
                            <label class="mr-2 text-sm font-medium text-gray-600">Belum punya akun?</label>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                                {{ __('Daftar') }}
                            </a>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <!-- Social auth links (if any) -->
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <!-- Additional links (if any) -->
                </p>
                <p class="mb-0">
                    <!-- Additional links (if any) -->
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('frontend/js/init.js')}}"></script>
    <script>
        function togglePassword(){
            const inputPassword= document.getElementById('inputPassword')
            if(inputPassword.type == 'password') {
                inputPassword.type = 'text'
            } else {
                inputPassword.type = 'password'
            }
        }
    </script>
</body>

</html>
