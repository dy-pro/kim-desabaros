@extends('layouts.user.master')

@section('content')
<div class="swiper-mr">
    <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background50.png') }}');">
        <div class="container slider-caption">
            <div class="row align-items-md-center">
                <div class="col-lg-12 alignc">
                    <div class="">
                        {{-- <img class="img-fluid margin-b30" src="{{ asset('frontend/images/logo_desa.png')}}" alt="" style="max-width: 230px"/> --}}
                        <h2 class="display-4 margin-bm30">Kegiatan Desa</h2>
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
                @foreach ($activities as $activity )
                <div class="col-md-6 col-lg-4 blog-item-masonry">
                    <article class="blog-item blog-item-2col-grid">
                        <div class="post-image"> <img loading="lazy" src="{{ asset('/storage/'.$activity->image)}}" class="img-fluid" alt=" " width="750" height="750"> <a href="blog-single-post.html"> </a></div>
                        <div class="post-holder">
                            <h2 class="article-title display-6"><a href="blog-single-post.html">{{ $activity->description }}</a></h2>
                            <div class="meta-info">
                                <div class="meta-date-all">{{ $activity->eventStartDate }}</div>
                            </div>
                            <a class="read-more-v3" href="/activity/detail_activity">Lihat Selengkapny</a>
                        </div>
                    </article>
                </div>
                @endforeach
                
                <!-- /blog-item-masonry -->
                
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION KEGIATAN -->
@endsection