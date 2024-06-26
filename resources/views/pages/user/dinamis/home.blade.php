@extends('layouts.user.master')

@section('content')
  <!-- Section 1 -->
  <div class="swiper-mt">
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background6.png') }}');">
            <div class="container slider-caption">
                <div class="row align-items-md-center">
                    <div class="col col-lg-6">
                         <div class="slider-text">
                          <h1 class="display-3">Desa Baros</h1>
                          <span class="post-subtitle" style="text-align: justify">Selamat datang di website resmi Desa Baros, Kabupaten Bandung.
                            kami menampilkan berbagai kegiatan yang mencerminkan semangat kebersamaan dan gotong royong masyarakat Desa Baros. </span> 
                        </div>
                        <div class="margin-b30">
                            <a class="read-more-v3" href="{{ url('about') }}">Lihat Selengkapnya</a>
                        </div>
                     </div>
                    <div class="col-2 col-lg-6 responsive-img">
                         <img src="{{ asset('frontend/images/fotodesa.png')}}"  class="" width="500"/>
                    </div>
                </div>
              </div>
        </div>
  </div>
	<!-- /section 1 -->

    {{-- section 2 --}}
    <div id="home-section-2-1" class="section-holder section-info home-section-2-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-mobi2">
                    <div class="margin-r50">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid radius10 margin-b30" src="{{ asset('frontend/images/background4.jpeg')}}" alt=" " />
                                <img class="img-fluid radius10" src="{{ asset('frontend/images/background5.jpeg')}}" alt=" " />
                            </div>
                            <!-- /col-md-6 -->	
                            <div class="col-md-6">
                                <img class="img-fluid radius10 margin-t30" src="{{ asset('frontend/images/background.jpeg')}}" alt=" " />
                                <img class="img-fluid radius10  margin-t30" src="{{ asset('frontend/images/background2.jpeg')}}" alt=" " />
                            </div>
                            <!-- /col-md-6 -->	
                        </div>
                        <!-- /row -->	
                    </div>
                    <!-- /margin-r50 -->	
                </div>
                <!-- /col-lg-6 -->	
                <div class="col-lg-6 order-mobi1 margin-t50">
                    {{-- <div class="el-smalltitle"></div> --}}
                    <h2 class="display-3 margin-t30">Desa Baros</h2>
                    <p class="post-subtitle" style="text-align: justify">merupakan Desa yang cukup luas sebelum pada Tahun 1983 dimekarkan dengan wilayah Desa Mekarjaya yang pada mulanya merupakan bagian dari Kecamatan Pameungpeuk Kewadanaan Banjaran Kabupaten Bandung. Desa Baros terdiri dari tanah pertanian dan daratan. Luas tanah pertanian 380,7 Ha., luas wilayah desa 419,7 Ha.</p>
                    {{-- <div class="margin-t30">
                        <a href="#" class="read-more-v3">Lihat Selengkapnya</a>
                    </div> --}}
                </div>
                <!-- /col-lg-6 -->	
            </div>
            <!-- /row -->	
            <!-- /row -->	
        </div>
        <!-- /container -->	
    </div>
    {{-- /section 2 --}}



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
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION KEGIATAN -->
    {{-- section LIST POTENSI --}}
    <div id="home-section-1-2" class="section-holder home-section-1-2 parallax" style="background-image:url('{{ asset('frontend/images/background10.png') }}');">
        <div class="container">
            <div class="row">
                <h2 class="display-4 alignc" style="margin-bottom: 30px">Potensi Desa Baros</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-3 mobile-margin-t30">
                    {{-- <div class="icon-svg icon-svg-border margin-b15">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512  512" xml:space="preserve" class="icon-1">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path d="m69.41 10.06c0-3.81-3.19-6.91-7.11-6.91h-50.12c-3.92 0-7.11 3.1-7.11 6.91v4.89c0 .45.15.86.4 1.2l10.5 19.84-9.51 19.72c-.47.38-.77.97-.77 1.62v3.89.02c0 3.81 3.13 6.91 6.98 6.91h49.16c3.85 0 6.98-3.1 6.98-6.91v-.02-3.89c0-.71-.35-1.33-.87-1.71l-9.42-19.63 10.56-19.92c.21-.32.34-.71.34-1.12zm-63.34 0c0-3.26 2.74-5.91 6.11-5.91h50.12c3.37 0 6.11 2.65 6.11 5.91v1.06h-62.34zm23.45 26.54c-3.19 2.22-5.33 5.77-5.73 9.74h-2.91c-.28 0-.5.22-.5.5v3.01c0 .28.22.5.5.5h32.69c.28 0 .5-.22.5-.5v-3.01c0-.28-.22-.5-.5-.5h-2.91c-.4-3.98-2.54-7.52-5.73-9.74h12.77l8.94 18.63h-58.85l9-18.63zm23.56 10.75v2.01h-31.7v-2.01zm-24.79-1c.67-4.36 4.48-7.71 8.94-7.71s8.28 3.35 8.95 7.71zm29.3-10.75h-14.34c-.6-.3-1.23-.56-1.88-.77v-1.29c0-.28-.22-.5-.5-.5s-.5.22-.5.5v1.66c0 .22.15.42.36.48 4.86 1.41 8.38 5.66 8.93 10.66h-2.48c-.68-4.92-4.96-8.71-9.96-8.71s-9.27 3.79-9.95 8.71h-2.47c.54-5 4.06-9.25 8.93-10.66.21-.06.36-.26.36-.48v-1.66c0-.28-.22-.5-.5-.5s-.5.22-.5.5v1.29c-.65.21-1.28.47-1.88.77h-14.31l-9.85-18.6h60.4zm4.24 31.55h-49.17c-3.13 0-5.7-2.39-5.96-5.43h61.08c-.24 3.04-2.82 5.43-5.95 5.43zm5.98-6.43h-61.13v-3.39c0-.6.48-1.1 1.06-1.1h59c.59 0 1.06.49 1.06 1.1v3.39zm.6-45.77c0 .58-.49 1.06-1.09 1.06h-60.15c-.61 0-1.1-.48-1.1-1.06v-2.83h62.34z"></path>
                                    <path d="m42.35 22.47c-.09-.14-.25-.22-.41-.22h-9.44c-.17 0-.32.08-.41.22l-2.37 3.48c-.01.01-.22.35.02.6l7.08 8.73c.31.33.68.12.78 0l7.09-8.73c.01-.01.24-.2.03-.6zm-1.33.79-1.43 2.09-1.43-2.09zm-2.38 2.48h-2.85l1.43-2.09zm-2.37-2.48-1.41 2.07-1.41-2.07zm-3.77.38 1.43 2.09h-2.85zm-1.32 3.1h3.28l1.9 6.56zm6.03 6.32-1.72-6.33h3.44zm1.01.13 1.75-6.45h3.28zm2.31-7.45 1.41-2.07 1.41 2.07z"></path>
                                </g>
                            </g>
                        </svg>
                    </div> --}}
                    <!-- /icon-svg -->
                    <h5 class="display-7 margin-b10"><b>Sumber Daya Manusia</b></h5>
                    <p class="display-8" style="text-align: justify">Potensi sumber daya manusia meliputi jumlah penduduk yang banyak dan jumlah tenaga kerja yang banyak harus didukung dengan keterampilan dan keahlian.</p>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-3 mobile-margin-b30">
                    {{-- <div class="icon-svg icon-svg-border margin-b15">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class="icon-2">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path d="m62.75 9.07h-51.5c-3.72 0-6.75 3.03-6.75 6.76v42.34c0 3.73 3.03 6.76 6.75 6.76h51.5c3.72 0 6.75-3.03 6.75-6.76v-42.34c0-3.73-3.03-6.76-6.75-6.76zm5.75 49.1c0 3.18-2.58 5.76-5.75 5.76h-51.5c-3.17 0-5.75-2.58-5.75-5.76v-42.34c0-3.18 2.58-5.76 5.75-5.76h51.5c3.17 0 5.75 2.58 5.75 5.76z" class=""></path>
                                    <path d="m62.75 14.07h-51.5c-.96 0-1.75.79-1.75 1.76v42.34c0 .97.79 1.76 1.75 1.76h51.5c.96 0 1.75-.79 1.75-1.76v-42.34c0-.97-.79-1.76-1.75-1.76zm.75 44.1c0 .42-.34.76-.75.76h-51.5c-.41 0-.75-.34-.75-.76v-42.34c0-.42.34-.76.75-.76h51.5c.41 0 .75.34.75.76z" class=""></path>
                                    <path d="m23.16 18.36h-5.3c-1.96 0-3.55 1.59-3.55 3.55v5.3c0 .28.22.5.5.5s.5-.22.5-.5v-5.3c0-1.41 1.15-2.55 2.55-2.55h5.3c.28 0 .5-.22.5-.5s-.22-.5-.5-.5z" class=""></path>
                                    <path d="m56.14 18.36h-5.3c-.28 0-.5.22-.5.5s.22.5.5.5h5.3c1.41 0 2.55 1.15 2.55 2.55v5.3c0 .28.22.5.5.5s.5-.22.5-.5v-5.3c0-1.96-1.59-3.55-3.55-3.55z" class=""></path>
                                    <path d="m59.19 46.29c-.28 0-.5.22-.5.5v5.3c0 1.41-1.15 2.55-2.55 2.55h-5.3c-.28 0-.5.22-.5.5s.22.5.5.5h5.3c1.96 0 3.55-1.59 3.55-3.55v-5.3c0-.28-.22-.5-.5-.5z" class=""></path>
                                    <path d="m23.16 54.64h-5.3c-1.41 0-2.55-1.15-2.55-2.55v-5.3c0-.28-.22-.5-.5-.5s-.5.22-.5.5v5.3c0 1.96 1.59 3.55 3.55 3.55h5.3c.28 0 .5-.22.5-.5s-.22-.5-.5-.5z" class=""></path>
                                    <path d="m45.89 43.26v-14.2c0-2.37-.93-4.6-2.6-6.28s-3.9-2.61-6.29-2.61c-4.9 0-8.89 3.99-8.89 8.89v14.19c-1.88 1.72-3.05 4.19-3.05 6.95v3.12c0 .28.22.5.5.5h22.87c.28 0 .5-.22.5-.5v-3.12c0-2.75-1.16-5.21-3.04-6.94zm-16.78-14.2c0-4.35 3.54-7.89 7.89-7.89 2.11 0 4.09.82 5.58 2.31s2.31 3.47 2.31 5.58v13.39c-1.31-.91-2.87-1.49-4.56-1.63v-.02c1.78-1.12 2.97-3.09 2.97-5.34v-3.18c0-.26-.2-.48-.46-.5-2.96-.24-5.65-1.44-8.22-3.68-.12-.11-.29-.15-.45-.11s-.29.15-.35.3c-.74 1.89-1.66 3.04-2.83 3.52-.19.08-.31.26-.31.46v3.18c0 2.25 1.19 4.22 2.97 5.34v.02c-1.69.15-3.24.72-4.55 1.63v-13.38zm7.89 11.71c-2.92 0-5.3-2.38-5.3-5.3v-2.87c1.14-.58 2.06-1.67 2.8-3.3 2.42 1.97 5.05 3.12 7.81 3.44v2.72c0 2.93-2.38 5.31-5.31 5.31zm-2.34.54c.72.29 1.51.46 2.34.46s1.61-.16 2.34-.45v.43c0 1.29-1.05 2.34-2.33 2.34-.63 0-1.21-.24-1.66-.69s-.69-1.03-.69-1.66zm13.27 11.52h-21.86v-2.63c0-2.54 1.11-4.81 2.88-6.36.01-.01.02-.02.03-.03 1.28-1.1 2.9-1.82 4.69-1.99.02.86.36 1.67.97 2.28.63.63 1.47.98 2.36.98 1.81 0 3.28-1.45 3.33-3.26 1.79.17 3.4.88 4.68 1.98.03.03.06.06.09.08 1.74 1.54 2.83 3.8 2.83 6.31z" class=""></path>
                                    <path d="m38.58 37.61c-.15.13-1.46 1.26-2.96-.01-.21-.18-.53-.15-.71.06s-.15.53.06.71c.73.62 1.46.84 2.12.84.93 0 1.72-.44 2.17-.85.2-.19.22-.5.03-.71-.19-.22-.5-.23-.71-.04z" class=""></path>
                                    <path d="m35.82 33.96c.16-.23.1-.54-.12-.7-.34-.24-1.11-.51-1.84 0-.23.16-.28.47-.12.7.1.14.25.21.41.21.1 0 .2-.03.29-.09.33-.23.66-.03.7 0 .21.16.52.11.68-.12z" class=""></path>
                                    <path d="m38.31 33.27c-.23.16-.28.47-.12.7.1.14.25.21.41.21.1 0 .2-.03.29-.09.33-.23.66-.03.7 0 .23.15.53.1.69-.13s.1-.54-.12-.7c-.35-.23-1.12-.5-1.85.01z" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div> --}}
                    <!-- /icon-svg -->
                    <h5 class="display-7 margin-b10">Sumber Daya Alam</h5>
                    <p class="display-8" style="text-align: justify">Salah satu Potensi sumber daya alam di desa Baros adalah di bidang Pertanian dan perkebunan dan Holtikultura.</p>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-3 mobile-margin-b30">
                    {{-- <div class="icon-svg icon-svg-border margin-b15">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class="icon-3">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path d="m51.93 13.38.78-.78c.74-.8.39-1.75-.02-2.18-.6-.59-1.58-.59-2.18 0l-.76.76c-9.18-8.18-22.76-9.01-32.89-1.78-.4.29-.59.79-.5 1.27.09.47.44.83.9.94.97.23 1.89.74 2.64 1.5 1.27 1.27 1.86 3 1.53 4.52-.09.42.03.85.33 1.15v.01c.01.01.03.02.05.03.29.26.69.38 1.1.29 1.52-.33 3.25.26 4.52 1.53s1.86 3 1.54 4.52c-.09.42.03.85.33 1.15.09.09.19.16.3.21h.01c.25.13.54.17.83.11.88-.19 1.84-.06 2.74.33l-4.97 4.97c-.09.09-.15.22-.15.35v2.92h-.07c-.41 0-.75.23-.95.55l-2.19-2.19.74-.73s0 0 .01-.01c.52-.54.52-1.37 0-1.91l-4.06-4.06c-.51-.51-1.4-.51-1.91 0l-3.02 3.02c-.8.81-1.24 1.87-1.24 2.98s.44 2.17 1.24 2.98c.83.82 1.91 1.23 2.99 1.23.89 0 1.77-.29 2.51-.85l4.73 4.79v1.1c0 .63.51 1.13 1.13 1.13h.07v8.22h-3.51c-1.05 0-1.9.85-1.9 1.9 0 1.04.85 1.89 1.9 1.89h.17l-6.27 13.57c-.07.16-.06.34.03.48s.25.23.42.23h4.36c.2 0 .37-.11.45-.29l4.35-9.4v9.19c0 .28.22.5.5.5h3.96c.28 0 .5-.22.5-.5v-9.19l4.35 9.4c.08.18.26.29.45.29h4.36c.17 0 .33-.09.42-.23s.1-.32.03-.48l-6.27-13.57h.17c1.05 0 1.9-.85 1.9-1.89 0-1.05-.85-1.9-1.9-1.9h-3.51v-8.22h.07c.63 0 1.13-.51 1.13-1.13v-5.74c0-.63-.51-1.13-1.13-1.13h-.07v-1.07l3.41-3.41c.17.66.2 1.33.06 1.96-.06.29-.02.57.1.82 0 .01.01.02.01.03.06.11.12.21.21.29.3.3.72.42 1.15.33 1.52-.33 3.25.26 4.52 1.53s1.86 3 1.54 4.52c-.08.39.02.78.27 1.07.02.02.03.05.05.07h.01c.3.3.72.42 1.15.33 1.52-.33 3.25.26 4.52 1.53.76.76 1.28 1.67 1.5 2.64.11.46.47.8.94.9.08.02.17.02.25.02.4 0 .79-.19 1.02-.52 7.25-10.11 6.42-23.69-1.78-32.89zm-14.37 18.71c.07-1.62-.61-3.33-1.91-4.62-1.29-1.29-3-1.97-4.62-1.9 10.6-10.13 17.9-13.87 19.15-12.63 1.24 1.26-2.5 8.56-12.62 19.15zm13.65-20.95c.21-.21.56-.21.77-.01 0 0 .36.4.01.78l-.73.73c-.13-.13-.24-.27-.37-.4s-.27-.24-.41-.37zm-30.61 1.28c-.89-.88-1.96-1.49-3.12-1.76-.1-.02-.13-.1-.15-.16-.02-.08 0-.2.1-.26 8.56-6.12 19.68-6.24 28.25-.85-6.51-1.65-15.53 1.31-23.23 8.13.25-1.76-.43-3.68-1.85-5.1zm7.52 7.53c-1.33-1.33-3.1-2.02-4.77-1.9 8.9-7.75 19.48-10.28 25.44-6.22-3.98.68-11.8 6.61-18.84 13.39.33-1.8-.36-3.8-1.83-5.27zm-10.83 15.2c-.61-.62-.95-1.43-.95-2.28s.34-1.66.94-2.28l3.02-3.02c.07-.07.15-.1.25-.1.09 0 .18.04.25.1l4.05 4.06c.14.15.14.36 0 .51l-3.02 3.01c-1.24 1.25-3.28 1.25-4.54 0zm5.54.43 1.29-1.29 2.72 2.72v2.58zm.1 32.94h-3.26l6.14-13.28h3.26zm9.08 0h-2.96v-10.86l1.12-2.42h.72l1.12 2.42zm9.37 0h-3.26l-6.14-13.28h3.26zm-3.97-15.17c0 .49-.4.89-.9.89h-11.97c-.5 0-.9-.4-.9-.89s.4-.9.9-.9h11.98c.49 0 .89.41.89.9zm-5.4-1.9h-2.96v-8.22h2.96zm1.2-15.09v5.74c0 .07-.06.13-.13.13h-5.1c-.07 0-.13-.06-.13-.13v-5.74c0-.07.06-.13.13-.13h5.1c.07-.01.13.05.13.13zm-1.06-2.77c-.05.05-.14.13-.15.35v1.28h-2.96v-2.71l5.03-5.03c.3.21.6.44.86.7.46.46.83.98 1.1 1.52zm11.03 1.41c-1.46-1.46-3.46-2.15-5.27-1.82 6.78-7.05 12.7-14.87 13.39-18.85 4.06 5.95 1.53 16.53-6.22 25.44.12-1.66-.57-3.44-1.9-4.77zm9.73 10.69c-.07.1-.18.12-.27.1-.06-.01-.14-.05-.16-.14-.27-1.15-.88-2.23-1.77-3.12-1.23-1.23-2.83-1.91-4.38-1.91-.24 0-.47.02-.71.06 6.81-7.71 9.78-16.73 8.12-23.24 5.4 8.58 5.28 19.7-.83 28.25z" class=""></path>
                                    <path d="m22.4 33.17c.2-.2.2-.51 0-.71l-2.56-2.56c-.2-.2-.51-.2-.71 0s-.2.51 0 .71l2.56 2.56c.1.1.23.15.35.15s.26-.05.36-.15z" class=""></path>
                                    <path d="m18.34 31.41c-.2-.2-.51-.2-.71 0s-.2.51 0 .71l2.56 2.56c.1.1.23.15.35.15s.26-.05.35-.15c.2-.2.2-.51 0-.71z" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div> --}}
                    <!-- /icon-svg -->
                    <h5 class="display-7 margin-b10">Sumber Daya Sosial dan Budaya</h5>
                    <p class="display-8" style="text-align: justify">Sumber daya social budaya di desa Baros adalah Sebagai modal dasar pembangunan serta kualitas sumberdaya manusia dan menjadi prioritas dalam rangka peningkatan produktivitas suatu wilayah.</p>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-6 col-lg-3">
                    {{-- <div class="icon-svg icon-svg-border margin-b15">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class="icon-4">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <path d="m50.05 65.59c.36.11.73.16 1.1.16.64 0 1.28-.16 1.86-.48.91-.5 1.57-1.33 1.86-2.32.29-1 .17-2.05-.33-2.96-1.03-1.87-3.4-2.56-5.28-1.53-1.87 1.03-2.56 3.4-1.53 5.27.5.91 1.32 1.57 2.32 1.86zm-.31-6.25c.44-.24.92-.36 1.39-.36 1.02 0 2.01.54 2.53 1.49.37.67.46 1.46.24 2.2s-.71 1.35-1.38 1.73c-.67.37-1.45.46-2.19.24s-1.35-.71-1.73-1.38c-.76-1.4-.25-3.16 1.14-3.92z" class=""></path>
                                    <path d="m51.74 11h3.55c.6 0 1.08-.49 1.08-1.08v-2.07c0-.6-.49-1.08-1.08-1.08h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.48 1.09 1.08 1.09zm-.08-3.15c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08v2.06c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08z" class=""></path>
                                    <path d="m43.48 11h3.55c.6 0 1.08-.49 1.08-1.08v-2.07c0-.6-.49-1.08-1.08-1.08h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.48 1.09 1.08 1.09zm-.08-3.15c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08v2.06c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08z" class=""></path>
                                    <path d="m35.22 11h3.55c.6 0 1.08-.49 1.08-1.08v-2.07c0-.6-.49-1.08-1.08-1.08h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.49 1.09 1.08 1.09zm-.08-3.15c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08v2.06c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08z" class=""></path>
                                    <path d="m26.97 11h3.55c.6 0 1.08-.49 1.08-1.08v-2.07c0-.6-.49-1.08-1.08-1.08h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c-.01.6.48 1.09 1.08 1.09zm-.09-3.15c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08v2.06c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08z" class=""></path>
                                    <path d="m22.25 38.51h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.49 1.08 1.08 1.08h3.55c.6 0 1.08-.49 1.08-1.08v-2.06c.01-.6-.48-1.08-1.08-1.08zm.09 3.14c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08v-2.06c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08z" class=""></path>
                                    <path d="m58.63 4.5h-43.27c-1.96 0-3.56 1.6-3.56 3.57v33.37c0 1.97 1.6 3.57 3.56 3.57h17.85l-1.58 2.88c-.4.74-.5 1.58-.26 2.39.23.8.76 1.46 1.49 1.85l.02.01-2.42 4.4c-.52-.53-1.12-.99-1.79-1.36-3.69-2.03-8.34-.68-10.37 3-2.03 3.69-.68 8.35 3.01 10.38 1.14.63 2.39.94 3.66.94.72 0 1.44-.1 2.15-.31 1.96-.57 3.58-1.87 4.56-3.65l6.38-11.6 6.35 11.55c.01.02.02.04.03.05.98 1.79 2.6 3.08 4.56 3.65.71.21 1.43.31 2.15.31 1.27 0 2.52-.32 3.66-.94 3.69-2.03 5.04-6.68 3.01-10.38-2.03-3.69-6.68-5.03-10.37-3-.67.37-1.27.83-1.79 1.36l-2.42-4.4.02-.01c.73-.4 1.26-1.05 1.49-1.85.24-.81.14-1.65-.26-2.39l-1.55-2.82.03-.06h15.65c1.97 0 3.57-1.6 3.57-3.57v-33.37c.01-1.97-1.6-3.57-3.56-3.57zm-45.83 8.77h7.09c.85 0 1.54.69 1.54 1.54v19.87c0 .85-.69 1.54-1.54 1.54h-7.09zm2.56 30.74c-1.41 0-2.56-1.15-2.56-2.57v-4.21h7.09c1.4 0 2.54-1.14 2.54-2.54v-19.87c0-1.4-1.14-2.54-2.54-2.54h-7.09v-4.2c0-1.42 1.15-2.57 2.56-2.57h43.26c1.42 0 2.57 1.15 2.57 2.57v4.2h-7.1c-1.4 0-2.54 1.14-2.54 2.54v9.99c-.02-.07-.03-.14-.05-.21-.32-1.12-.91-2.13-1.67-3.01v-6.77c0-1.41-1.14-2.55-2.54-2.55h-20.59c-1.4 0-2.54 1.14-2.54 2.55v19.87c0 1.4 1.14 2.54 2.54 2.54h10.8l-.7 1.28h-1.57c-.6 0-1.09.48-1.09 1.08v2.06c0 .36.19.66.46.86l-.82 1.5zm45.83-30.74v22.96h-7.09c-.85 0-1.54-.69-1.54-1.54v-19.87c0-.85.69-1.54 1.54-1.54h7.09zm-26.05 28.26v-1.94c0-.04.04-.08.09-.08h1.02zm2.91-5.3h-11.35c-.85 0-1.54-.69-1.54-1.54v-19.87c0-.85.69-1.55 1.54-1.55h20.6c.85 0 1.54.7 1.54 1.55v5.8c-.16-.13-.3-.27-.47-.39-.28-.2-.63-.27-.97-.19-.33.08-.61.29-.77.59zm-4.05 15.95c.06-.12.08-.25.04-.38s-.12-.24-.24-.3l-.46-.25c-.49-.27-.85-.71-1.01-1.25-.16-.55-.1-1.12.18-1.63l14.99-27.26c.03-.06.08-.08.12-.09.03-.01.1-.01.17.04 1.33.92 2.31 2.28 2.76 3.83.52 1.8.31 3.71-.59 5.36l-17.34 31.51c-.01-.68-.11-1.36-.3-2.03-.25-.87-.65-1.66-1.17-2.37zm12-12.67h1.03c.05 0 .09.04.09.08v2.06c0 .05-.05.09-.09.09h-2.25zm2.84-5.16v.34c0 .65-.4 1.2-.97 1.43zm-22 33.88c-1.7.49-3.49.3-5.04-.55-3.21-1.76-4.38-5.81-2.62-9.02 1.21-2.19 3.48-3.43 5.82-3.43 1.08 0 2.18.26 3.19.82 1.55.85 2.68 2.26 3.17 3.96.5 1.7.3 3.49-.56 5.04-.85 1.56-2.25 2.69-3.96 3.18zm21.09-12.18c1.01-.56 2.11-.82 3.19-.82 2.34 0 4.62 1.24 5.82 3.43 1.76 3.21.59 7.25-2.62 9.02-1.55.85-3.34 1.05-5.04.55s-3.11-1.62-3.97-3.18c-.85-1.55-1.05-3.34-.56-5.04.51-1.7 1.63-3.11 3.18-3.96zm-4.31-7.68c.28.5.34 1.08.18 1.63-.16.54-.52.99-1.01 1.25l-.46.25c-.12.06-.2.17-.24.3s-.02.26.04.38l2.85 5.18c-.52.71-.92 1.5-1.17 2.37-.19.67-.29 1.34-.3 2.02l-4.87-8.85 3.74-6.8zm15.01-4.36h-15.1l.7-1.27h2.8c.6 0 1.09-.49 1.09-1.09v-2.06c0-.6-.49-1.08-1.09-1.08h-.48l.7-1.28h.04c1.4 0 2.54-1.14 2.54-2.54v-2.15l1-1.82c.32-.59.55-1.2.72-1.83v5.8c0 1.4 1.14 2.54 2.54 2.54h7.1v4.21c.01 1.42-1.15 2.57-2.56 2.57z" class=""></path>
                                    <path d="m55.29 38.51h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.49 1.08 1.08 1.08h3.55c.6 0 1.08-.49 1.08-1.08v-2.06c0-.6-.49-1.08-1.08-1.08zm.08 3.14c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08v-2.06c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08z" class=""></path>
                                    <path d="m30.51 38.51h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.49 1.08 1.08 1.08h3.55c.6 0 1.08-.49 1.08-1.08v-2.06c.01-.6-.48-1.08-1.08-1.08zm.09 3.14c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08v-2.06c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08z" class=""></path>
                                    <path d="m22.25 6.77h-3.55c-.6 0-1.08.49-1.08 1.08v2.06c0 .6.49 1.08 1.08 1.08h3.55c.6 0 1.08-.49 1.08-1.08v-2.06c.01-.59-.48-1.08-1.08-1.08zm.09 3.15c0 .05-.04.08-.08.08h-3.55c-.05 0-.08-.04-.08-.08v-2.07c0-.05.04-.08.08-.08h3.55c.05 0 .08.04.08.08z" class=""></path>
                                    <path d="m26.87 58.46c-1.88-1.03-4.25-.35-5.28 1.53-.5.91-.62 1.96-.33 2.96s.95 1.82 1.86 2.32c.58.32 1.21.48 1.86.48.37 0 .73-.05 1.1-.16 1-.29 1.82-.95 2.32-1.86 1.03-1.87.34-4.24-1.53-5.27zm.65 4.79c-.37.68-.98 1.17-1.73 1.38-.74.22-1.52.13-2.19-.24-.68-.37-1.17-.98-1.38-1.73-.22-.74-.13-1.52.24-2.2.52-.95 1.51-1.49 2.53-1.49.47 0 .95.12 1.39.36 1.4.77 1.91 2.53 1.14 3.92z" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div> --}}
                    <!-- /icon-svg -->
                    <h5 class="display-7 margin-b10">Kelembagaan</h5>
                    <p class="display-8" style="text-align: justify">Lembaga atau Institusi adalah wadah untuk mengemban tugas dan fungsi tertentu dalam rangka mencapai tujuan tertentu.</p>
                </div>
                <!-- /col-md-6 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    {{-- /section LIST POTENSI --}}
			<!-- SECTION PRODUCT -->
			<div id="home-section-1-2" class="section-holder home-section-1-2"  style="background-image:url('{{ asset('frontend/images/background23.png') }}');">
				<div class="container">
					<div class="row align-items-center margin-t200">
						<div class="col-lg-6">
							<h2 class="display-4 margin-t50">Produk Desa</h2>
						</div>
						<!-- /col-lg-6 -->	
					</div>
					<!-- /row -->	
					<div class="row margin-b80">
						<div class="col-md-6 col-lg-3 margin-b50">
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
						<!-- /col-lg-3 -->
						<div class="col-md-6 col-lg-3 margin-b50">
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
                        
						<!-- /col-lg-3 -->
						<div class="col-md-6 col-lg-3 margin-b50">
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
						<!-- /col-lg-3 -->
                        <div class="col-md-6 col-lg-3 margin-b50">
                            <div class="card">
                                <div class="card-header p-0">
                                    <a href="/product">
                                        <img class="img-fluid w-100 radius10-top" src="{{ asset('frontend/images/produk/11.png')}}" alt="Ranginang" />
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title margin-b10">Ladu Ketan</h5>
                                    <div class="card-text team-position">Rp. 10.000</div>
                                    <div class="d-flex justify-content-center align-items-center mt-3">
                                        <input type="number" min="1" value="1" class="form-control quantity-input" />
                                        <a href="#" class="btn btn-primary buy-button">Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- /col-lg-3 -->
					</div>
					<!-- /row -->	
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION PRODUCT-->	

       <script>
        window.addEventListener('DOMContentLoaded', function(){
            document.querySelector('.swiper-mt').classList.remove('swiper-fade')
        })
       </script>    
    
@endsection