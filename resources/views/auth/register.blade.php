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
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/login.css') }}">

</head>

<body class="hold-transition register-page">
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
                        <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="input-group mb-3">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                        <div class="input-group-append" onclick="togglePassword()">
                            <div class="input-group-text">
                                <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-group mb-3">
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="password_confirmation" placeholder="Masukan Ulang Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
        function togglePassword(){
            const inputPassword = document.getElementById('password');
            const inputPasswordConfirmation = document.getElementById('password_confirmation');
            if(inputPassword.type === 'password') {
                inputPassword.type = 'text';
                inputPasswordConfirmation.type = 'text';
            } else {
                inputPassword.type = 'password';
                inputPasswordConfirmation.type = 'password';
            }
        }
    </script>
</body>

</html>
