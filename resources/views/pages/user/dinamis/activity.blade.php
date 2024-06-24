@extends('layouts.user.master')

@section('content')
{{-- <header class="main-header header-5">
    <div class="container">
        <div class="top-header top-header-5">
            <div class="header-social header-social-5">
                <ul class="social-media">
                    <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="social-instagram" href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="social-email" href="mailto:#" target="_blank"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="logo logo-5 logo-white"><a href="index.html"><img class="img-fluid" src="images/logo-tilia.png" alt="Tilia" width="139" height="90"></a></div>
            <div class="logo logo-5 logo-dark"><a href="index.html"><img class="img-fluid" src="images/logo-dark-tilia.png" alt="Tilia" width="139" height="90"></a></div>
            <div class="btn-header btn-header-5"> <a href="contact.html" class="read-more">Book Now</a></div>
            <!-- mobile menu button -->
            <div class="nav-button-holder nav-button-holder-5">
                <button type="button" class="nav-button">
                    <svg version="1.1" id="btn-menu-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                        <g>
                            <path d="M2,4L2,4C0.9,4,0,3.1,0,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,3.1,3.1,4,2,4z"></path>
                            <path d="M8,4L8,4C6.9,4,6,3.1,6,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,3.1,9.1,4,8,4z"></path>
                            <path d="M14,4L14,4c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,3.1,15.1,4,14,4z"></path>
                            <path d="M2,10L2,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,9.1,3.1,10,2,10z"></path>
                            <path d="M8,10L8,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,9.1,9.1,10,8,10z"></path>
                            <path d="M14,10L14,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,9.1,15.1,10,14,10z"></path>
                            <path d="M2,16L2,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,15.1,3.1,16,2,16z"></path>
                            <path d="M8,16L8,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,15.1,9.1,16,8,16z"></path>
                            <path d="M14,16L14,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,15.1,15.1,16,14,16z"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <!-- /mobile menu button -->
        </div>
        <!-- /top-header -->
        <div class="header-container5">
            <nav class="nav-holder nav-holder-5">
                <ul class="menu-nav">
                    <li class="menu-item menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                            <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                            <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                            <li class="menu-item"><a href="home-4.html">Home 4</a></li>
                            <li class="menu-item"><a href="home-5.html">Home 5</a></li>
                            <li class="menu-item"><a href="home-6.html">Home 6</a></li>
                            <li class="menu-item"><a href="home-7.html">Home 7</a></li>
                            <li class="menu-item"><a href="home-8.html">Home 8</a></li>
                            <li class="menu-item"><a href="home-9.html">Home 9</a></li>
                            <li class="menu-item"><a href="home-10.html">Home 10</a></li>
                            <li class="menu-item"><a href="home-video.html">Home Video</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="top-header-1.html">Headers</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="top-header-1.html">Header 1</a></li>
                                    <li class="menu-item"><a href="top-header-2.html">Header 2</a></li>
                                    <li class="menu-item"><a href="top-header-3.html">Header 3</a></li>
                                    <li class="menu-item"><a href="top-header-4.html">Header 4</a></li>
                                    <li class="menu-item"><a href="index.html">Header 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="about-me.html">About Me</a></li>
                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="team-1.html">Team</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="team-1.html">Team 1</a></li>
                                    <li class="menu-item"><a href="team-2.html">Team 2</a></li>
                                    <li class="menu-item"><a href="team-3.html">Team 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="pricing-plans.html">Pricing Plans</a></li>
                            <li class="menu-item"><a href="faq-page.html">FAQ Page</a></li>
                            <li class="menu-item"><a href="testimonials.html">Testimonials</a></li>
                            <li class="menu-item"><a href="testimonials-2.html">Testimonials 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="portfolio-grid-v1-3-cols.html">Portfolios</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v1-3-cols.html">Portfolio Grid v1</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v1-2-cols.html">Portfolio Grid v1 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-3-cols.html">Portfolio Grid v1 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-4-cols.html">Portfolio Grid v1 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-5-cols.html">Portfolio Grid v1 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v2-4-cols.html">Portfolio Grid v2</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v2-2-cols.html">Portfolio Grid v2 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-3-cols.html">Portfolio Grid v2 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-4-cols.html">Portfolio Grid v2 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-5-cols.html">Portfolio Grid v2 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-masonry-v1-3-cols.html">Portfolio Masonry v1</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-masonry-v1-2-cols.html">Portfolio Masonry v1 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-3-cols.html">Portfolio Masonry v1 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-4-cols.html">Portfolio Masonry v1 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-5-cols.html">Portfolio Masonry v1 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="portfolio-list-zigzag.html">Portfolio List ZigZag</a></li>
                            <li class="menu-item"><a href="portfolio-slider.html">Portfolio Slider</a></li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v1-5-cols.html">Portfolio FullScreen</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v1-5-cols.html">Portfolio Grid v1 FullScreen</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-5-cols.html">Portfolio Grid v2 FullScreen</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-5-cols.html">Portfolio Masonry v1 FullScreen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="gallery-masonry-4-cols.html">Galleries</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="gallery-masonry-2-cols.html">Masonry 2 Cols</a></li>
                            <li class="menu-item"><a href="gallery-masonry-3-cols.html">Masonry 3 Cols</a></li>
                            <li class="menu-item"><a href="gallery-masonry-4-cols.html">Masonry 4 Cols</a></li>
                            <li class="menu-item"><a href="gallery-masonry-5-cols.html">Masonry 5 Cols</a></li>
                            <li class="menu-item"><a href="gallery-justify.html">Justify Gallery</a></li>
                            <li class="menu-item"><a href="gallery-grid-1-2-cols.html">Grid 1-2 Cols</a></li>
                            <li class="menu-item"><a href="gallery-grid-2-cols.html">Grid 2 Cols</a></li>
                            <li class="menu-item"><a href="gallery-grid-3-cols.html">Grid 3 Cols</a></li>
                            <li class="menu-item"><a href="gallery-grid-4-cols.html">Grid 4 Cols</a></li>
                            <li class="menu-item"><a href="gallery-grid-5-cols.html">Grid 5 Cols</a></li>
                            <li class="menu-item"><a href="gallery-slider.html">Gallery Slider</a></li>
                            <li class="menu-item"><a href="gallery-fullscreen.html">Gallery Full Screen</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                            <li class="menu-item"><a href="blog.html">Blog Grid 2 Cols</a></li>
                            <li class="menu-item"><a href="blog-grid-3-cols.html">Blog Grid 3 Cols</a></li>
                            <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                            <li class="menu-item"><a href="blog-single-post.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="contact.html">Contact</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contact.html">Contact 1</a></li>
                            <li class="menu-item"><a href="contact-2.html">Contact 2</a></li>
                            <li class="menu-item"><a href="contact-3.html">Contact 3</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header> --}}
