@extends('layouts.user.master')

@section('content')
  <!-- HOME SLIDER -->
  <div id="home-section-7-1" class="section-holder home-section-7-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 alignc">
				<div class="padding-lr200">
					<img class="img-fluid width30 margin-b50" src="{{ asset('frontend/images/logo_desa.png')}}" alt=" " />
					<h2 class="display-4 margin-bm30">Selamat datang di website resmi Desa Baros</h2>
					<p>Desa Baros termasuk wilayah Kecamatan Arjasari Kabupaten Bandung dengan luas wilayah 419,7 Ha. dengan ketinggian dataran rerata 600 – 1100 m di atas permukaan laut.</p>
                    <br>
                    <a href="/tentang_desa" class="read-more">Lihat Selengkapnya</a>
				</div>
				<!-- /padding-lr200 -->	
			</div>
			<!-- /col-lg-12 -->	
		</div>
		<!-- /row -->	
	</div>
	<!-- /container -->	
</div>

	<!-- /HOME SLIDER -->
	<!-- WRAP CONTENT -->
	<div id="wrap-content" class="page-content custom-page-template">
		<!-- SECTION 1 -->
		<div id="home-section-1-1" class="section-holder home-section">
			{{-- style="background-image: url('{{ asset('frontend/images/background2.png') }}');"> --}}
			<div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="display-3 margin-b50">Kegiatan Desa</h2>
                        <div class="margin-b60">
							<p style="text-align: justify;">Selamat datang di halaman kegiatan Desa Baros, Kabupaten Bandung. Di sini, kami menampilkan berbagai kegiatan yang mencerminkan semangat kebersamaan dan gotong royong masyarakat Desa Baros. Mulai dari acara budaya, kegiatan sosial, hingga program pembangunan desa, semua terlibat aktif untuk memajukan kesejahteraan dan kualitas hidup warga desa</p>
							<!-- /row -->
						</div>
                    </div>
    
                </div>
				<div class="row">
                    <div class="col-lg-4 margin-bm20">
                        <!-- <div class="el-smalltitle">Our Story</div> -->
                        <div class="price-box">
                            <img class="poster" src="{{ asset('frontend/images/poster.png')}}"/>
                            <div class="margin-b30 poster-text">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <a class="read-more btn100" href="/kegiatan">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-bt20">
                        <!-- <div class="el-smalltitle">Our Story</div> -->
                        <div class="price-box">
                            <img class="poster" src="{{ asset('frontend/images/poster.png')}}"/>
                            <div class="margin-b30 poster-text">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <a class="read-more btn100" href="/kegiatan">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
						<div class="price-box">
                            <img src="{{ asset('frontend/images/poster.png')}}"/>
                            <div class="margin-b30">
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <a class="read-more btn100" href="pricing-plans.html">Lihat Selengkapnya</a>
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
            {{-- isi potensi --}}
            <div class="row potensi-row">
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="icon-box-2 d-flex">
                        <!-- /icon-svg -->
                        <h5>Sumber Daya Alam</h5>
                      
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="icon-box-2  d-flex">
                        <!-- /icon-svg -->
                        <h5>Sumber Daya Manusia</h5>
                        
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="icon-box-2  d-flex">
                        <!-- /icon-svg -->
                        <h5>Sumber Daya Pembangunan</h5>
                        
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="icon-box-2  d-flex">
                        <!-- /icon-svg -->
                        <h5>Sumber Daya Sosial</h5>
                       
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="icon-box-2  d-flex">
                        <!-- /icon-svg -->
                        <h5>Sumber Daya Budaya</h5>
                        
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-4 mb-4 ">
                    <div class="icon-box-2">
                        <!-- /icon-svg -->
                        <h5>Kelembagaan</h5>        
                    </div>
                    <!-- /icon-box-2 -->
                </div>
                <!-- /col-md-6 -->
            </div>
            {{-- /row --}}
        </div>
        <!-- /container -->
    </div>
    
	<!-- /SECTION 3 -->

    {{-- SECTION 4 --}}
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
                        <div class="price-box price-box-middle black-text">
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
                            <a class="read-more" href="/kegiatan">Beli Sekarang</a>
                        </div>
                    </div>
					<!-- /col-lg-6 -->
                    
					<!-- /col-lg-6 -->
				</div>
				<!-- /row -->
                <div class="row">
                    <div class="col-md-12 text-center margin-t50">
                        <a class="read-more" href="/produk_desa">Lihat Selengkapnya</a>
                    </div>
                </div>

			</div>
            
			<!-- /container -->
		</div>
	</div>
    
@endsection