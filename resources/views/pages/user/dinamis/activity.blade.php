@extends('layouts.user.master')

@section('content')
<div class="swiper-mt">
    <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background50.png') }}');">
        <div class="container slider-caption">
            <div class="row align-items-md-center">
                <div class="col-lg-12 alignc">
                    <div class="">
                        {{-- <img class="img-fluid margin-b30" src="{{ asset('frontend/images/logo_desa.png')}}" alt="" style="max-width: 230px"/> --}}
                        <h2 class="display-4 margin-bm30"><b>Selamat datang</b> di website resmi Desa Baros</h2>
                        <p style="color: #2B5796">Desa Baros termasuk wilayah Kecamatan Arjasari Kabupaten Bandung dengan luas wilayah 419,7 Ha. dengan ketinggian dataran rerata 600 – 1100 m di atas permukaan laut.</p>
                        <br>
                    </div>
                    <!-- /padding-lr200 -->	
                </div>
            </div>
          </div>
    </div>
</div>
    <!-- SECTION KEGIATAN -->
    <div id="home-section-1-2" class="section-holder home-section-1-2 margin-t50 margin-b50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="padding-lr200 alignc">
                        <div class="el-smalltitle">Kegiatan Desa</div>
                        <h2 class="display-4 margin-b50">Kegiatan Mendatang</h2>
                    </div>
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row layout-masonry margin-b50less">
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/5.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Potret Kegiatan Amal</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">11 Januari, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/6.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Penerimaan Peserta Didik</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">5 Februari, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/7.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Jadwal Bakti Sosial</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">18 Juli, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                
            </div>
            <!-- /row -->
            <div class="row layout-masonry margin-b50less margin-t70">
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/5.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Potret Kegiatan Amal</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">11 Januari, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/6.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Penerimaan Peserta Didik</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">5 Februari, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('frontend/images/7.png')}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">Jadwal Bakti Sosial</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">18 Juli, 2024</div>
                            </div>
                            <a class="read-more-v3" href="/activity">Lihat Selengkapnya</a>
                        </div>
                    </article>
                </div>
                <!-- /blog-item-masonry -->
                
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION KEGIATAN -->
@endsection