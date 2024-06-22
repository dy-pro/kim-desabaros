<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>

<body>
    <!-- 01 Preloader -->
    <!-- <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader"></div>
    </div> -->
    <!-- Preloader end -->
    <!-- 02 Main page -->
    <section class="page-section login-page">
        <div class="full-width-screen">
            <div class="container-fluid p-0">
                <div class="particles-bg" id="particles-js">
                    <div class="content-detail">
                        <!-- Login form -->
                        <form class="login-form"  action="/postlogin" method="post">
                            {{ csrf_field() }}
                            
                            <div class="imgcontainer">
                                <img src="{{url('frontend/images/Logo.png')}}" alt="Avatar" class="avatar">
                            </div>
                            <div class="input-control">
                                <input type="text" name="nama" placeholder="Enter Username" autofocus required value="{{ old ('nama')}}">
                                <span class="password-field-show @error('nama') is-invalid @enderror">
                                    @error('nama')
                                    <div class="in-invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <input type="password" placeholder="Enter Password" name="password"
                                        class="password-field @error('password') is-invalid @enderror" required>
                                    <span data-toggle=".password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                        @error('password')
                                        <div class="in-invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </span>
                                <label class="label-container">Remember me
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="psw"><a href="#" class="forgot-btn" onclick="alert('Mohon hubungi admin')">Forgot password?</a></span>                                <div class="login-btns">
                                    <button type="submit">Login</button>
                                </div>
                                <div class="login-with-btns">
                                    <span class="already-acc">Not a member? <a href="/register"
                                            class="signup-btn">Sign up</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p class="login-box-msg"></p>
                
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="#"></a>
                </p>
                <p class="mb-0">
                    <a href="#" class="text-center"></a>
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
</body>

</html>
