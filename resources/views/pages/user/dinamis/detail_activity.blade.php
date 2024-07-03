@extends('layouts.user.master')

@section('content')
{{-- <div class="swiper-mr">
    <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background23.png') }}');">
        <div class="container slider-caption">
            <div class="row align-items-md-center">
                <div class="col-lg-12 alignc">
                    <div class="">
                        <h2 class="display-6 margin-bm30">Detail Kegiatan</h2>
                    </div>
                    <!-- /padding-lr200 -->	
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div id="wrap-content" class="page-content custom-page-template">
    <div class="blog-holder">
        <div class="row">
            <div class="col-lg-12 posts-holder post-sidebar">
                <article class="blog-item-1col single-post-holder single-article-container">
                    <div class="container post-content single-post-content single-article-page clearfix">
                        <h2 class="display-3" style="text-align: center">{{ $activity->name }}</h2>
                        <div class="row">
                            <div class="col-md-12 alignc">
                                <figure><img src="{{ asset('frontend/images/5.png') }}" alt="" class="img-fluid" width="300"></figure>
                            </div>
                        </div>
                        <p style="text-align: justify; margin-bottom:30px">{{ $activity->description }}</p>
                    
                        @php
                        use Carbon\Carbon;
                    
                        // Set locale to Indonesian
                        Carbon::setLocale('id');
                    
                        // Parse the datetime and format it
                        $dateTime = Carbon::parse($activity->datetime_start);
                        $formattedDateTime = $dateTime->isoFormat('dddd, D MMMM YYYY HH:mm'); // Format lengkap dengan nama hari

                        $hour = $dateTime->hour;
                        $timeOfDay = ($hour >= 6 && $hour < 18) ? 'Siang' : 'Malam';
                         @endphp
                        <blockquote class="wp-block-quote">
                            <p>Jadwal Kegiatan:<br>
                                <p>{{ $formattedDateTime }}  ( {{ $timeOfDay }} )<br></p>
                                {{ $activity->location }}<br><br>
                            </p>
                        </blockquote>
                    </div>
                    
                </div>
                    <!-- /single-post-content -->		
                </article>
            </div>
        
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

@if ($activity->contact_name && $activity->contact_phone != null)
<div class="contact-detail">
    <p class="contact-detail-text">
        Untuk informasi lebih lanjut dan partisipasi, hubungi:<br>
        <b>{{ $activity->contact_name }}</b><br>
        {{ $activity->contact_phone }}
    </p>
</div> 
@else
<div>
    &nbsp;
</div>

@endif


@endsection