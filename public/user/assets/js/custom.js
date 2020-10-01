$(window).scroll(function(){
    var sticky = $('.main_menubar'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed_main_navbar');
    else sticky.removeClass('fixed');
});


$(window).resize(function(){
    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" +($(this).width()+100) + "px");
    });
});

$(document).ready(function () {
    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" +($(this).width()+100) + "px");
    });
})
