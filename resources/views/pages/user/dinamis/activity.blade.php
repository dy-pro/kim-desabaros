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
    @php
    use Carbon\Carbon;
    
    // Set locale to Indonesian
    Carbon::setLocale('id');
    @endphp
    
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
    
            @foreach ($activities->chunk(3) as $chunk)
                <div class="row layout-masonry margin-b50less mb-3">
                    @foreach ($chunk as $activity)
                        @php
                        // Parse the datetime and format it
                        $dateTime = Carbon::parse($activity->datetime_start);
                        $formattedDateTime = $dateTime->isoFormat('dddd, D MMMM YYYY HH:mm'); // Format lengkap dengan nama hari
    
                        // Determine whether the time is in the morning or evening
                        $hour = $dateTime->hour;
                        $timeOfDay = ($hour >= 6 && $hour < 18) ? 'Siang' : 'Malam';
                        @endphp
    
                        <div class="col-md-6 col-lg-4 blog-item-masonry">
                            <article class="blog-item blog-item-2col-grid">
                                <div class="post-image">
                                    <img 
                                        src="{{ Storage::url($activity->image) }}"
                                        class="img-fluid"
                                        alt="{{ $activity->name }}"
                                        width="750"
                                        height="750"
                                        loading="lazy"
                                    > 
                                    <a href="{{ route('detail_kegiatan', ['activityId'=>$activity->id]) }}"> </a>
                                </div>
                                <div class="post-holder">
                                    <h2 class="article-title display-6">
                                        <a href="{{ route('detail_kegiatan', ['activityId'=>$activity->id]) }}">
                                            {{ $activity->name }}
                                        </a>
                                    </h2>
                                    <div class="meta-info">
                                        <div class="meta-date-all">
                                            {{ $formattedDateTime }} ( {{ $timeOfDay }} )
                                        </div>
                                    </div>
                                    <a class="read-more-v3" href="{{ route('detail_kegiatan', ['activityId'=>$activity->id]) }}">
                                        Lihat Selengkapnya
                                    </a>
                                </div>
                            </article>
                        </div>
                        <!-- /blog-item-masonry -->
                    @endforeach
                </div>
                <!-- /row -->
            @endforeach
    
        </div>
        <!-- /container -->
    </div>
    
    
    <!-- /SECTION KEGIATAN -->
@endsection