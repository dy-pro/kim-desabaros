<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Karlina Fithrian">
    <link rel="icon" href="{{url('frontend/images/home/pavicon.png')}}" />
    <link rel="shortcut icon" href="{{url('frontend/images/home/pavicon.png')}}"/>
    <title>Login</title>
    <!--Google font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{url('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- Bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{url('AdminLTE/dist/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('AdminLTE/dist/css/fontawesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('AdminLTE/dist/css/adminlte.min.css')}}">
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
        </div>
    </section>
    <!-- latest jquery-->
    <script src="{{url('AdminLTE/dist/js/jquery-3.5.1.min.js')}}"></script>
    <!-- theme particles script -->
    <script src="{{url('AdminLTE/dist/js/particles.min.js')}}"></script>
    <script src="{{url('AdminLTE/dist/js/app.js')}}"></script>
    <!-- Theme js-->
    <script src="{{url('AdminLTE/dist/js/script.js')}}"></script>
</body>

</html>