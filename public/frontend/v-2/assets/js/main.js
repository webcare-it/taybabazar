//Category Menu js
$(document).ready(function(e) {
    $(".category-icon-outer").click(function(e) {
        e.stopPropagation();
        $(".category-items-outer").toggleClass("show");
    });
    $(".category-items-outer").click(function(e) {
        e.stopPropagation();
    });
    $(document).on("click", function(e) {
        $(".category-items-outer").removeClass("show");
    });

    // $(".category-list-item.item-has-submenu").click(function(){
    //     $(this).toggleClass("visible");
    // });
});

// Navbar Toggle Button For Mini Device
$('.nav-toggle-btn').click(function() {
    $('.manu-wrapper').toggleClass('menu-visible');
    $('body').toggleClass('body-overflow');
});

//Home Slider Js
$('.slider-items-wrapper').slick({
  dots: true,
  arrows: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  fade: true,
  cssEase: 'linear'
});

//Categoris Slider
$('.categoris-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        },
        1200:{
            items:8,
            nav:true,
            loop:true
        }
    }
});

//Product Slider
$('.product-items-slider').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
});

//Product Slider
$('.product-items-wrapper').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        400:{
            items:2,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        767:{
            items:3,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        },
        1200:{
            items:6,
            nav:true
        },
    }
});

$('.slider-content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    asNavFor: '.slider-thumb',
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left"></i>',
    nextArrow: '<i class="fas fa-chevron-right"></i>',
  });
  $('.slider-thumb').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-content',
    dots: false,
    centerMode: false,
    focusOnSelect: true
  });

//Address Show hide
$('#differentaddress').click(function() {
    $('#collapseAddress').toggle(500);
});

//Categoris Slider
$('.related-product-items-wrap').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:true
        }
    }
});

//Search Show hide
$('.res-search').on('click' , function() {
    $('.search-form-outer').toggleClass('show');
});