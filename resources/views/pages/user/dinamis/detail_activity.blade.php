@extends('layouts.user.master')

@section('content')
<div class="swiper-mr">
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
</div>
<div id="wrap-content" class="page-content custom-page-template">
    <div class="blog-holder">
        <div class="row">
            <div class="col-lg-12 posts-holder post-sidebar">
                <article class="blog-item-1col single-post-holder single-article-container">
                    <div class="container post-content single-post-content single-article-page clearfix">
                        <h2 class="display-5">JADWAL BAKTI SOSIAL</h2>
                        <div class="row">
                            <div class="col-md-12 alignc">
                                <figure><img src="{{ asset('frontend/images/5.png') }}" alt="" class="img-fluid" width="300"></figure>
                            </div>
                        </div>
                        <p style="text-align: center">Kegiatan kerja bakti sosial ini bertujuan untuk mempererat tali silaturahmi antar warga, meningkatkan kebersihan dan kerapihan lingkungan, serta membantu masyarakat yang membutuhkan. Kegiatan ini juga menjadi sarana edukasi mengenai pentingnya menjaga kebersihan dan kesehatan lingkungan.</p>
                        
                        
                        @foreach ($activities as $activity )
                        <blockquote class="wp-block-quote">
                            <p>Jadwal Kegiatan:<br>
                                <p>{{ $activity->datetime_start }}<br></p>
                                Lokasi: Kec. Arjasari, Kantor Desa<br><br>
                                
                            
                        @endforeach            
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

<div class="contact-detail">
    <p class="contact-detail-text">
        Untuk informasi lebih lanjut dan partisipasi, hubungi:<br>
        <b>Cahaya Dewi</b><br>
        Telepon: (+123-456-7890)
    </p>
</div>
@endsection