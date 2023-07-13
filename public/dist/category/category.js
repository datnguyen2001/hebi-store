$(document).ready(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('input[name="check-ram"]').click(function (){
        $('.btn-filter-group').css('display','flex')
    });
    $('input[name="check-rom"]').click(function (){
        $('.btn-filter-group1').css('display','flex')
    });
    $('input[name="screen"]').click(function (){
        $('.btn-filter-group2').css('display','flex')
    });
    $('input[name="purpose"]').click(function (){
        $('.btn-filter-group3').css('display','flex')
    });
    $('input[name="chip"]').click(function (){
        $('.btn-filter-group4').css('display','flex')
    });

    let data = {};
    let url = window.location.origin + '/bo-loc-dien-thoai';
    $('.sort_price').click(function (){
        $(".sort_price").removeClass("active_filter");
        $(this).addClass("active_filter");
        $(".checkRam").each(function () {
            let  input = $(this).find('input[name="check-ram"]');
            if (input.is(":checked")){
                data['parameter_one'] = input.val();
            }
        });
        $(".checkRom").each(function () {
            let  input = $(this).find('input[name="check-rom"]');
            if (input.is(":checked")){
                data['parameter_five'] = input.val();
            }
        });
        $(".checkScreen").each(function () {
            let  input = $(this).find('input[name="screen"]');
            if (input.is(":checked")){
                data['parameter_two'] = input.val();
            }
        });
        $(".checkPurpose").each(function () {
            let  input = $(this).find('input[name="purpose"]');
            if (input.is(":checked")){
                data['parameter_three'] = input.val();
            }
        });
        $(".checkChip").each(function () {
            let  input = $(this).find('input[name="chip"]');
            if (input.is(":checked")){
                data['parameter_four'] = input.val();
            }
        });
        data['sort'] = $(this).attr('data-value');
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    });

    $('.resultOne').click(function () {
        $(".checkRam").each(function () {
            let  input = $(this).find('input[name="check-ram"]');
            if (input.is(":checked")){
                data['parameter_one'] = input.val();
                $(".btnOne").addClass("active_filter");
                $(".close_one").css('display','flex');
                $(".close_one").addClass("cancelOne");
            }
        });
        filterProduct();
    });
    $('.resultTwo').click(function () {
        $(".checkRom").each(function () {
            let  input = $(this).find('input[name="check-rom"]');
            if (input.is(":checked")){
                data['parameter_five'] = input.val();
                $(".btnTwo").addClass("active_filter");
                $(".close_two").css('display','flex');
                $(".close_two").addClass("cancelTwo");
            }
        });
        filterProduct();
    });
    $('.resultThree').click(function () {
        $(".checkScreen").each(function () {
            let  input = $(this).find('input[name="screen"]');
            if (input.is(":checked")){
                data['parameter_two'] = input.val();
                $(".btnThree").addClass("active_filter");
                $(".close_three").css('display','flex');
            }
        });
        filterProduct();
    });
    $('.resultFour').click(function () {
        $(".checkPurpose").each(function () {
            let  input = $(this).find('input[name="purpose"]');
            if (input.is(":checked")){
                data['parameter_three'] = input.val();
                $(".btnFour").addClass("active_filter");
                $(".close_four").css('display','flex');
            }
        });
        filterProduct();
    });
    $('.resultFive').click(function () {
        $(".checkChip").each(function () {
            let  input = $(this).find('input[name="chip"]');
            if (input.is(":checked")){
                data['parameter_four'] = input.val();
                $(".btnFive").addClass("active_filter");
                $(".close_five").css('display','flex');
            }
        });
        filterProduct();
    });

    $('.close_one').click(deleteRam);
    $('.cancelOne').click(function () {
        deleteRam();
    });
    $('.close_two').click(deleteRom);
    $('.cancelTwo').click(function () {
        deleteRom();
        $(".btnTwo").click();
    });
    $('.close_three').click(deleteRam);
    $('.cancelThree').click(function () {
        deleteScreen();
        $(".btnThree").click();
    });
    $('.close_four').click(deleteRam);
    $('.cancelFour').click(function () {
        deletePurpose();
        $(".btnFour").click();
    });
    $('.close_five').click(deleteRam);
    $('.cancelFive').click(function () {
        deleteChip();
        $(".btnFive").click();
    });

    function filterProduct(){
        data['sort'] = $('.active_filter').attr('data-value');
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
        $(".btnOne").click();
    }

    function deleteRam(){
        $(".checkRam").each(function () {
            $('input[name="check-ram"]').prop("checked", false);
        });
        $(".btnOne").removeClass("active_filter");
        $(".close_one").css('display','none');
        $('.btn-filter-group').css('display','none')
        data['sort'] = $('.active_filter').attr('data-value');
        data['parameter_one'] = null;
        data['parameter_five'] = $('input[name="check-rom"]:checked').val();
        data['parameter_two'] = $('input[name="screen"]:checked').val();
        data['parameter_three'] = $('input[name="purpose"]:checked').val();
        data['parameter_four'] = $('input[name="chip"]:checked').val();
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    }
    function deleteRom(){
        $(".checkRom").each(function () {
            $('input[name="check-rom"]').prop("checked", false);
        });
        $(".btnTwo").removeClass("active_filter");
        $(".close_two").css('display','none');
        $('.btn-filter-group1').css('display','none')
        data['sort'] = $('.active_filter').attr('data-value');
        data['parameter_one'] = $('input[name="check-ram"]:checked').val();
        data['parameter_five'] = null;
        data['parameter_two'] = $('input[name="screen"]:checked').val();
        data['parameter_three'] = $('input[name="purpose"]:checked').val();
        data['parameter_four'] = $('input[name="chip"]:checked').val();
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    }
    function deleteScreen(){
        $(".checkScreen").each(function () {
            $('input[name="screen"]').prop("checked", false);
        });
        $(".btnThree").removeClass("active_filter");
        $(".close_three").css('display','none');
        $('.btn-filter-group2').css('display','none')
        data['sort'] = $('.active_filter').attr('data-value');
        data['parameter_one'] = $('input[name="check-ram"]:checked').val();
        data['parameter_five'] = $('input[name="check-rom"]:checked').val();
        data['parameter_two'] = null;
        data['parameter_three'] = $('input[name="purpose"]:checked').val();
        data['parameter_four'] = $('input[name="chip"]:checked').val();
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    }
    function deletePurpose(){
        $(".checkPurpose").each(function () {
            $('input[name="purpose"]').prop("checked", false);
        });
        $(".btnFour").removeClass("active_filter");
        $(".close_four").css('display','none');
        $('.btn-filter-group3').css('display','none')
        data['sort'] = $('.active_filter').attr('data-value');
        data['parameter_one'] = $('input[name="check-ram"]:checked').val();
        data['parameter_five'] = $('input[name="check-rom"]:checked').val();
        data['parameter_two'] = $('input[name="screen"]:checked').val();
        data['parameter_three'] = null;
        data['parameter_four'] = $('input[name="chip"]:checked').val();
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    }
    function deleteChip(){
        $(".checkChip").each(function () {
            $('input[name="chip"]').prop("checked", false);
        });
        $(".btnFive").removeClass("active_filter");
        $(".close_five").css('display','none');
        $('.btn-filter-group4').css('display','none')
        data['sort'] = $('.active_filter').attr('data-value');
        data['parameter_one'] = $('input[name="check-ram"]:checked').val();
        data['parameter_five'] = $('input[name="check-rom"]:checked').val();
        data['parameter_two'] = $('input[name="screen"]:checked').val();
        data['parameter_three'] = $('input[name="purpose"]:checked').val();
        data['parameter_four'] = null;
        data['type_product'] = $('input[name="type_product"]').val();
        data['name_cate'] = $('input[name="name_cate"]').val();
        data['slug_cate'] = $('input[name="slug_cate"]').val();
        data['page'] = null;
        filter(data, url);
    }

    function filter(data,url) {
        $.ajax({
            url: url,
            data: data,
            type: 'post',
            dataType: 'json',
            success: function (data) {
                if (data.status){
                    $(".list-items").html(data.prop);
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
                }
            }
        })
    }

    $(document).on('click', '.content-paginate .btn-link-paginate', function (ev) {
        ev.preventDefault();
        let link = $(this).attr('href');
        let route = window.location.origin;
        let a = link.replace(route,route);
        let paginate = a.replace(route+'/bo-loc?page=','');
        $('.loading-view').show();
        data['page'] = parseInt(paginate);
        $.ajax({
            url: url,
            data: data,
            type: 'post',
            dataType: 'json',
            success: function (data) {
                if (data.status){
                    $(".list-items").html(data.prop);
                    $('.loading-view').hide();
                }
            }
        });
    });
});
