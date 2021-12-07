$(document).ready(function(){
    $('html body .wrapper header .toggle-btn').click(function(){
        $('.mob-menu').toggleClass('active');
        $('.line-1, .line-2, .line-3').toggleClass('active');
    });
});

//sticky header

$(document).ready(function(){
    $(window).scroll(function(){
        var sticky = $('header'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
      });
});

// remove toggle
            $(document).ready(function(){
                $(".mob-menu .menu-items li a").click(function(){
                    $("html body .wrapper header .toggle-btn").click();
                });
            });



// tabs

$(document).ready(function(){
  $('#flight').click(function(){
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(1)').removeClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(2)').removeClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(3)').removeClass('active');
  });
  $('#stay').click(function(){
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(1)').addClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(2)').removeClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(3)').removeClass('active');
  });
  $('#toursim').click(function(){
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(2)').addClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(1)').removeClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(3)').removeClass('active');
  });
  $('#cars').click(function(){
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(1)').addClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(2)').addClass('active');
    $('.banner .banner-tabs .tab-desc .tab-para:nth-child(3)').removeClass('active');
  });
});


//city slider

$(document).ready(function(){
    $('.city-img-holder').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed : 3000,
        dots: false,
        speed: 2000,
        prevArrow: '<i class="fa fa-chevron-left slick-prev slickarrow"></i>',
        nextArrow: '<i class="fa fa-chevron-right slick-next slickarrow"></i>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                arrows: false
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
});

// thumb slider

$(document).ready(function(){
    $('.thumb-slider-images').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed : 3000,
        dots: false,
        speed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
});

// video slider js

$(document).ready(function(){
    $('.video-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 3,
        arrows: false,
        autoplay: true,
        autoplaySpeed : 3000,
        dots: false,
        speed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
});