<!-- /HEADER -->
<!-- TOP HEADER IMAGE -->
<div class="top-single-bkg top-single-gallery">
    <div class="topsingleimg"> <img src="{{ asset('frontend/images/background.jpeg') }}" alt="" width="1920" height="1080"></div>
    <div class="inner-desc">
        <div class="container">
            <h1 class="display-2 single-post-title">Lembaga & Komunitas</h1>
            <span class="post-subtitle">Desa Baros</span>
        </div>
    </div>
</div>
<!-- /TOP HEADER IMAGE -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-filter">
                    <li><a class="view-more current" href="#" data-filter="*">Show All</a></li>
                    <li class="lifestyle"><a class="view-more" href="#" data-filter=".lembaga">Lembaga</a></li>
                    <li class="portrait"><a class="view-more" href="#" data-filter=".komunitas">Komunitas</a></li>
                </ul>
                <div class="portfolio-grid-container">
                    <div class="portfolio-grid portfolio-layout-masonry">
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-2.png') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-3-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-3-cols.html">Perlindungan Masyarakat (LINMAS)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-1.png') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-2-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-2-cols.html">Karang Taruna</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-3.png') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-4-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-4-cols.html">Dewan Kesejahteraan Masjid (DKM)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-5.png') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-3-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-3-cols.html">Majelis Ulama Indonesia (MUI)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lifestyle lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-3.png' }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="{{ route('detail_lembaga') }}"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="detail_lembaga">Badan Permusyawaratan Desa (BPD)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lifestyle lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-2.png' }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-3-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-3-cols.html">Lembaga Pemberdayaan Masyarakat (LPMD)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols komunitas">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/kelompok-tani.jpg') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-4-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-4-cols.html">Kelompok Tani</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Komunitas</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols lembaga">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ asset('frontend/images/komunitas/komunitas-5.png') }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-4-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-4-cols.html">Pemberdayaan Kesejahteraan Keluarga (PKK)</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Lembaga</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /item-portfolio -->
                        <div class="item-portfolio item-3cols komunitas">
                            <div class="post-image item-grid-image"><img loading="lazy" src="{{ 'frontend/images/komunitas/komunitas-1.png' }}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="gallery-grid-2-cols.html"> </a></div>
                            <div class="item-text-holder">
                                <h2 class="article-title display-6"><a href="gallery-grid-2-cols.html">Kelompok Ternak</a></h2>
                                <ul class="portfolio-categ">
                                    <li><a href="#">Komunitas</a></li>
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