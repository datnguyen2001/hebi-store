$(function () {
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
        autoplay: true,
        asNavFor: '.slider-all',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        prevArrow: '<div class="d-none"></div>',
        nextArrow: '<div class="d-none"></div>',
    });
    $('._price').text($('.products_type_click.active').attr('data_promotional_price') + 'đ');
    $('.price_old').text($('.products_type_click.active').attr('data_price') + 'đ');
    $(document).on('click', '.products_type_click', clickColor);
});

$(".clickmore").click(function () {
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
    $('._price').text($(this).attr('data_promotional_price') + 'đ');
    $('.price_old').text($(this).attr('data_price') + 'đ');
}

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.rating-item input[type="radio"]').on('change', function () {
        const selectedRating = $(this).val();
        $('.start').removeClass('ratingAll')
        if (selectedRating == 2) {
            $("#rating1").addClass('ratingAll');
        }
        if (selectedRating == 3) {
            $("#rating1").addClass('ratingAll');
            $("#rating2").addClass('ratingAll');
        }
        if (selectedRating == 4) {
            $("#rating1").addClass('ratingAll');
            $("#rating2").addClass('ratingAll');
            $("#rating3").addClass('ratingAll');
        }
        if (selectedRating == 5) {
            $("#rating1").addClass('ratingAll');
            $("#rating2").addClass('ratingAll');
            $("#rating3").addClass('ratingAll');
            $("#rating4").addClass('ratingAll');
        }
    });

    $('.btn_send').click(function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        let formData = {};
        let star = $('input[name="rating"]:checked').val();
        if (star) {
            formData['star'] = star;
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Vui lòng chọn đánh giá trước khi gửi.'
            });
            return;
        }

        let content = $('#full_rate').val();
        if (content) {
            formData['content'] = content;
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Vui lòng nhập nội dung đánh giá trước khi gửi.'
            });
            return;
        }

        let name = $('input[name="name"]').val();
        if (name) {
            formData['name'] = name;
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Vui lòng nhập hộ và tên trước khi gửi.'
            });
            return;
        }

        let phone = $('input[name="phone"]').val();
        if (phone) {
            let phoneRegex = /^\d{1,10}$/;
            if (!phone.match(phoneRegex)) {
                Toast.fire({
                    icon: 'error',
                    title: 'Số điện thoại không hợp lệ. Vui lòng nhập số điện thoại hợp lệ.'
                });
                return;
            }
            formData['phone'] = phone;
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Vui lòng nhập số điện thoại trước khi gửi.'
            });
            return;
        }

        let email = $('input[name="email"]').val();
        if (email) {
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                Toast.fire({
                    icon: 'error',
                    title: 'Địa chỉ email không hợp lệ. Vui lòng nhập địa chỉ email hợp lệ.'
                });
                return;
            }
            formData['email'] = email;
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Vui lòng nhập địa chỉ email trước khi gửi.'
            });
            return;
        }
        $.ajax({
            url: window.location.origin + '/danh-gia',
            type: 'post',
            dataType: 'json',
            data: formData,
            success: function (data) {
                if (data.status){
                    localStorage.setItem('success','true');
                    location.reload();
                }
            }
        });
    });

    let success = localStorage.getItem('success');
    if (success == 'true'){
        const ToastSuccess = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        ToastSuccess.fire({
            icon: 'success',
            title: 'Cảm ơn bạn đã gửi đánh giá.'
        });
        localStorage.setItem('success','false');
    }

});
