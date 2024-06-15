<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">
    <head>

    <title>Kelompok Informasi Masyarakat Desa Baros</title>

    <meta name='robots' content='noindex,nofollow'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel='stylesheet' href="{{ asset('avante/css/core/wordpress.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/core/reset.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/modulobox.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/menus/left-align-menu.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/themify-icons.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/tooltipster.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/core/demo.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/loftloader/assets/css/loftloader.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/lib/animations/animations.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/css/frontend.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/avante-elementor/assets/css/swiper.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/avante-elementor/assets/css/justifiedGallery.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/avante-elementor/assets/css/flickity.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/avante-elementor/assets/css/avante-elementor.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/avante-elementor/assets/css/avante-elementor-responsive.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/core/responsive.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/lib/font-awesome/css/solid.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/lib/font-awesome/css/regular.min.css')}}"  type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/js/plugins/elementor/assets/lib/font-awesome/css/brands.min.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/style.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/elementor/global.css')}}" type='text/css' media='all'>
    <link rel='stylesheet' href="{{ asset('avante/css/elementor/pagebuilder.css')}}" type='text/css' media='all'>



    <link rel="icon" href="{{ asset('avante/upload/cropped-TG-Thumb-32x32.png')}}" sizes="32x32">
    <link rel="icon" href="{{ asset('avante/upload/cropped-TG-Thumb-192x192.png')}}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('avante/upload/cropped-TG-Thumb-180x180.png')}}">

</head>



<body data-rsssl="1" class="home page-template-default page page-id-4074 theme-avante woocommerce-no-js menu-transparent lightbox-black leftalign footer-reveal elementor-default elementor-page elementor-page-4074">
    <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000">
        <div class="loader-inner">
            <div id="loader">
                <div class="imgloading-container">
                    <span style="background-image: {{asset ('avante/upload/loading_logo.png')}};"></span>
                </div>
                <img alt="loader image" src="{{ asset('avante/upload/loading_logo.png')}}">
            </div>
        </div>
        <div class="loader-section section-fade">
        </div>
        <div class="loader-close-button" style="display: none;">
            <span class="screen-reader-text">Close</span>
        </div>
    </div>
    <div id="perspective" style="">
        <!-- Begin mobile menu -->
            @include('layouts.include.sidebar')
        <!-- End mobile menu -->
               <!-- Begin template wrapper -->
                  <div id="wrapper" class="hasbg transparent">
                    @include('layouts.include.navbar')
                    @yield('content')
                 </div>
        {{-- Footer --}}
        @include('layouts.include.footer')
           

        <a id="go-to-top" href="javascript:;"><span class="ti-arrow-up"></span></a>
    </div>



<script type='text/javascript' src="{{ asset('avante/js/jquery.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/imagesloaded.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/masonry.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/jquery.lazy.js')}}"></script>
<script type='text/javascript'>
    jQuery(function($) {
        jQuery("img.lazy").each(function() {
            var currentImg = jQuery(this);
            jQuery(this).Lazy({
                onFinishedAll: function() {
                    currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
                    currentImg.parent(".tg_gallery_lightbox").parent("div.gallery_grid_item").removeClass("lazy");
                    currentImg.parent("div.gallery_grid_item").removeClass("lazy");
                }
            });
        });
    });
</script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/modulobox.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/jquery.parallax-scroll.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/jquery.smoove.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/parallax.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/jquery.sticky-kit.min.js')}}"></script>
<script type='text/javascript'>
    jQuery(function($) {
        jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({
            offset_top: 100
        });
        if (jQuery(window).width() < 768 || is_touch_device()) {
            jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
        }
    });
</script>
<script type='text/javascript'>
        /* <![CDATA[ */
        var tgAjax = {
            "ajaxurl": "https:////themes.themegoods.com//avante//wp-admin//admin-ajax.php",
            "ajax_nonce": "9b0db167ee"
        };
        /* ]]> */
    </script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/avante-elementor.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/ui/core.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/ui/effect.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/tweenmax.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/waypoints.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/jquery.stellar.min.js')}}"></script>
<script type='text/javascript'>
        /* <![CDATA[ */
        var avantePluginParams = {
            "backTitle": "Back"
        };
        /* ]]> */
    </script>
<script type='text/javascript' src="{{ asset('avante/js/core/custom_plugins.js')}}"></script>
<script type='text/javascript'>
        /* <![CDATA[ */
        var avanteParams = {
            "menulayout": "leftalign",
            "fixedmenu": "1",
            "footerreveal": "1",
            "headercontent": "content",
            "lightboxthumbnails": "thumbnail",
            "lightboxtimer": "7000"
        };
        /* ]]> */
    </script>
<script type='text/javascript' src="{{ asset('avante/js/core/custom.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/jquery.tooltipster.min.js')}}"></script>
<script type='text/javascript'>
        jQuery(function($) {
            jQuery(".demotip").tooltipster({
                position: "left",
                multiple: true,
                theme: "tooltipster-shadow",
                delay: 0
            });
        });
    </script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/loftloader/assets/js/loftloader.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/webfont.js')}}"></script>
<script type='text/javascript'>
        WebFont.load({
            google: {
                families: ['Roboto:400,500', 'Cabin:700,600']
            }
        });
    </script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/flickity.pkgd.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/js/frontend-modules.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/tilt.jquery.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/avante-elementor/assets/js/momentum-slider.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/lib/dialog/dialog.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/lib/swiper/swiper.min.js')}}"></script>
<script type='text/javascript'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "version": "2.8.2",
            "urls": {
                "assets": "js//plugins//elementor//assets//"
            },
            "settings": {
                "page": [],
                "general": {
                    "elementor_global_image_lightbox": "yes"
                },
                "editorPreferences": []
            },
            "post": {
                "id": 4074,
                "title": "Home 1",
                "excerpt": ""
            }
        };
    </script>
<script type='text/javascript' src="{{ asset('avante/js/plugins/elementor/assets/js/frontend.min.js')}}"></script>
</body>
</html>
