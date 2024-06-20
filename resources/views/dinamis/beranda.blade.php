@extends('layouts.master')

@section('content')
  <!-- HOME SLIDER -->
  <div class="swiper-mt">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background4.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image: url('{{ asset('frontend/images/background5.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
    </div>
    <!-- /swiper-wrapper -->
    <div class="swiper-mt-button-prev" tabindex="0" role="button" aria-label="Previous slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
            <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
                c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
                S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
        </svg>
    </div>
    <!-- /swiper-mt-button-prev -->
    <div class="swiper-mt-button-next" tabindex="0" role="button" aria-label="Next slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
            <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
                c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
                S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
        </svg>
    </div>
    <!-- /swiper-mt-button-next -->
</div>
	<!-- /HOME SLIDER -->
	<!-- WRAP CONTENT -->
	<div id="wrap-content" class="page-content custom-page-template">
		<!-- SECTION 1 -->
		<div id="home-section-1-1" class="section-holder home-section-1-1"
			style="background-image: url(images/home/home2.png);" alt="Prewedding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
						<h3 class="display-4 margin-b40">Kegiatan Desa</h3>
						<div class="margin-b60">
							<p style="text-align: justify;">Selamat datang di halaman kegiatan Desa Baros, Kabupaten Bandung. Di sini, kami menampilkan berbagai kegiatan yang mencerminkan semangat kebersamaan dan gotong royong masyarakat Desa Baros.<br><br> Mulai dari acara budaya, kegiatan sosial, hingga program pembangunan desa, semua terlibat aktif untuk memajukan kesejahteraan dan kualitas hidup warga desa</p>
							<!-- /row -->
						</div>
						
					</div>
                    <div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
                            <div class="price-box price-box-middle black-text">
                           <img src="{{ asset('frontend/images/poster.png')}}"/>
                            <div class="margin-b30">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <a class="read-more btn100" href="#">Choose</a>
                        </div>
						
					</div>
                    <div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
						<div class="price-box">
                            <img src="{{ asset('frontend/images/poster.png')}}"/>
                            <div class="margin-b30">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <a class="read-more btn100" href="pricing-plans.html">Choose</a>
                        </div>
						
					</div>
					<!-- /col-lg-6 -->

					<!-- /col-lg-6 -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
	</div>
	<!-- /SECTION 1 -->

	<!-- /SECTION 3 -->
	<div id="home-section-1-3" class="section-holder home-section-1-3">
		{{-- style="background-image: url(images/pages/portfolio.png);"> --}}
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="display-3 margin-b50">Potensi Desa</h2>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="portfolio-slider gallery-slider-holder">
						<div class="swiper-wrapper">

							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">UMKM Desa Baros</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/1.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">UMKM Desa Baros</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/7.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
                            <!-- /item-slider -->
							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">UMKM Desa Baros</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/2.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">Desa Wisata</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/10.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">Desa Wisata</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/8.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
                                <div class="col-md-12 text-center custom-margin">
                                    <p class="custom-font-size">Desa Wisata</p>
                                </div>
                                <div class="post-image item-grid-image">
                                        <img loading="lazy" src="{{ asset('frontend/images/produk/9.png') }}" class="img-fluid" alt="UMKM Desa Baros" width="750" height="750">
                                    </a>
                                </div>
                            </div>
						</div>
						<!-- /swiper-wrapper -->
						<div class="swiper-mt-button-prev portfolio-slider-btn-prev">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
								style="enable-background:new 0 0 55 55;" xml:space="preserve">
								<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
								<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
							</svg>
						</div>
						<div class="swiper-mt-button-next portfolio-slider-btn-next">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
								style="enable-background:new 0 0 55 55;" xml:space="preserve">
								<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
								<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
							</svg>
						</div>
					</div>
					<!-- /portfolio-slider -->
				</div>
				<!-- /col-lg-12 -->
			</div>
			<!-- /row -->
			<!-- /row kosong -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 3 -->
@endsection