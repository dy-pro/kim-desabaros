<!-- MOBILE MENU HOLDER -->
<div class="container mobile-menu-holder">
    <div class="row">
        <div class="col-md-12">
            <button class="exit-mobile">
                <svg version="1.1" id="btn-menu-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                    <path d="M15.4,15.3l-0.1,0.1c-0.7,0.7-1.9,0.7-2.6,0L0.6,3.3c-0.7-0.7-0.7-1.9,0-2.6l0.1-0.1c0.7-0.7,1.9-0.7,2.6,0l12.1,12.1
                        C16.2,13.4,16.2,14.6,15.4,15.3z"></path>
                    <path d="M0.7,15.4l-0.1-0.1c-0.7-0.7-0.7-1.9,0-2.6L12.7,0.6c0.7-0.7,1.9-0.7,2.6,0l0.1,0.1c0.7,0.7,0.7,1.9,0,2.6L3.3,15.4
                        C2.6,16.2,1.4,16.2,0.7,15.4z"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <!-- MOBILE MENU -->
            <ul class="menu-mobile">
                <li class="menu-item">
                    <a href="/">Beranda</a>
                </li>
                <li class="menu-item">
                    <a href="/tentang_desa">Tentang Desa</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Informasi</a>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="/kegiatan">Kegiatan</a>
                        </li>
                        <li class="menu-item">
                            <a href="/lembaga_komunitas">Lembaga/Komunitas</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="/produk_desa">Produk Desa</a>
                </li>
            </ul>
            <!-- /MOBILE MENU -->
        </div>
        
        
        <!-- /col-lg-7 -->
        <div class="col-lg-5">
            <div class="menu-contact">
                <div class="mobile-content">
                    <div class="mobile-address"> Desa Baros, Kabupaten Bandung, Jawa Barat<br> 1-800-111-2222 <br> contact@example.com</div>
                    <h5 class="widgettitle">Social</h5>
                    <ul class="social-media">
                        <li><a class="social-facebook" href="#" target="_blank">Facebook</a></li>
                        <li><a class="social-twitter" href="#" target="_blank">Twitter</a></li>
                        <li><a class="social-instagram" href="#" target="_blank">Instagram</a></li>
                        <li><a class="social-email" href="mailto:#" target="_blank">Email</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /col-lg-5 -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /MOBILE MENU HOLDER -->
<!-- HEADER -->
<header class="main-header">
<div class="container">
    <div class="header-container">
        <div class="logo logo-1 logo-white">
            <a href="/">
                <img class="img-fluid" src="{{ asset('frontend/images/Logo.png') }}" alt="Desa Baros" width="139" height="90">
            </a>
        </div>
        <div class="logo logo-1 logo-dark">
            <a href="/">
                <img class="img-fluid" src="{{ asset('frontend/images/Logo.png') }}" alt="Desa Baros" width="139" height="90">
            </a>
        </div>
        <nav class="nav-holder nav-holder-3">
            <ul class="menu-nav">
                <li class="menu-item menu-item-has-children {{ Route::currentRouteName() == 'beranda' ? 'current-menu-item' : '' }}">
                    <a href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="menu-item menu-item-has-children {{ Route::currentRouteName() == 'tentang_desa' ? 'current-menu-item' : '' }}">
                    <a href="{{ route('tentang_desa') }}">Tentang Desa</a>
                </li>
                <li class="menu-item menu-item-has-children {{ in_array(Route::currentRouteName(), ['kegiatan', 'lembaga_komunitas']) ? 'current-menu-item' : '' }}">
                    <a href="#">Informasi</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-parent{{ Route::currentRouteName() == 'kegiatan' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('kegiatan') }}">Kegiatan</a>
                        </li>
                        <li class="menu-item menu-item-has-children {{ Route::currentRouteName() == 'lembaga_komunitas' ? 'current-menu-item' : '' }}">
                            <a href="{{ route('lembaga_komunitas') }}">Lembaga/Kelompok</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-has-children {{ Route::currentRouteName() == 'produk_desa' ? 'current-menu-item' : '' }}">
                    <a href="{{ route('produk_desa') }}">Produk Desa</a>
                </li>
            </ul>
        </nav>

        @if (Auth::check())
            
        
        <div class="btn-header btn-header-1"> <a href="/dashboard" class="read-more-v3">Halaman Admin</a></div>
        @endif

        <div class="nav-button-holder">
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
    </div>
</div>
</header>
<!-- /HEADER -->