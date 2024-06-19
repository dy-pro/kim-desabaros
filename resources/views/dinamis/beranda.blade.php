@extends('layouts.master')

@section('content')
  <!-- HOME SLIDER -->
  <div class="swiper-mt">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more white-btn">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/background4.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more white-btn">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image: url('{{ asset('frontend/images/background5.jpeg') }}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <span class="post-subtitle">Kelompok Informasi Masyarakat</span> 
                    <h1 class="display-2">Desa Baros</h1>
                    <a href="#" class="read-more white-btn-v2">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
    </div>
    <!-- /swiper-wrapper -->
    <div class="swiper-mt-button-prev" tabindex="0" role="button" aria-label="Previous slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
            <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
                c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
                S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
        </svg>
    </div>
    <!-- /swiper-mt-button-prev -->
    <div class="swiper-mt-button-next" tabindex="0" role="button" aria-label="Next slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
            <path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
                c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
                S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
        </svg>
    </div>
    <!-- /swiper-mt-button-next -->
</div>
	<!-- /HOME SLIDER -->
	<!-- WRAP CONTENT -->
	<div id="wrap-content" class="page-content custom-page-template">
		<!-- SECTION 1 -->
		<div id="home-section-1-1" class="section-holder home-section-1-1"
			style="background-image: url(images/home/home2.png);" alt="Prewedding">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
						<h3 class="display-4 margin-b30">Kegiatan Desa</h3>
						<div class="margin-b50">
							<p style="text-align: justify;">Selamat datang di halaman kegiatan Desa Baros, Kabupaten Bandung! Di sini, kami menampilkan berbagai kegiatan yang mencerminkan semangat kebersamaan dan gotong royong masyarakat Desa Baros. Mulai dari acara budaya, kegiatan sosial, hingga program pembangunan desa, semua terlibat aktif untuk memajukan kesejahteraan dan kualitas hidup warga desa</p>



							<!-- /row -->
						</div>
						
					</div>
                    <div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
                            <div class="price-box price-box-middle black-text">
                            <div class=""
                            <div class="margin-b30"></div>
                            <ul class="price-features">
                                
                            </ul>
                            <a class="read-more btn100" href="pricing-plans.html">Choose</a>
                        </div>
						
					</div>
                    <div class="col-lg-4 margin-bm20">
						<!-- <div class="el-smalltitle">Our Story</div> -->
						<div class="price-box">
                            <h3 class="margin-b10 black-text"></h3>
                            <div class="margin-b30"></div>
                            <ul class="price-features">
                               
                            </ul>
                            <a class="read-more btn100" href="pricing-plans.html">Choose</a>
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
	<!-- /SECTION 2 -->
	<div id="home-section-1-2" class="section-holder home-section-1-2" style="background-color: rgba(35, 35, 35, 0.8)">
		<div class="container mt-4 my-4">
			<div class="row">
				<div class="col-lg-12">

				</div>
				<!-- /col-lg-12 -->
			</div>

			<!-- /row -->
			<div class="portfolio-masonry-container">
				<div class="portfolio-masonry portfolio-layout-masonry">
					<div class="item-portfolio item-5cols wedding text-center">
						<div class="post"><img src="
						images//why/1.png" class="img-fluid" alt=" "></div>
						<div class="item-text-holder">
							<h2 class="article-title" style="text-align: center; font-size: calc(0.9rem + 1vw)">Timeless
								works of art</h2>
							<ul class="portfolio-categ">
								<li>We capture each moment with care and precision, transforming them into cherished
									works of art that will be treasured for years to come.</li>
							</ul>
						</div>
					</div>
					<!-- /item-portfolio -->
					<div class="item-portfolio item-5cols wedding  text-center">
						<div class="post"><img src="images//why/2.png" class="img-fluid" alt=" "></div>
						<div class="item-text-holder">
							<h2 class="article-title" style="text-align: center; font-size: calc(0.9rem + 1vw)">
								Customizable pricing</h2>
							<ul class="portfolio-categ">
								<li>We strive to offer a personalized and affordable experience to all our clients.</li>
							</ul>
						</div>

					</div>
					<!-- /item-portfolio -->
					<div class="item-portfolio item-5cols wedding text-center">
						<div class="post"><img src="images//why/3.png" class="img-fluid" alt=" "></div>
						<div class="item-text-holder">
							<h2 class="article-title" style="text-align: center; 	font-size: calc(0.9rem + 1vw)">Online
								proofing</h2>
							<ul class="portfolio-categ">
								<li>Access photos easily, quickly, and save time and effort. Get the experience you want
									and need</li>
							</ul>
						</div>
					</div>
					<!-- /item-portfolio -->
					<div class="item-portfolio item-5cols wedding text-center">
						<div class="post"><img src="images//why/4.png" class="img-fluid" alt=" "></div>
						<div class="item-text-holder">
							<h2 class="article-title" style="text-align: center; 	font-size: calc(0.9rem + 1vw)">Free
								consultation</h2>
							<ul class="portfolio-categ">
								<li>Free consultation to help clients choose the right service
								</li>
							</ul>
						</div>
					</div>
					<!-- /item-portfolio -->
					<div class="item-portfolio item-5cols wedding text-center">
						<div class="post"><img src="images//why/5.png" class="img-fluid" alt=" "></div>
						<div class="item-text-holder">
							<h2 class="article-title" style="text-align: center; 	font-size: calc(0.8rem + 1vw)">Premium
								print & photo album</h2>
							<ul class="portfolio-categ">
								<li>This service provides premium quality photo prints and albums with high-quality
									paper, binding materials, and attractive designs. </li>
							</ul>
						</div>
					</div>
					<!-- /item-portfolio -->

				</div>
				<!-- /portfolio-masonry -->
			</div>
			<!-- /portfolio-masonry-container -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 2 -->
	<!-- /SECTION 3 -->
	<div id="home-section-1-3" class="section-holder home-section-1-3"
		style="background-image: url(images/pages/portfolio.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center margin-b30">
					<p style="font-size: 1rem;">SIGNATURE WORK</p>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="display-3 margin-b50">PORTFOLIO</h2>
				</div>

			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="portfolio-slider gallery-slider-holder">
						<div class="swiper-wrapper">

							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/1.png" class="img-fluid" alt=" "
										width="750" height="750"> </a></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/2.png" class="img-fluid" alt=" "
										width="750" height="750"> </a></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/3.png" class="img-fluid" alt=" "
										width="750" height="750"> </a></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/4.png" class="img-fluid" alt=" "
										width="750" height="750"> </a></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/5.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/6.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/7.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/8.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/9.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
							<div class="swiper-slide item-slider">
								<div class="post-image item-grid-image"><img loading="lazy"
										src="images/portfolio/featured-images/10.png" class="img-fluid" alt=" "
										width="750" height="750"></div>
							</div>
							<!-- /item-slider -->
						</div>
						<!-- /swiper-wrapper -->
						<div class="swiper-mt-button-prev portfolio-slider-btn-prev">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
								style="enable-background:new 0 0 55 55;" xml:space="preserve">
								<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
								<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
							</svg>
						</div>
						<div class="swiper-mt-button-next portfolio-slider-btn-next">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
								style="enable-background:new 0 0 55 55;" xml:space="preserve">
								<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
										c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
								<path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
										S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
							</svg>
						</div>
					</div>
					<!-- /portfolio-slider -->
				</div>
				<!-- /col-lg-12 -->
			</div>
			<!-- /row -->
			<div class="row">
				<div class="col-md-12 text-center margin-b50">
				</div>

			</div>
			<!-- /row kosong -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 3 -->
	<!-- SECTION 4 -->
	<div id="home-section-1-4" class="section-holder home-section-1-4"
		style="background-image: url(images/offer/bng.png);">
		<div class="margin-wrapper">
			<div class="container">
				<div class="col-md-12 text-center">
					<h2 class="offer margin-b30">Our Offerings</h2>
				</div>
				<!-- /row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="portfolio-masonry-container">
							<div class="portfolio-masonry portfolio-layout-masonry">
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/engagement.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">Engagement</h5>
									<!-- <p style="text-align: justify;">The aim of engagement shoots is to produce creative
										and
										artistic
										photographs of the couple that showcase their happiness, intimacy and love for
										one
										another
									</p> -->
								</div>
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/sangjit.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">Sangjit</h5>
									<!-- <p style="text-align: justify;">The aim of sangjit shoots is to produce creative and
										artistic
										photographs of the couple that showcase their happiness, intimacy and love for
										one
										another
									</p> -->
								</div>
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/prewed.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">Prewedding</h5>
									<!-- <p style="text-align: justify;">Prewedding is a popular and essential photography
										service for
										couples who want to create beautiful memories before their wedding day</p> -->
								</div>
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/inter.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">International Wedding</h5>
									<!-- <p style="text-align: justify;">This service is usually carried out by
											photographers and
											videographers who are experts in taking pictures and recording videos from
											weddings
											with
											good quality</p> -->
								</div>
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/cerem.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">Traditional ceremony</h5>
									<!-- <p style="text-align: justify;">Traditional Ceremony services are very important for
										people who
										wish to commemorate important moments in their lives, whether in a particular
										cultural or
										religious context.</p> -->
								</div>
								<!-- /item-portfolio -->
								<div class="item-portfolio item-3cols wedding">
									<div class="post-image item-grid-image icon-svg icon-svg-border">
										<img src="images/offer/tradi.png" class="img-fluid">
									</div>
									<!-- /icon-svg -->
									<h5 class="white margin-b10">Traditional Wedding</h5>
									<!-- <p style="text-align: justify;">This service is usually carried out by
											photographers
											and videographers
											who are experts in taking pictures and recording videos from weddings with
											good
											quality</p> -->
								</div>




								<!-- /portfolio-masonry -->
							</div>
							<!-- /portfolio-masonry-container -->
						</div>
						<!-- /col-lg-12 -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>

		</div>
	</div>
	<!-- /SECTION 4 -->
	<!-- /WRAP CONTENT -->


	<!-- SECTION 5 -->
	<div id="home-section-1-5" class="section-holder home-section-1-5 parallax"
		style="background-image:url(images/pages/img-about.png);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="margin-percentr40">
						<div class="testimonial-white">
							<div class="testimonial-quote">
								<svg version="1.1" class="icon-quote2" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
									style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
										<h4 class="testimonial-desc">Puas banget sama hasil-hasilnya huhu. Awalnya aku
											sama paksu bingung mau pilih vendor photography mana, tapi kenapa akhirnya
											aku pilih Nesnumoto karena tone sama angle pengambilan foto2nya menurutku
											bagus-bagus, jadi akhirnya aku pilih nesnumoto. Dan hasilnya sesuai
											ekspektasi, dari mulai kulitas poto, albumnya, admin, photographernyanya
											semua friendly.</h4>
										<div class="testimonial-client">Nadila Alifa</div>
										<div class="testimonial-company">Bride</div>
									</div>
									<!-- /testimonial-info -->
									<div class="swiper-slide testimonial-info">
										<h4 class="testimonial-desc">Thank you nesnumoto sudah berkenan jadi photography
											di hari besar kami, team nesnu sudah berkenan membantu kami, bahagia sekali
											kami,
											nesnumoto luar biasa dan gaperlu di ragukan lagi masyaAllah, keren sekali..
											semoga segala kebaikan team nesnumoto dibalas oleh Allah SWT, sehat, panjang
											umur
											dan selalu diiringi oleh kebahagiaan
										</h4>
										<div class="testimonial-client">Savirra Satriadi</div>
										<div class="testimonial-company">Bride</div>
									</div>
									<!-- /testimonial-info -->
									<div class="swiper-slide testimonial-info">
										<h4 class="testimonial-desc">Terimakasih nesnumoto luar biasa sigap, cepat dan
											rapih.
											terimakasih untuk team yang bertugas di hari-H kemarin dll yang tidak bisa
											kami sebutkan satu-satu yang selalu membantu kami.
										</h4>
										<div class="testimonial-client">Nabila Ayu</div>
										<div class="testimonial-company">Bride</div>
									</div>
									<!-- /testimonial-info -->
									<div class="swiper-slide testimonial-info">
										<h4 class="testimonial-desc">Terimakasih untuk bantuannya dari awal, hasilnya
											memuaskan bangettt, timnya juga support semua
											baik-baik jadi happy banget.. salam juga dari suami dan keluarga untuk tim
											yang sudah membantu kita dari awal ya kak
										</h4>
										<div class="testimonial-client">Icha</div>
										<div class="testimonial-company">Bride</div>
									</div>
									<!-- /testimonial-info -->
								</div>
								<!-- /swiper-wrapper-->
								<div class="swiper-pagination"></div>
							</div>
							<!-- /testimonial-slider -->
						</div>
						<!-- /testimonial-white -->
					</div>
					<!-- /margin-percentr40 -->
				</div>
				<!-- /col-md-12 -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 5 -->

	<!-- SECTION 6 -->
	<div id="pricing-1" class="section-holder pricing-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="padding-lr200 alignc">
						<div class="el-smalltitle">Book Now</div>
						<h2 class="display-4 margin-b30">Grab our Exclusive Deals! </h2>
					</div>
				</div>
				<!-- /col-lg-12 -->
			</div>
			<!-- /row -->
			<div class="row margin-t50">
				<div class="col-md-4 mobile-margin-b30">
					<div class="price-box">
						<h3 class="margin-b10">Prewedding Only</h3>
						<div class="margin-b30">PHOTO - VIDEO</div>
						<ul class="price-features">
							<li>1 Day Photosession</li>
							<li>1 Photographer</li>
							<li>1 Videographer</li>
							<li>2 Outfit in 2 location</li>
							<li>2 Photoprint 20RP + Frame</li>
							<li>5 Photoprint 4R + Frame</li>
							<li>Video edit 1-2 minute</li>
							<li>All Raw Shoot - Google Drive</li>
						</ul>
						<a class="read-more btn100" href="pricing-plans.html">Choose</a>
					</div>
					<!-- /price-box -->
				</div>
				<!-- /col-md-4 -->
				<div class="col-md-4 mobile-margin-b30">
					<div class="price-box price-box-middle black-text">
						<h3 class="margin-b10 black-text">Wedding Only</h3>
						<div class="margin-b30">PHOTO - VIDEO - ALBUM</div>
						<ul class="price-features black-text">
							<li>1 Day Photosession &lpar;8 Hours&rpar;</li>
							<li>2 Photographer</li>
							<li>2 Videographer</li>
							<li>1 Crew</li>
							<li>1 Wedding Album 20X30 cm + Box</li>
							<li>1 Photoprint 16RP + Frame</li>
							<li>Video Edit 10 - 15 Menit</li>
							<li>All Raw Shoot + Flash Disk</li>
						</ul>
						<a class="readmore2 btn100 black-btn" href="pricing-plans.html">Choose</a>
					</div>
					<!-- /price-box -->
				</div>
				<!-- /col-md-4 -->
				<div class="col-md-4">
					<div class="price-box">
						<h3 class="margin-b10">Full Package</h3>
						<div class="margin-b30">PREWEDDING - TRDT CEREMONY - WEDDING</div>
						<ul class="price-features">
							<li><b>PREWEDDING</b></li>
							<li>1 Day Photosession</li>
							<li>1 Photographer</li>
							<li>2 Outfit in 2 location</li>
							<li>2 Photoprint 20RP + Frame</li>
							<li>5 Photoprint 4R + Frame</li>
							<li>All Raw Shoot - Google Drive</li>
							<li>__________________________</li>
							<li><b>TRDT. CEREMONY</b></li>
							<li>1 Day Photosession &lpar;4 Hours&rpar;</li>
							<li>1 Photographer</li>
							<li>1 Videographer</li>
							<li>50 Photos Edit Soft File</li>
							<li>Video Edit 1 - 2 Menit</li>
							<li>All Raw Shoot - Google Drive</li>
							<li>__________________________</li>
							<li><b>WEDDING</b></li>
							<li>1 Day Photosession &lpar;8 Hours&rpar;</li>
							<li>2 Photographer</li>
							<li>2 Videographer</li>
							<li>1 Crew</li>
							<li>1 Wedding Album 20X30 cm + Box</li>
							<li>1 Photoprint + Frame 16RP</li>
							<li>Video Edit 10 - 15 Menit</li>
							<li>All Raw Shoot - Flash Disk</li>
						</ul>
						<a class="read-more btn100" href="pricing-plans.html">Choose</a>
					</div>
					<!-- /price-box -->

				</div>
				<!-- /col-md-4 -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 6 -->
	<!-- SECTION 7 -->
	<div id="home-section-1-7" class="section-holder home-section-1-7 section-nomargin parallax"
		style="background-image:url(images/home/foot.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="padding-lr200 alignc">
						<div class="el-smalltitle white pcolor-white">Contact</div>
						<h2 class="display-4 margin-b30">Looking for a photographer & videographer?</h2>
						<a href="contact.html" class="read-more margin-t30">Get in Touch</a>
					</div>
				</div>
				<!-- /col-lg-12 -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION 7 -->

	<!-- /WRAP CONTENT -->
@endsection