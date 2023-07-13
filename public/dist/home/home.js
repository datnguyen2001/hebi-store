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
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                    initialSlide: 0,
                },
            },
        ]
    })
}

function ScrollToTop() {
    let btn = $('#button');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function () {
        window.scrollTo({top: 0, left: 0, behavior: 'smooth'});
    });
}

let date = $('#time_end').attr('data-end');
let countDownDate = new Date(date).getTime();
let x = setInterval(function () {
    let now = new Date().getTime();
    let distance = countDownDate - now;
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    const dayElements = document.querySelectorAll(".day");
    const hourElements = document.querySelectorAll(".hours");
    const minuteElements = document.querySelectorAll(".minutes");
    const secondElements = document.querySelectorAll(".seconds");
    for (let i = 0; i < dayElements.length; i++) {
        dayElements[i].innerHTML = days + "D";
        hourElements[i].innerHTML = hours + " :";
        minuteElements[i].innerHTML = minutes + " :";
        secondElements[i].innerHTML = seconds;
    }
}, 1000);

$(function () {
    ProductSale();
    ScrollToTop();
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
        autoplay: true,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<div class="d-none"></div>',
        nextArrow: '<div class="d-none"></div>',
    });
    $('.product-tech').slick({
        infinite: false,
        autoplay: false,
        dots: false,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 2,
        prevArrow: '',
        nextArrow: '',
        centerMode: false,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2.6,
                    slidesToScroll: 1,
                },
            }
        ]
    })
});
for (let i = 1; i <= 3; i++) {
    $('.title-menu' + i).on('click', function () {
        $(".title-menu" + i).toggleClass("active");
        $(".nav-bottom" + i).toggleClass("bottom-nav2");
    });
}

$('.tab-click').on('click', function () {
    $(".menu-click").toggleClass("menu-click-active");
    $(".moby-overlay").toggleClass('overlay-active');
});
$('.moby-overlay').on('click', function () {
    $(".menu-click").toggleClass("menu-click-active");
    $(".moby-overlay").toggleClass('overlay-active');
});
$('#procat').on('click', function () {
    $(".danhmuc ").toggleClass("active");
});


