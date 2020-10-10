$(window).scroll(function () {
    var sticky = $('.main_menubar'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed_main_navbar');
    else sticky.removeClass('fixed');
});


$(window).resize(function () {
    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" + ($(this).width() + 100) + "px");
    });
});

$(document).ready(function () {
    $(".mega-menu").each(function () {
        $(this).attr("style", "left : -" + ($(this).width() + 100) + "px");
    });

    new WOW().init();


    $(".dummy_cart_btn").click(function (e) {

        var $this = $(this);
        $this.addClass("cart-processing");
        $this.prop("disabled", true);
        var submitURL = $.trim($this.attr('url'));
        var formId = $.trim($this.attr('frm'));
        $this.html("<i class='fa fa-circle-o-notch fa-spin'></i> Processing");


        e.preventDefault();
        $this.button('loading');
        /*Ajax Request Header setup*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* Submit form data using ajax*/
        $.ajax({
            url: submitURL,
            method: 'post',
            data: $(formId).serialize(),
            success: function (response) {
                if (response.status == true) {
                    $this.removeClass("cart-processing");
                    $this.prop("disabled", false);
                    $this.html("Add to Cart");
                }

                LoadCartList(response.data);

            }
        });
    });


})


function LoadCartList(cartList) {
    $(".dummy_cart_list_binding").html("");

    $(".dummy_total_cart").text(cartList.length);
    var totalPrice = 0;

    $.each(cartList, function (index, value) {

        if (index < 5) {
            var cartList = "<li> <div class=\"mini-cart-thumb\">" +
                "<a href=\"" + absoulatePath + "/product/" + value.product.slug + "\"><img src=\"" + absoulatePath + "/public/" + value.product.featured_image + "\" alt=\"\"></a>" +
                "</div>" + "<div class=\"mini-cart-heading\">" +
                "<span>$ " + value.product.new_price + "x " + value.quantity + "</span><h5><a href=\"" + absoulatePath + "/product/" + value.product.slug + "\">" + value.product.title + "</a></h5></div>" +
                "<div class=\"mini-cart-remove\"><a class=\"cart-removal\" title=\"Remove Item\" href=\"" + absoulatePath + "/delete/" + value.id + "\"><i class=\"ti-close\"></i></a></div></li>"

            $(".dummy_cart_list_binding").append(cartList);

            totalPrice += (value.product.new_price * value.quantity);

        }
    });

    $(".dummy_total_price").text(totalPrice.toFixed(2));

}
