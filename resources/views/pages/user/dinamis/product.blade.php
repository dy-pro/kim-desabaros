@extends('layouts.user.master')

@section('content')

<!-- HOME SLIDER -->
<div class="swiper-mt">
    <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/store.png') }}');">
        <div class="container slider-caption">
            <div class="row align-items-md-center">
                <div class="col-2 col-lg-6 responsive-img floating-text">
                    <img src="{{ asset('frontend/images/imgstore.png')}}"  class="" width="400"/>
               </div>
                <div class="col col-lg-6">
                     <div class="slider-text slide-in-left">
                      <h1 class="display-3" style="text-align: right">Produk Desa</h1>
                    </div>
                </div>
               
            </div>
          </div>
    </div>
</div>
	<!-- /HOME SLIDER -->

 {{-- KATALOG --}}
<!-- SECTION PRODUCT -->
<div id="home-section-1-2" class="section-holder home-section-1-2">
    <div class="container">
        <div class="row align-items-center margin-t200">
            <div class="col-lg-6 fade-in-up">
                <h2 class="display-4 margin-t50">Produk Desa</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 col-md-12 align-items-center justify-content-center">
                <ul class="portfolio-filter">
                    <li><a class="view-more category-filter current" href="#" data-category="">Semua Kategori</a></li>
                    @foreach ($categories as $category)
                        <li><a class="view-more category-filter" href="#" data-category="{{ $category->id }}">{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 align-items-center justify-content-center">
                <form id="search-form" action="{{ route('products.search') }}" method="GET" class="d-flex gap-3 w-100">
                    <input type="text" name="search" id="search-input" class="form-control flex-grow-1" placeholder="Cari Produk" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>

        {{-- katalog --}}
        <div class="row margin-b80" id="search-results">
            @foreach ($products as $product)
            <div class="col-md-6 col-lg-3 margin-b50">
                <div class="portfolio-grid-container portfolio-grid-container-v2">
                    <div id="product-container" class="portfolio-grid portfolio-grid-v2 portfolio-layout-masonry d-flex flex-wrap">
                        <div class="width-100 {{ strtolower($product->category_title) }} flex-item">
                            @php
                                $product->price = number_format($product->price, 0, ',', '.');
                            @endphp
                                <div class="card">
                                    <div class="card-header p-0">
                                        <a href="/product">
                                            <img class="product-image w-100 radius10-top" src="{{ asset('products/'.$product->product_image)}}" alt="{{ $product->name }}" />
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title margin-b10">{{ $product->product_name }}</h5>
                                        <div class="card-text team-position">Rp. {{ $product->price }}</div>
                                        <div class="d-flex justify-content-center align-items-center mt-3 gap-3">
                                            <input type="tel" class="form-control phone" hidden data-product-id="{{ $product->id }}" value="{{ $product->whatsapp }}" style="padding: .375rem .75rem"/>
                                            
                                            <div class="quantity-container">
                                                <button class="quantity-btn minus">-</button>
                                                {{-- <div class="quantity"> --}}
                                                    <input type="number" class="quantity" data-product-id="{{ $product->id }}" step="1" min="1" max="" value="1" placeholder="" readonly/>
                                                {{-- </div> --}}
                                                <button class="quantity-btn plus">+</button>
                                            </div>
                                            
                                            <a class="btn btn-primary whatsappButton buy-button" href="#" data-product-id="{{ $product->id }}" target="_blank">Beli</a>
                                        </div>
                                    </div>                                    
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- katalog --}}
    </div>
