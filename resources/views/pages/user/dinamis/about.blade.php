@extends('layouts.user.master')

@section('content')
 <!-- HOME SLIDER -->
 <div class="swiper-mt">
        <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/backgroundabout.png') }}');">
            <div class="container slider-caption">
                <div class="row align-items-md-center">
                    <div class="col-lg-12 alignc">
						<div class="">
							<img class="img-fluid margin-b30" src="{{ asset('frontend/images/logo_desa.png')}}" alt="" style="max-width: 230px"/>
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
	<!-- /HOME SLIDER -->

{{-- SECTION VISI MISI --}}
<div id="home-section-1-3" class="section-holder home-section-1-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 margin-t50">
				<div class="el-smalltitle margin-b20">Visi</div>
				<h2 class="display-4 margin-b70" style="text-align: left">Agamis, Sejahtera, Edukatif, Prestasi</h2>
				<div class="row">
					<div class="col-3">
						<img class="img-fluid" src="{{ asset('frontend/images/8.png')}}" alt=" " />
					</div>
					<!-- /col-4 -->
					<div class="col-3">
						<img class="img-fluid" src="{{ asset('frontend/images/10.png')}}" alt=" " />
					</div>
					<!-- /col-4 -->
					<div class="col-3">
						<img class="img-fluid"src="{{ asset('frontend/images/9.png')}}" alt=" " />
					</div>
					<!-- /col-4 -->
				</div>
				<!-- /row -->
			</div>
			<!-- /col-lg-6 -->
			<div class="col-12 col-lg-6 d-flex margin-t50">
				<div class="el-smalltitle margin-b20">Misi</div>
				<div class="icon-box-3 margin-t50">
	
					<!-- /icon-svg -->
					<ul style="text-align: justify">
						<li>Membangun dan memperkuat pemahaman dan pengamalan nilai-nilai agama</li>
						  <li>  Tata kelola pemerintahan yang baik, besih dan profesional serta berorientasi pada pelayanan publik yang optimal</li>
						  <li>  Peningkatan pembangunan infrastruktur perdesaan yang berbasis partisifatif</li>
						   <li> Penataan kehidupan masyarakat yang aman, tertib, taat hukum, dan harmonis</li>
						   <li> Memperkuat ketahaan sosial dan budaya masyarakat berdasarkan nilai luhur budaya lokal</li>
						<li>    Peningkatan sumberdaya manusia melalui kegiatan pendidikan formal dan non formal</li>
						  <li>  Mendorong Pengembangan keterampillan melalui pelatihan yang mengarah pada kewirusahaan dan industri kreatif.</li>
					</ul>
				</div>
				<!-- /icon-box-2 -->
			</div>
			<!-- /col-lg-6 -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
{{-- /ENDSECTION VISI MISI --}}

{{-- SECTION SEJARAH DESA --}}
 <div id="home-section-3-3" class="section-holder home-section-3-3 margin-b50">
    <div class="row g-0 align-items-center">
        <div class="col-lg-5 margin-bm50">
            <img class="img-fluid radius-right250" src="{{ asset('frontend/images/title2.png')}}" alt=" ">
        </div>
        <!-- /col-lg-6 -->
        <div class="col-lg-7">
            <div class="padding-50">
                <div class="testimonials">
                   
                    <!-- /testimonial-quote -->
                    <div class="testimonials">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial-info">
                                <h4 class="testimonial-desc">Nama Desa Baros diberikan oleh para tokoh Masyarakat terdahulu yang diambil dari kata BAROS, yaitu nama sebuah Pohon yang tumbuh besar di wilayah kami pada masa itu.<br><br>
									Pohon Baros diyakini sebagai pohon yang kokoh dan dapat tumbuh besar sehingga dapat memberikan rasa nyaman bagi siapapun yang berteduh dibawahnya. Dan menurut sepengetahuan kami, salah seorang Tokoh Masyarakat Desa Baros menyimpan (mengabadikan) tunggul/pangkal pohon tersebut sebagai kenangan.<br><br>
									Dari uraian tersebut, seluruh masyarakat Desa Baros diharapkan sesuai dengan makna/arti dari dasar tersebut, diharapkan bisa menjadi Masyarakat yang kokoh dalam persatuan dan kesatuan serta terus bahu membahu untuk dapat menciptakan lingkungan yang aman, nyaman, tentram dan mempunyai arti untuk yang lainnya.</h4>
                               
                            </div>
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
{{-- /SECTION SEJARAH DESA --}}

{{-- SECTION GET IN TOUCH --}}
<div id="home-section-1-2" class="section-holder home-section-1-2 parallax" style="background-image:url('{{ asset('frontend/images/background23.png') }}');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="padding-lr200 alignc">
					<div class="el-smalltitle">Kontak</div>
					<h2 class="display-4 margin-b30">Perlu Informasi Lebih Lanjut?</h2>
					<p>Kami siap membantu Anda. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami.					</p>
					<a href="#" class="read-more margin-t30">Hubungi</a>
				</div>
			</div>
			<!-- /col-lg-12 -->
		</div>
		<!-- /row -->	
	</div>
	<!-- /container -->
</div>

{{-- /SECTION GET IN TOUCH --}}
	

@endsection

@section('script')
<script>
    function startCounter(maxCount, elementId) {
        let counter = 0;
        const interval = 20; // 0.25 seconds in milliseconds
        const counterElement = document.getElementById(elementId);

        const intervalId = setInterval(() => {
            counterElement.textContent = counter;
            counter++;
            if (counter > maxCount) {
                clearInterval(intervalId);
            }
        }, interval);
    }

    startCounter(5,"count-awards"),
    startCounter(75,"awards-count")
    </script>
@endsection