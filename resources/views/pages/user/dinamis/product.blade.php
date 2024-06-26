@extends('layouts.user.master')

@section('content')
<!-- HOME SLIDER -->
<div class="swiper-mt">
    <div class="swiper-wrapper">
        <div class="slider-img" style="background-image:url('{{ asset('frontend/images/store.png') }}');">
            <div class="container slider-caption">
                <div class="row align-items-md-center">
                    <div class="col col-lg-12 d-flex justify-content-center align-items-center">
                         <div class="slider-text"  style="text-align: right">
                          {{-- <span class="post-subtitle" style="text-align: right"></span>  --}}
                          <h1 class="display-2"  style="text-align: right">Produk Desa</h1>
                         </div>
                     </div>
                </div>
              </div>
        </div>
    </div>
  </div>
	<!-- /HOME SLIDER -->

 {{-- KATALOG --}}
<!-- SECTION PRODUCT -->
<div id="wrap-content" class="page-content page-holder custom-page-template">
    <div class="container">
        <div class="row align-items-center margin-t20">
            <div class="col-lg-6">
                <h2 class="display-4 margin-t50">Produk Desa</h2>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-filter">
                    <li><a class="view-more current" href="#" data-filter="*">Semua Produk</a></li>
                    <li class="lifestyle"><a class="view-more" href="#" data-filter=".food">Makanan</a></li>
                    <li class="portrait"><a class="view-more" href="#" data-filter=".drink">Minuman</a></li>
                    <li class="wedding"><a class="view-more" href="#" data-filter=".art">Kerajinan</a></li>
                </ul>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12">        
                        <div class="portfolio-grid-container portfolio-grid-container-v2 margin-b100">
                            <div class="portfolio-grid portfolio-grid-v2 portfolio-layout-masonry">
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/1.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Ranginang</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/2.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Ranginang</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/3.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Ranginang</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/4.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Egg Roll</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">        
                        <div class="portfolio-grid-container portfolio-grid-container-v2 margin-b100">
                            <div class="portfolio-grid portfolio-grid-v2 portfolio-layout-masonry">
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/5.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Egg Roll</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/6.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Egg Roll</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols drink">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/7.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Biji Kopi</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /item-portfolio -->
                                <div class="item-portfolio item-portfolio-v2 item-4cols food">
                                    <div class="card">
                                        <div class="card-header p-0">
                                            <a href="/product">
                                                <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/11.png')}}" alt="Ranginang" />
                                            </a>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title margin-b10">Ketan</h5>
                                            <div class="card-text team-position">Rp. 10.000</div>
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <input type="number" min="1" value="1" class="form-control quantity-input" />
                                                <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                        <!-- /item-portfolio -->
                    </div>
                    <!-- /portfolio-grid -->
                </div>
                <!-- /portfolio-grid-container -->
           
<!-- /SECTION PRODUCT-->	

 <!-- SECTION TESTIMONI -->
 <div id="home-section-3-3" class="section-holder home-section-3-3 margin-b50">
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
                            <!-- /testimonial-info -->
                            {{-- <div class="swiper-slide testimonial-info">
                                <h4 class="testimonial-desc">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis justo.</h4>
                                <div class="testimonial-client">Marie Smith</div>
                                <div class="testimonial-company">The Smiths</div>
                            </div> --}}
                            <!-- /testimonial-info -->
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
</div>
<!-- /SECTION TESTIMONI -->	
{{-- /KATALOG --}}
@endsection