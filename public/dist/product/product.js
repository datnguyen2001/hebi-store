$(function (){
    $('.slider-all').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-one'
    });
    $('.slider-one').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay:true,
        asNavFor: '.slider-all',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        prevArrow: '<div class="d-none"></div>',
        nextArrow: '<div class="d-none"></div>',
    });
    $('._price').text($('.products_type_click.active').attr('data_promotional_price')+'đ');
    $('.price_old').text($('.products_type_click.active').attr('data_price')+'đ');
    $(document).on('click', '.products_type_click', clickColor);
});

$(".clickmore").click(function() {
    $("#boxdesc").toggleClass("show-more");
    if ($("#boxdesc").hasClass("show-more")) {
        $(".clickmore").text("Xem thêm");
    } else {
        $(".clickmore").text("Thu gọn");
    }
});

function clickColor() {
    $('.products_type_click.active').removeClass('active');
    $(this).addClass('active');
    $('._price').text($(this).attr('data_promotional_price')+'đ');
    $('.price_old').text($(this).attr('data_price') + 'đ');
}
