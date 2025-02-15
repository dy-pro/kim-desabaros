/*
 * Author: matchthemes.com
 *
 */
 
(function($) {
    "use strict";
	
	// home slider
	$(document).ready(function () {
	//initialize swiper when document ready
	var mySwiper = new Swiper ('.swiper-mt', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	pagination: {
    el: '.swiper-pagination',
	type: 'fraction',
	},  
	navigation: {
    nextEl: '.swiper-mt-button-next',
    prevEl: '.swiper-mt-button-prev',
	},
	effect: 'fade',
	fadeEffect: {
    crossFade: true
	},
	speed: 1000,
	autoplay: {
   delay: 6000,
   disableOnInteraction: false,
	},
	});
	
	var portfolioSlider = new Swiper('.portfolio-slider', {
	// Optional parameters
	direction: 'horizontal',
	loop: true, 
	navigation: {
    nextEl: '.swiper-mt-button-next',
    prevEl: '.swiper-mt-button-prev',
	},
	slidesPerView: 1,
	spaceBetween: 15,
	breakpoints: {
         768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
        },
	effect: 'slide',
	speed: 1000,
	autoplay: {
   delay: 6000,
   disableOnInteraction: false,
	},
	});
	
	var testimonialSlider = new Swiper ('.testimonial-slider', {
	// Optional parameters
	direction: 'horizontal',
	loop: true,
	slidesPerView: 1,
	pagination: {
    el: '.swiper-pagination',
	type: 'bullets',
	clickable: true,
	},  
	effect: 'slide',
	speed: 1000,
	autoplay: {
   delay: 6000,
   disableOnInteraction: false,
	},
	});
	
	}); //end document ready

    // function countUp(target, duration) {
    //     // Mendapatkan elemen di mana nilai akan ditampilkan
    //     const display = document.getElementById('counter');
    
    //     // Hitung berapa kali per detik kita akan menambahkan nilai
    //     const increment = target / duration;
    
    //     // Inisialisasi nilai awal
    //     let currentCount = 0;
    
    //     // Buat interval untuk menambah nilai setiap 1 detik
    //     const interval = setInterval(() => {
    //         // Tambahkan nilai increment ke nilai saat ini
    //         currentCount += increment;
    
    //         // Periksa jika nilai saat ini melebihi target
    //         if (currentCount >= target) {
    //             // Atur nilai akhir dan hentikan interval
    //             currentCount = target;
    //             clearInterval(interval);
    //         }
    
    //         // Tampilkan nilai yang dihitung pada elemen display
    //         display.textContent = Math.floor(currentCount); // Tampilkan tanpa desimal
    //     }, 1000); // Interval setiap 1 detik
    // }
// Count pernghargaan
// document.addEventListener('DOMContentLoaded', function() {
//     // Array konfigurasi untuk setiap elemen yang ingin dihitung

//     console.log("sss")
//     var countElements = [
//         { id: 'adwi-awards', endVal: 8 },
//         { id: 'awards-count', endVal: 5 },
//         { id: 'places-count', endVal: 63 },
//         { id: 'years-count', endVal: 7 }
//     ];

//     // Fungsi untuk inisialisasi CountUp
//     function initCountUp(id, endVal) {
//         var countUp = countUp();
//         if (!countUp.error) {
//             countUp.start();
//         } else {
//             console.error(countUp.error);
//         }
//     }

//     // Looping untuk inisialisasi CountUp untuk setiap elemen
//     countElements.forEach(function(element) {
//         initCountUp(element.id, element.endVal);
//     });
// });

// navbar scroll

document.addEventListener('DOMContentLoaded', function() {
	window.addEventListener('scroll', function() {
		const navbar = document.querySelector('.nav-fixed-top');
		if (window.scrollY > 50) { // Ganti 50 dengan nilai piksel yang diinginkan untuk mulai perubahan warna
			navbar.classList.add('scrolled');
		} else {
			navbar.classList.remove('scrolled');
		}
	});
});

//mobile menu
$('.nav-button').on('click', function(e){
	
	e.preventDefault();
	
    $('.mobile-menu-holder, .menu-mask').addClass('is-active');
	$('body').addClass('has-active-menu');

});

$('.exit-mobile').on('click', function(e){
	
	e.preventDefault();

    $('.mobile-menu-holder, .menu-mask').removeClass('is-active');
	$('body').removeClass('has-active-menu');

});

$('.menu-mobile > li.menu-item-has-children > a').on('click', function(e){
			
			e.preventDefault();
			e.stopPropagation();
			
			if ( $(this).parent().hasClass('menu-open') )
			
			$(this).parent().removeClass('menu-open');
			
			else {
			
			$(this).parent().addClass('menu-open');
			
			}
																  
			});
			
$('.menu-mobile > li > .sub-menu > li:has(ul.sub-menu)').addClass('menu-item-parent-2level');					
	
	// end mobile menu
	
// menu edge screen turn left

$(".menu-nav li").on('mouseenter mouseleave', function (e) {
        if ($('ul', this).length) {
            var elm = $('.sub-menu', this);
            var off = elm.offset();
            var l = off.left;
            var w = elm.width();
            var docW = $(window).width();

            var isEntirelyVisible = (l + w <= docW);

            if (!isEntirelyVisible) {
                $(this).addClass('edge');
            } else {
                $(this).removeClass('edge');
            }
        }
    });	
	
	
$(window).on('scroll', function() {
  if ($(document).scrollTop() > 1 ) {
    $('.main-header').addClass('nav-fixed-top');
	} else {
    $('.main-header').removeClass('nav-fixed-top');
  }
  
  });		
  
	
$(window).on('load', function() {
	
	//masonry
	var blogItems = $('.layout-masonry');
   var portfolioItems = $('.portfolio-layout-masonry');
   
   blogItems.isotope({
  itemSelector : '.blog-item-masonry',
  layoutMode : 'masonry',
 
	});
	
	portfolioItems.isotope({
  itemSelector : '.item-portfolio',
  layoutMode : 'masonry',
 
	});
	
	// filter items when filter link is clicked
 $('.portfolio-filter a').on('click', function(){
 $('.portfolio-filter .current').removeClass('current');
 $(this).addClass('current');
		
  var selector = $(this).attr('data-filter');
  portfolioItems.isotope({ filter: selector });
  return false;
});


});	//window.load


//gallery

if ($('.gallery-post a').length){
$('.gallery-post a').simpleLightbox({
	heightRatio: 1,
	widthRatio: 0.8
   
});
}
if ($('.blocks-gallery-item a').length){
$('.blocks-gallery-item a').simpleLightbox({
	heightRatio: 1,
	widthRatio: 0.8
   
});
}

// portfolio fullscreen


if ( $( '.portfolio-fs-item' ).length > 0 ) {

$('.portfolio-fs-item h2 a').on( 'mouseover' , function(e){
	
	if ( ! $( this ).parent().parent().hasClass( 'active' ) ) {
		$( '.portfolio-fs-item' ).removeClass( 'active' );
		$( this ).parent().parent().addClass( 'active' );
		return false;
	}	

});

}

//end portfolio fullscreen

$('.exit-mobile').on('click', function(e){
	
	e.preventDefault();

    $('.mobile-menu-holder, .menu-mask').removeClass('is-active');
	$('body').removeClass('has-active-menu');

});

// faq

$('.faq-section').hide();
$('.faq-title').on('click',function(){

  if( $(this).next().is(':hidden') ) {

$(this).toggleClass('active').next().slideDown();
  } else {
   $(this).removeClass('active').next().slideUp();
 }
  return false; 
 });

//scroll up button
 
  $(".scrollup").hide();
     $(window).on('scroll', function() {
         if ($(this).scrollTop() > 400) {
             $('.scrollup').fadeIn();
         } else {
             $('.scrollup').fadeOut();
         }
     });

$('.scrolltop').on('click', function (e) {
e.preventDefault();
$('html, body').animate({scrollTop: 0}, 500, 'easeOutExpo');
});

$(".toggle-password").on('click', function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("data-toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
 
})(jQuery);