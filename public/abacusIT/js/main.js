(function ($) {
    "use strict"
    var $win = $(window);
    var $top = $(".back-to-top p ")

    /*== top to back====*/
    $win.on('scroll', function () {
        var $scrolling = $(this).scrollTop();

    });
    $top.on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 2000);
    });

  //mileston-reviews-slider
    $('.carousel').carousel({
        interval: 2000
    })
    //banner-slider
   $(".banner-slider").slick({
      infinite: true,
      slidesToShow:1,
      slidesToScroll:1,
      autoplay:true,
      autoplaySpeed:3000,
      dots:true,
      fade:true,
      arrows:false
    });
     //slide-text
   $(".slide-text-content").slick({
      infinite: true,
      slidesToShow:1,
      slidesToScroll:1,
      autoplay:true,
      autoplaySpeed:4000,
      dots:false,
      fade:true,
      arrows:false
    });
   $('.counter').counterUp({
      delay: 10,
      time: 800
  });

  $('.venobox').venobox({
    framewidth : '600px',
    frameheight: '400px',
    border     : '5px',
    bgcolor : '#fff',
    share      : ['facebook', 'twitter', 'download'],
    spinner :'double-bounce'

  });
})(jQuery);

$(document).ready(function() {
 new WOW().init();
});
