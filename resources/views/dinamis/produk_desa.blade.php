@extends('layouts.master')

@section('content')
<!-- HOME SLIDER -->
<div class="swiper-mt">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background_produk.png') }}');">
            <div class="container slider-caption-1">
                
                         <div class="slider-text-1">
                          <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                          <h1 class="display-2">Desa Baros</h1>
                           <a href="#" class="read-more">Lihat Selengkapnya</a>
                         </div>
                    {{-- <div class="col-2 col-lg-6">
                         <img src="{{ asset('frontend/images/a.png')}}"  class="responsive-img" width="500"/>
                    </div> --}}
             
        </div>
    </div>
  </div>
</div>
	<!-- /HOME SLIDER -->

 {{-- KATALOG --}}
 <div id="wrap-content" class="page-content custom-page-template">
    <!-- SECTION 1 -->
    <div id="home-section-1-1" class="section-holder home-section">
        {{-- style="background-image: url('{{ asset('frontend/images/background2.png') }}');"> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="display-3 margin-b50">Produk Desa</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                {{-- produk 2 --}}
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                {{-- produk 3 --}}
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                {{-- Produk 4 --}}
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                {{-- Produk 5 --}}
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                {{-- Produk 6 --}}
                <div class="col-lg-4 margin-bm20">
                    <!-- <div class="el-smalltitle">Our Story</div> -->
                    <div class="price-box black-text">
                        <img class="poster" src="{{ asset('frontend/images/produk/1.png')}}" class="img-fluid" alt="Ranginang" width="750" height="750"/>
                        <div class="margin-b30 margin-t30">
                            <p><strong> Ranginang</strong></p>
                        </div>
                        <div class="margin-b30 margin-t30">
                            <p>Rp. 50.000</p>
                        </div>
                        <a class="read-more btn100" href="/kegiatan">Beli Sekarang</a>
                    </div>
                </div>
                <!-- /col-lg-6 -->

                <div class="prev-next"><span class="nav-page"></span><span class="page-numbers current-page">1</span> <a class="page-numbers" href="#">2</a> <span class="nav-page"><a href="#">&gt;</a></span></div>

            </div>
            <!-- /row -->
        </div>
        
        <!-- /container -->
    </div>
</div>
{{-- /KATALOG --}}
@endsection