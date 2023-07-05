function ProductSale() {
    $('.product_sale').slick({
        infinite: true,
        autoplay: true,
        dots: false,
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 2,
        prevArrow: '<div class="prev-arrow"><div class="btn btn-prev"></div></div>',
        nextArrow: '<div class="next-arrow"><div class="btn btn-next"></div></div>',
        centerMode: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 999,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    initialSlide: 1,
                },
            },
        ]
    })
}

$(function (){
    ProductSale();
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay:true,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
            prevArrow: '<div class="d-none"></div>',
            nextArrow: '<div class="d-none"></div>',
        });
    });