</div>

 <!-- SECTION TESTIMONI -->
 {{-- <div id="home-section-3-3" class="section-holder home-section-3-3 margin-b50">
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 margin-bm50">
            <img class="img-fluid radius-right251" src="{{ asset('frontend/images/title1.png')}}" alt=" ">
        </div>
        <!-- /col-lg-6 -->
        <div class="col-lg-6">
            <div class="padding-50">
                <div class="testimonials">
                    <div class="testimonial-quote">
                        <svg version="1.1" class="icon-quote2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M84.2,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,28-49.4,33.1-77C72,316.2,48.6,302.3,31,282.2
                                        c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1s125.1,56.1,125.1,125.1c0,103.2-61.6,195.6-156.8,235.4
                                        C90.4,436.6,87.3,437.2,84.2,437.2z M125.1,94.1c-58.4,0-105.9,47.5-105.9,105.9c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5
                                        c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5c88.1-36.8,145-122.2,145-217.7
                                        C231,141.5,183.5,94.1,125.1,94.1z M346,437.2c-7.2,0-14.2-3.2-18.9-9.1c-6.7-8.4-6.9-20.3-0.7-29c16.6-22.9,27.9-49.4,33.1-77
                                        c-25.8-5.8-49.2-19.7-66.8-39.8c-20-22.8-31-52-31-82.3c0-69,56.1-125.1,125.1-125.1S512,130.9,512,199.9
                                        c0,103.2-61.6,195.6-156.8,235.4C352.2,436.6,349.1,437.2,346,437.2z M386.9,94.1c-58.4,0-105.9,47.5-105.9,105.9
                                        c0,52.4,39.1,97.4,90.9,104.8l9.5,1.3l-1.3,9.5c-4.7,34-17.8,66.8-38.1,94.8c-1.3,1.8-1.2,4.1,0.1,5.8c1.3,1.7,3.6,2.3,5.6,1.5
                                        c88.1-36.8,145-122.2,145-217.7C492.8,141.5,445.3,94.1,386.9,94.1z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <!-- /testimonial-quote -->
                    <div class="testimonial-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial-info">
                                <h4 class="testimonial-desc">Ranginang dari Desa Baros enak banget! Renyah dan gurih, rasanya otentik banget. Pas buat cemilan sore atau oleh-oleh. Pasti beli lagi!</h4>
                                <div class="testimonial-client">Karlina</div>
                            </div>
                            <!-- /testimonial-info -->
                            <div class="swiper-slide testimonial-info">
                                <h4 class="testimonial-desc">Kopi Nusantara dari Desa Baros mantap! Aromanya kuat, rasanya pas di lidah. Harganya sedikit mahal tapi worth it. Cocok buat pecinta kopi.</h4>
                                <div class="testimonial-client">Ardyan</div>
                            </div>
                            <!-- /testimonial-info -->
                            <div class="swiper-slide testimonial-info">
                                <h4 class="testimonial-desc">Keranjang anyaman bambu dari Desa Kreatif keren banget! Kuat, tahan lama, dan desainnya unik. Pas banget buat hiasan rumah. Sangat puas!</h4>
                                <div class="testimonial-client">Marsa Dewo</div>
                            </div>
                        </div>
                        <!-- /swiper-wrapper-->
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- /testimonial-slider -->
                </div>
                <!-- /testimonials -->
            </div>
            <!-- /padding-50 -->
        </div>
        <!-- /col-lg-6 -->
    </div>
    <!-- /row -->
</div> --}}
<!-- /SECTION TESTIMONI -->	
{{-- /KATALOG --}}

{{-- SECTION GET IN TOUCH --}}
<div id="home-section-1-2" class="section-holder home-section-1-2 parallax" style="background-image:url('{{ asset('frontend/images/background23.png') }}');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="padding-lr200 alignc">
					<div class="el-smalltitle">Gabung Bersama Kami</div>
					<h2 class="display-5 margin-b30" style="text-align: center">Mari Berjualan di Website Desa Baros</h2>
					<p>Kembangkan usaha Anda dengan dukungan dari komunitas lokal. Kami siap membantu Anda memulai bisnis online dengan mudah dan cepat.</p>
					<a href="{{ route('register')}}" class="read-more margin-t30">Daftar Sekarang</a>
				</div>
			</div>
			<!-- /col-lg-12 -->
		</div>
		<!-- /row -->	
	</div>
	<!-- /container -->
</div>

{{-- /SECTION GET IN TOUCH --}}

@endsection