@extends('layouts.user.master')

@section('content')
<!-- TOP HEADER IMAGE -->
<div class="swiper-mt">
    <div class="swiper-slide slider-img" style="background-image:url('{{ asset('frontend/images/footer.png') }}');">
        <div class="container slider-caption">
            <div class="row align-items-md-center">
               
                <div class="col col-lg-6">
                     <div class="slider-text">
                      <h1 class="display-3" >Lembaga /</h1>
                      <h1 class="display-3">Komunitas</h1>
                      <span class="post-subtitle" style="text-align: justify"></span> 
                      
                    </div>
                    {{-- <div class="margin-b30">
                        <a href="/about" class="read-more-v3">Lihat Selengkapnya</a>
                    </div> --}}
                 </div>
                 <div class="col-2 col-lg-6 responsive-img">
                    <img class="radius-right252" src="{{ asset('frontend/images/lembaga.png')}}"  class="" width="500"/>
               </div>
               
            </div>
          </div>
    </div>
</div>
<!-- /TOP HEADER IMAGE -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template clearfix">
    <div class="container">
        <div class="row margin-t100">
            <div class="col-lg-12">
                <ul class="portfolio-filter">
                    <li><a class="view-more current" href="#" data-filter="*">Show All</a></li>
                    <li class="lifestyle"><a class="view-more" href="#" data-filter=".lembaga">Lembaga</a></li>
                    <li class="portrait"><a class="view-more" href="#" data-filter=".komunitas">Komunitas</a></li>
                </ul>
                <div class="portfolio-grid-container">
                    <div class="portfolio-grid portfolio-layout-masonry">
                       
                         <!-- /item-portfolio -->
                         <div class="item-portfolio item-3cols komunitas">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-1.png' }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Kelompok Ternak</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Komunitas</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-1.png') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Karang Taruna</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols komunitas">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/kelompok-tani.jpg') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">>Kelompok Tani</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Komunitas</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-3.png') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Dewan Kesejahteraan Masjid (DKM)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                                                <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-2.png') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">>Perlindungan Masyarakat (LINMAS)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-5.png') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Majelis Ulama Indonesia (MUI)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lifestyle lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-3.png' }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Badan Permusyawaratan Desa (BPD)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lifestyle lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-2.png' }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Lembaga Pemberdayaan Masyarakat (LPMD)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                       
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-5.png') }}" class="img-fluid" alt=" " width="750" height="750"></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6">Pemberdayaan Kesejahteraan Keluarga (PKK)</h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                       
                        <!-- /item-portfolio -->
                    </div>
                    <!-- /portfolio-grid -->
                </div>
                
                <!-- /portfolio-grid-container -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /WRAP CONTENT -->
<!-- FOOTER -->
{{-- <div id="footer-instagram">
    <ul class="instagram-pics instagram-size-small">
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-1.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-2.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-3.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-4.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-5.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-6.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-7.jpg" alt=""/></a></li>
        <li class=""><a href="#" target="_blank" class=""><img loading="lazy" src="images/insta/insta-8.jpg" alt=""/></a></li>
    </ul>
    <p class="clear"><a href="#" rel="me" target="_blank" class="">Follow Us!</a></p>
</div> --}}
@endsection