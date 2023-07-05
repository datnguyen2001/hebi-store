$(document).ready(function () {
    $('button.delete__image').confirm({
        title: 'Xác nhận!',
        content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
        buttons: {
            ok: {
                text: 'Xóa',
                btnClass: 'btn-danger',
                action: function(){
                    let data = {};
                    data['id'] = this.$target.attr("value");
                    $.ajax({
                        url: window.location.origin + '/admin/products/delete-img',
                        data: data,
                        dataType: 'json',
                        type: 'post',
                        success: function (data) {
                            if (data.status){
                                location.reload();
                            }
                        }
                    });
                }
            },
            close: {
                text: 'Hủy',
                action: function () {}
            }
        }
    });
    $('a.btn-delete-name').confirm({
        title: 'Xác nhận!',
        content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
        buttons: {
            ok: {
                text: 'Xóa',
                btnClass: 'btn-danger',
                action: function(){
                    location.href = this.$target.attr('href');
                }
            },
            close: {
                text: 'Hủy',
                action: function () {}
            }
        }
    });
    $('a.btn-delete-color').confirm({
        title: 'Xác nhận!',
        content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
        buttons: {
            ok: {
                text: 'Xóa',
                btnClass: 'btn-danger',
                action: function(){
                    location.href = this.$target.attr('href');
                }
            },
            close: {
                text: 'Hủy',
                action: function () {}
            }
        }
    });
});
