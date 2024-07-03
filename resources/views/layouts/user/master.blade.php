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

    {{-- dropdown --}}
        <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Optional JavaScript; choose one of the two! -->


</head>

<body class="home">
	<div class="menu-mask">
	<!-- HEADER -->
@include('layouts.user.include.navbar')
	<!-- /HEADER -->
    {{-- Content --}}
	@yield('content')
	{{-- /Content --}}
    {{-- Footer --}}
    @include('layouts.user.include.footer')
    {{-- /Footer --}}
	<div class="scrollup">
		<a class="scrolltop" href="#">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>
	{{-- <a style="color: red" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form> --}}
	
	<!-- JS -->
	<script src="{{ asset('https://smtpjs.com/v3/smtp.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/countup@1.8.2/countUp.js"></script>
	<script src="{{ asset('frontend/js/script.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('frontend/css/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{ asset('frontend/css/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.easing.min.js')}}"></script>
	<script src="{{ asset('frontend/js/swiper.js')}}"></script>
	<script src="{{ asset('frontend/js/isotope.js')}}"></script>
	<script src="{{ asset('frontend/js/simple-lightbox.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    
    {{-- Main JS --}}
	<script src="{{ asset('frontend/js/init.js')}}"></script>
	<script>
		// console.log('test')
	
		document.querySelectorAll('.whatsappButton').forEach(function(button) {
    	button.onclick = function(e) {
        var productId = this.getAttribute('data-product-id');
        var productCard = this.closest('.card');
        var quantity = productCard.querySelector(`.quantity[data-product-id='${productId}']`).value;
        var productName = productCard.querySelector('.card-title').textContent;
        var phone = productCard.querySelector(`.phone[data-product-id='${productId}']`).value;
        var message = `Hallo, Saya ingin pesan:\n\nNama Produk     : ${productName}\nJumlah dipesan : ${quantity}\n\nTerimakasih!`;

        var whatsappURL = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        this.href = whatsappURL;
    };
	});


	
	document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.fade-in-up, .slide-in-left, .slide-in-right');

            function checkVisibility() {
                elements.forEach(function(element) {
                    if (element.getBoundingClientRect().top < window.innerHeight && element.getBoundingClientRect().bottom >= 0) {
                        element.classList.add('visible');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            window.addEventListener('resize', checkVisibility);
            checkVisibility();
        });

		document.querySelectorAll('.quantity-container').forEach(container => {
    const input = container.querySelector('.quantity');
    const minusBtn = container.querySelector('.minus');
    const plusBtn = container.querySelector('.plus');

    minusBtn.addEventListener('click', () => {
        if (input.value > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });

    plusBtn.addEventListener('click', () => {
        input.value = parseInt(input.value) + 1;
    });
});

// search product
$(document).ready(function() {
    function fetchProducts(searchQuery, category) {
        $.ajax({
            url: '{{ route("products.search") }}',
            method: 'GET',
            data: { 
                search: searchQuery,
                category: category
            },
            success: function(response) {
                $('#search-results').replaceWith(response.html);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }

    $('#search-form').on('submit', function(e) {
        e.preventDefault();
        var searchQuery = $('#search-input').val();
        var category = $('.portfolio-filter .current').data('category');
        fetchProducts(searchQuery, category);
    });

    $('.category-filter').on('click', function(e) {
        e.preventDefault();
        $('.category-filter').removeClass('current');
        $(this).addClass('current');
        var category = $(this).data('category');
        var searchQuery = $('#search-input').val();
        fetchProducts(searchQuery, category);
    });
});
	</script>
    @yield('script')

        
    

</body>

</html>