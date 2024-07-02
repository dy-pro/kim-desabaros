<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="icon" href="{{ url('frontend/images/Logo.png') }}" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/login.css') }}"> --}}

</head>

<body class="hold-transition register-page" style="background-image:url('{{ asset('frontend/images/background23.png') }}');">
    <div class="register-box">
        <!-- /.register-logo -->
        <div class="card card-outline card-primary w-200">
            <div class="card-header text-center">
                <img class="img-fluid" src="{{ asset('frontend/images/Logo.png') }}" alt="Desa Baros" width="90" height="70">
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masukan Data</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                
                    <!-- Name -->
                    <div class="input-group mb-3">
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $message }}</span>
                    @enderror
                
                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                       
                    </div>
                    @if ($errors->has('email'))
                    <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $errors->first('email') }}</span>
                    @endif
                
                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                        <div class="input-group-append" onclick="togglePassword()">
                            <div class="input-group-text">
                                <span class="fas fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                
                    <!-- Confirm Password -->
                    <div class="input-group mb-3">
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Masukan Ulang Password">
                        <div class="input-group-append" onclick="toggleConfirmPassword()">
                            <div class="input-group-text">
                                <span class="fas fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                        <span class="text-danger" style="margin-top: -1rem; margin-bottom: 1rem; display: block; font-size:14px; padding-left: 9px;">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center mt-3">
                            <label class="mr-2 text-sm font-medium text-gray-600">Sudah punya akun?</label>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Masuk') }}
                            </a>
                        </div>
                    </div>
                </form>
                
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('frontend/js/init.js') }}"></script>
    <script>
        function togglePassword() {
        var passwordField = document.getElementById('password');
        var passwordFieldType = passwordField.type;
        if (passwordFieldType === 'password') {
            passwordField.type = 'text';
        } else {
            passwordField.type = 'password';
        }
    }
    function toggleConfirmPassword() {
        var confirmPasswordField = document.getElementById('password_confirmation');
        var confirmPasswordFieldType = confirmPasswordField.type;
        if (confirmPasswordFieldType === 'password') {
            confirmPasswordField.type = 'text';
        } else {
            confirmPasswordField.type = 'password';
        }
    }
    </script>
</body>

</html>
