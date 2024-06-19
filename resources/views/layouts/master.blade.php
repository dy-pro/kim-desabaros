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
	<link rel='stylesheet' id='tilia-style-css' href="{{ asset('frontend/style.css')}}" type='text/css' media='all' />
	<!-- favicons -->
	<link rel="icon" href="{{ asset('frontend/images/Logo.png')}}" sizes="32x32" />
	<link rel="icon" href="{{ asset('frontend/images/Logo.png')}}" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/Logo.png')}}" />
</head>

<body class="home">
	<div class="menu-mask">
		<!-- MOBILE MENU HOLDER -->
		<div class="container mobile-menu-holder">
			<div class="row">
				<div class="col-md-12">
					<button class="exit-mobile">
						<svg version="1.1" id="btn-menu-close" xmlns="{{ asset('http://www.w3.org/2000/svg')}}"
							xmlns:xlink="{{ asset('http://www.w3.org/1999/xlink')}}" x="0px" y="0px" viewBox="0 0 16 16"
							style="enable-background:new 0 0 16 16;" xml:space="preserve">
							<path d="M15.4,15.3l-0.1,0.1c-0.7,0.7-1.9,0.7-2.6,0L0.6,3.3c-0.7-0.7-0.7-1.9,0-2.6l0.1-0.1c0.7-0.7,1.9-0.7,2.6,0l12.1,12.1
									C16.2,13.4,16.2,14.6,15.4,15.3z"></path>
							<path d="M0.7,15.4l-0.1-0.1c-0.7-0.7-0.7-1.9,0-2.6L12.7,0.6c0.7-0.7,1.9-0.7,2.6,0l0.1,0.1c0.7,0.7,0.7,1.9,0,2.6L3.3,15.4
									C2.6,16.2,1.4,16.2,0.7,15.4z"></path>
						</svg>
					</button>
				</div>
			</div>
			@include('layouts.include.mobile')
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /MOBILE MENU HOLDER -->
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
</body>

</html>