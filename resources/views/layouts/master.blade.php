<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website Kelompok Informasi Masyarakat Desa Baros, Kabupaten Bandung">
    <meta name="keywords" content="Kelompok Informasi Masyarakat Desa Baros" />
	<meta name="author" content="">
    <title>Kelompok Informasi Masyarakat Desa baros</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
	<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
	<link href="{{ asset('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap')}}"
		rel="stylesheet">
	<!-- font italiana -->
	<link rel="preconnect" href="{{ asset('https://fonts.googleapis.com')}}">
	<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
	<link href="{{ asset('https://fonts.googleapis.com/css2?family=Italiana&family=Jaldi&display=swap')}}" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel='stylesheet' id='bootstrap-css' href="{{ asset ('frontend/css/bootstrap/css/bootstrap.min.css')}}" type='text/css' media='all' />
	<!-- Font Awesome Icons CSS -->
	<link rel='stylesheet' id='font-awesome' href="{{ asset('frontend/css/fontawesome/css/font-awesome.min.css')}}" type='text/css'
		media='all' />
	<!-- Main CSS File -->
	<link rel='stylesheet' id='Kim- style-css' href="{{ asset('frontend/style.css')}}" type='text/css' media='all' />
    {{-- <link rel='stylesheet' id='Kim- style-css' href="{{ asset('frontend/css/order.css')}}" type='text/css' media='all' /> --}}

	<!-- favicons -->
	<link rel="icon" href="{{ asset('frontend/images/Logo.png')}}" sizes="32x32" />
	<link rel="icon" href="{{ asset('frontend/images/Logo.png')}}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/Logo.png')}}" />
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js')}}"></script>

</head>

<body class="home">
	<div class="menu-mask">
	<!-- HEADER -->
@include('layouts.include.navbar')
	<!-- /HEADER -->
    {{-- Content --}}
	@yield('content')
	{{-- /Content --}}
    {{-- Footer --}}
    @include('layouts.include.footer')
    {{-- /Footer --}}
	<div class="scrollup">
		<a class="scrolltop" href="#">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
	<!-- JS -->
	<script src="{{ asset('https://smtpjs.com/v3/smtp.js')}}"></script>
	<script src="{{ asset('frontend/js/script.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('frontend/css/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{ asset('frontend/css/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script>
	<script src="{{ asset('frontend/js/swiper.js')}}"></script>
	<script src="{{ asset('frontend/js/isotope.js')}}"></script>
	<script src="{{ asset('frontend/js/simple-lightbox.js')}}"></script>
    {{-- Main JS --}}
	<script src="{{ asset('frontend/js/init.js')}}"></script>
    @yield('script')

        
    

</body>

</html>