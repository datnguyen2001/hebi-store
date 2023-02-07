$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".selector__image").click(function () {
        $('input[name="file_product"]').trigger("click");
    });
    $('input[name="file_product"]').change(function () {
        readURL(this);
    });
    function readURL(input) {
        console.log(input.files[0]);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                if (input.files[0].type == 'video/mp4'){
                    let video = '<video class="w-100 h-100" style="object-fit: cover;"><source src=" '+ e.target.result +' " type="'+input.files[0].type+'"></video>';
                    $(".selector__image").html(video);
                }else{
                    let img = '<img src="'+ e.target.result +'" class="w-100 h-100" style="object-fit: cover;">';
                    $(".selector__image").html(img);
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).on("change", ".input_list_image", function () {
        let formData = new FormData();
        let totalfiles = document.getElementById('files').files.length;
        for (let index = 0; index < totalfiles; index++) {
            formData.append("files[]", document.getElementById('files').files[index]);
        }
        $.ajax({
            url : window.location.origin + '/api/upload/image-invest',
            data: formData,
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.status){
                    let count = 0;
                    $(".input-files").each(function () {
                        if ($(this).val() === ""){
                            $(this).val(data.files[count++]);
                        }else {
                            console.log($(this).val());
                        }
                    });
                    Object.keys(data.files).map(function(k){
                        let img = '<img src="'+data.files[k]+'" style="width: 100%; height: 100%; object-fit: cover">' +
                            '<label class="reset-image"><i class="fa fa-times-circle"></i></label>';
                        $(".select_image").eq(k).html(img);
                        setTimeout(function () {
                            $(".data-image").eq(k).removeClass("select_image");
                        }, 300);
                    })
                }else {
                    Swal.fire({
                        title: data.msg,
                        icon: "error",
                        showCancelButton: true,
                        confirmButtonText: "Xác nhận!"
                    });
                }
            }
        });
    });
    // select category
    $('input[name="category"]').click(function () {
        let value = $(this).val();
        $('input[name="category"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children',
            type: 'post',
            dataType: 'json',
            data: {"category_id" : value, "name" : "category_children"},
            success: function (data) {
                $("[list_category_children]").html(data.html);
                $("[list_sub_category]").html("");
            }
        });
    });
    $(document).on("click", 'input[name="category_children"]', function () {
        let value = $(this).val();
        $('input[name="category_children"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children',
            type: 'post',
            dataType: 'json',
            data: {"category_id" : value, "name" : "sub_category"},
            success: function (data) {
                $("[list_sub_category]").html(data.html);
            }
        });
    });

    // select warehouse
    $('input[name="area"]').click(function () {
        let value = $(this).val();
        $('input[name="area"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children',
            type: 'post',
            dataType: 'json',
            data: {"category_id" : value, "name" : "category_children"},
            success: function (data) {
                $("[warehouse_row]").html(data.html);
                $("[warehouse_floor]").html("");
                $("[warehouse_shelves]").html("");

            }
        });
    });
    $(document).on("click", 'input[name="category_children"]', function () {
        let value = $(this).val();
        $('input[name="category_children"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children',
            type: 'post',
            dataType: 'json',
            data: {"category_id" : value, "name" : "sub_category"},
            success: function (data) {
                $("[warehouse_floor]").html(data.html);
                $("[warehouse_shelves]").html("");

            }
        });
    });
    $(document).on("click", 'input[name="category_children"]', function () {
        let value = $(this).val();
        $('input[name="category_children"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children',
            type: 'post',
            dataType: 'json',
            data: {"category_id" : value, "name" : "sub_category"},
            success: function (data) {
                $("[warehouse_shelves]").html(data.html);
            }
        });
    });
    // add size so
    $(document).on("click", ".btn-add-size", function () {
       let parent = $(this).closest(".data-variant");
       let list_size = parent.find(".list-size");
       let data = {};
       data['count'] = list_size.children().length;
       data['index'] = parent.index();
       $.ajax({
          url: window.location.origin + '/api/variant-size',
           type: 'post',
           data: data,
           dataType: 'json',
           success: function (data) {
               list_size.append(data.html);
           }
       });
    });
    // delete size
    $(document).on("click", ".btn-clear-size", function () {
        let data_parent = $(this).closest(".data-variant");
       let parents = $(this).closest(".row");
       parents.remove();
       let index = data_parent.index();
        console.log(index);
       let list_size = data_parent.find(".list-size");
       let count = list_size.children().length;
       for (let i = 0; i < count; i ++){
           let size = 'variant['+index+'][data]['+i+'][size]';
           let price = 'variant['+index+'][data]['+i+'][price]';
           let promotion_price = 'variant['+index+'][data]['+i+'][promotion_price]';
           let quantity = 'variant['+index+'][data]['+i+'][quantity]';
           let sku = 'variant['+index+'][data]['+i+'][sku]';
           list_size.children().eq(i).find(".form-select.size").attr("name", size);
           list_size.children().eq(i).find(".form-control.price").attr("name", price);
           list_size.children().eq(i).find(".form-control.promotion_price").attr("name", promotion_price);
           list_size.children().eq(i).find(".form-control.quantity").attr("name", quantity);
           list_size.children().eq(i).find(".form-control.sku").attr("name", sku);
       }
    });
    // add color
    $(document).on("click", ".btn-add-color", function () {
       let parent = $(this).closest(".card-body");
       $.ajax({
          url: window.location.origin + '/api/variant-color',
          type: 'post',
          data: {"count" : parent.children().length},
           dataType: 'json',
           success: function (data) {
               parent.append(data.html)
           }
       });
    });
    // delete color
    $(document).on("click", ".btn-clear-color", function () {
        let parents = $(this).closest(".data-variant");
        parents.remove();
        let index = $(".card-body .data-variant").length;
        for (let i = 0; i < index; i++){
            let name = 'variant['+i+'][color]';
            let select = $(".data-variant").eq(i).find(".form-select.color");
            select.attr("name", name);
            let list_size = $(".data-variant").eq(i).find(".list-size");
            let count = list_size.children().length;
            for (let j = 0; j < count; j++){
                let size = 'variant['+i+'][data]['+j+'][size]';
                let price = 'variant['+i+'][data]['+j+'][price]';
                let promotion_price = 'variant['+i+'][data]['+j+'][promotion_price]';
                let quantity = 'variant['+i+'][data]['+j+'][quantity]';
                let sku = 'variant['+i+'][data]['+j+'][sku]';
                list_size.children().eq(j).find(".form-select.size").attr("name", size);
                list_size.children().eq(j).find(".form-control.price").attr("name", price);
                list_size.children().eq(j).find(".form-control.promotion_price").attr("name", promotion_price);
                list_size.children().eq(j).find(".form-control.quantity").attr("name", quantity);
                list_size.children().eq(j).find(".form-control.sku").attr("name", sku);
            }
        }
    });

    // Khu vuc kho
    $('input[name="khu_vuc"]').click(function () {
        let value = $(this).val();
        $('input[name="khu_vuc"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children-project-kho',
            type: 'post',
            dataType: 'json',
            data: {"parent_id" : value, "name" : "khu_vuc_hang"},
            success: function (data) {
                $("[khu_vuc_hang]").html(data.html);
                $("[khu_vuc_tang]").html("");
                $("[khu_vuc_ke]").html("");

            }
        });
    });
    $(document).on("click", 'input[name="khu_vuc_hang"]', function () {
        let value = $(this).val();
        $('input[name="khu_vuc_hang"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children-project-kho',
            type: 'post',
            dataType: 'json',
            data: {"parent_id" : value, "name" : "khu_vuc_tang"},
            success: function (data) {
                $("[khu_vuc_tang]").html(data.html);
                $("[khu_vuc_ke]").html("");

            }
        });
    });
    $(document).on("click", 'input[name="khu_vuc_tang"]', function () {
        let value = $(this).val();
        $('input[name="khu_vuc_tang"]').prop("checked", false);
        $(this).prop("checked", true);
        $.ajax({
            url: window.location.origin + '/api/get-children-project-kho',
            type: 'post',
            dataType: 'json',
            data: {"parent_id" : value, "name" : "khu_vuc_ke"},
            success: function (data) {
                $("[khu_vuc_ke]").html(data.html);
            }
        });
    });
    $(document).on("click", 'input[name="khu_vuc_ke"]', function () {
        let value = $(this).val();
        $('input[name="khu_vuc_ke"]').prop("checked", false);
        $(this).prop("checked", true);
    });

    // add size theo can nang
    $(document).on("click", ".btn-size", function () {
        let parent = $(this).closest(".data-variant");
        let list_size = parent.find(".list-size");
        let data = {};
        data['count'] = list_size.children().length;
        data['index'] = parent.index();
        $.ajax({
            url: window.location.origin + '/api/size-weight',
            type: 'post',
            data: data,
            dataType: 'json',
            success: function (data) {
                list_size.append(data.html);
            }
        });
    });
    // delete size theo can nang
    $(document).on("click", ".btn-clear", function () {
        let data_parent = $(this).closest(".data-variant");
        let parents = $(this).closest(".row");
        parents.remove();
        let index = data_parent.index();
        console.log(index);
        let list_size = data_parent.find(".list-size");
        let count = list_size.children().length;
        for (let i = 0; i < count; i ++){
            let kg1 = 'variant['+index+'][data]['+i+'][kg1]';
            let kg2 = 'variant['+index+'][data]['+i+'][kg2]';
            list_size.children().eq(i).find(".form-control.kg1").attr("name", kg1);
            list_size.children().eq(i).find(".form-control.kg2").attr("name", kg2);
        }
    });

});
