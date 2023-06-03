@extends('layout.admin.index')
<style>
    .category:nth-child(2n) {
        background: #33333330;
    }

    #cke_1_contents {
        height: 250px !important;
    }

    .image-uploader {
        min-height: 200px;
        border: 1px solid #d9d9d9;
        position: relative
    }

    .image-uploader:hover {
        cursor: pointer
    }

    .image-uploader.drag-over {
        background-color: #f3f3f3
    }

    .image-uploader input[type=file] {
        width: 0;
        height: 0;
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .image-uploader .upload-text {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column
    }

    .image-uploader .upload-text i {
        display: block;
        font-size: 3rem;
        margin-bottom: .5rem
    }

    .image-uploader .upload-text span {
        display: block
    }

    .image-uploader.has-files .upload-text {
        display: none
    }

    .image-uploader .uploaded {
        padding: .5rem;
        line-height: 0
    }

    .image-uploader .uploaded .uploaded-image {
        display: inline-block;
        width: calc(16.6666667% - 1rem);
        padding-bottom: calc(16.6666667% - 1rem);
        height: 0;
        position: relative;
        margin: .5rem;
        background: #f3f3f3;
        cursor: default
    }

    .image-uploader .uploaded .uploaded-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute
    }

    .image-uploader .uploaded .uploaded-image .delete-image {
        display: none;
        cursor: pointer;
        position: absolute;
        top: .2rem;
        right: .2rem;
        border-radius: 50%;
        padding: .3rem;
        background-color: rgba(0, 0, 0, .5);
        -webkit-appearance: none;
        border: none
    }

    .image-uploader .uploaded .uploaded-image:hover .delete-image {
        display: block
    }

    .image-uploader .uploaded .uploaded-image .delete-image i {
        color: #fff;
        font-size: 1.4rem
    }

    .select2-container--default .select2-results__option[aria-selected=true] {
        background: #ddd;
    }

    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    ul li {
        list-style-type: none;
    }

    .sku_variant {
        text-transform: uppercase;
        text-align: center;
    }

    .sku_variant::placeholder {
        text-transform: capitalize;
    }

    .attribute_product .title-attribute:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 2px;
        background: #ffffff;
    }

    .attribute_product .title-attribute {
        padding-right: 15px;
        margin-right: 15px;
    }

    .switch_2 {
        position: relative;
        display: inline-block;
        width: 53px;
        height: 26px;
        margin: 0;
    }

    .switch_2 input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider_2 {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #B7B9BD;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider_2:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider_2 {
        background-color: #1FEB58;
    }

    input:focus + .slider_2 {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider_2:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(24px);
        transform: translateX(24px);
    }

    /* Rounded sliders */
    .slider_2.round_2 {
        border-radius: 34px;
    }

    .slider_2.round_2:before {
        border-radius: 50%;
    }

    .parent_category.active {
        background: #EFEFEF;
    }

    .parent_category.active img {
        display: block;
    }

    .parent_category img {
        display: none;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                             role="alert">
                            {{session('error')}}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data"
                          class="card p-3">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Mã sản phẩm (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="sku" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Tên sản phẩm (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Danh mục :</p>
                            </div>
                            <div class="col-9">
                                <div class="row m-0 border">
                                    <div class="col-lg-4 pt-2 pb-2"
                                         style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="phone"
                                                       value="1" name="category"></div>
                                            <label for="phone" class="m-0">Điện thoại</label>
                                        </div>
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="tablet"
                                                       value="2" name="category"></div>
                                            <label for="tablet" class="m-0">Máy tính bảng</label>
                                        </div>
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="watch"
                                                       value="3" name="category"></div>
                                            <label for="watch" class="m-0">Đồng hồ thông minh</label>
                                        </div>
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="home"
                                                       value="4" name="category"></div>
                                            <label for="home" class="m-0">Nhà thông minh</label>
                                        </div>
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="accessory"
                                                       value="5" name="category"></div>
                                            <label for="accessory" class="m-0">Phụ kiện</label>
                                        </div>
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="checkbox" style="width: 20px; height: 20px" id="sound"
                                                       value="6" name="category"></div>
                                            <label for="sound" class="m-0">Âm thanh</label>
                                        </div>
                                    </div>
                                    <div list_category_children class="col-lg-4 pb-2 pt-2"
                                         style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px"></div>
                                    <div list_sub_category class="col-lg-4 pb-2 pt-2"
                                         style="overflow: auto; max-height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Gía gốc :</p>
                            </div>
                            <div class="col-9">
                                <input name="price" type="text" class="form-control format-currency" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Gía bán ra (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input name="promotion_price" type="text" class="form-control format-currency">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Số lượng (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input name="quantity" type="text" class="form-control format-currency" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Ảnh bìa/video sản phẩm (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <div class="d-flex align-items-center selector__image justify-content-center"
                                     style="width: 200px; height: 250px; background: #f0f0f0;cursor: pointer">
                                    <img src="../assets/img/camera.png">
                                </div>
                                <input type="file" hidden name="file_product"
                                       accept="image/*,video/mp4,video/x-m4v,video/*">
                                <input name="image_product" hidden value="">
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-info text-white">
                                Hình ảnh sản phẩm
                            </div>
                            <div class="card-body">
                                <label class="mt-2 mb-2"><i class="fa fa-upload"></i> Chọn hoặc kéo ảnh vào khung bên
                                    dưới</label>
                                <div class="input-image-product">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                               aria-controls="collapseExample1" class="btn bg-info text-white card-header">
                                <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                        style="font-weight: unset">Thông tin sản phẩm</strong><i
                                        class="fa fa-angle-down"></i></p>
                            </a>
                            <div id="collapseExample1" class="collapse shadow-sm">
                                <div class="card">
                                    <div class="card-body mt-2">
                                        <textarea name="product_information"
                                                  class="ckeditor">{{ old('content2') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                               aria-controls="collapseExample2" class="btn bg-info text-white card-header">
                                <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                        style="font-weight: unset">Ưu đãi đặc biệt</strong><i
                                        class="fa fa-angle-down"></i></p>
                            </a>
                            <div id="collapseExample2" class="collapse shadow-sm">
                                <div class="card">
                                    <div class="card-body mt-2">
                                        <textarea name="special_offer" class="ckeditor">{{ old('content2') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                               aria-controls="collapseExample3" class="btn bg-info text-white card-header">
                                <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                        style="font-weight: unset">Chính sách khuyến mãi</strong><i
                                        class="fa fa-angle-down"></i></p>
                            </a>
                            <div id="collapseExample3" class="collapse shadow-sm">
                                <div class="card">
                                    <div class="card-body mt-2">
                                        <textarea name="promotion_policy"
                                                  class="ckeditor">{{ old('content2') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                               aria-controls="collapseExample4" class="btn bg-info text-white card-header">
                                <p class="d-flex align-items-center justify-content-between mb-0"><strong
                                        style="font-weight: unset">Đặc điểm nổi bật</strong><i
                                        class="fa fa-angle-down"></i></p>
                            </a>
                            <div id="collapseExample4" class="collapse shadow-sm">
                                <div class="card">
                                    <div class="card-body mt-2">
                                        <textarea name="salient_features"
                                                  class="ckeditor">{{ old('content2') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-primary text-white">
                                Thuộc tính sản phẩm <span style="font-size: 14px; color: white">( Thêm ít nhất 1 loại sản phẩm )</span>
                            </div>
                            <div class="card-body p-0 bg-white">
                                <div class="mt-3 border-bottom data-variant pb-3">
                                    <div class="row m-0">
                                        <div class="col-lg-2 p-1">
                                            <input type="text" name="variant[0][name_product_type]" class="form-control"
                                                   placeholder="Tên loại sản phẩm" required>
                                        </div>
                                        <div class="col-lg-2 p-1">
                                            <button type="button" class="btn btn-success btn-add-size form-control"><i
                                                    class="bi bi-plus-lg"></i> Thêm Size Số
                                            </button>
                                        </div>
                                        <div class="col-lg-2 p-1">
                                            <button type="button" class="btn btn-primary btn-add-color form-control"><i
                                                    class="bi bi-plus-lg"></i> Thêm Màu
                                            </button>
                                        </div>
                                    </div>
                                    <div class="list-size">
                                        <div class="row m-0 pb-1">
                                            <div class="col-lg-2 p-1 d-flex align-items-center"
                                                 style="padding-left: 15px!important;">
                                                <p class="m-0">Thông số :</p>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input type="text" name="variant[0][parameter_one]" class="form-control"
                                                       placeholder="Ram" required>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][parameter_two]" type="text" class="form-control"
                                                       placeholder="Bộ nhớ trong">
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][parameter_three]" type="text"
                                                       class="form-control" placeholder="Màn hình">
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][parameter_four]" type="text"
                                                       class="form-control" placeholder="Mục đích dùng" required>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-header bg-info text-white">
                                                Thông số kỹ thuật
                                            </div>
                                            <div class="card-body mt-2">
                                                <textarea name="variant[0][specifications]"
                                                          class="ckeditor">{{ old('content2') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-lg-2 p-1">
                                                <input type="text" name="variant[0][data][0][color]"
                                                       class="form-control" placeholder="Tên màu sản phẩm" required>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][data][0][price]" type="text"
                                                       class="form-control price format-currency" placeholder="Giá bán">
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][data][0][promotion_price]" type="text"
                                                       class="form-control promotiom_price format-currency"
                                                       placeholder="Giá gốc">
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][data][0][quantity]" type="text"
                                                       class="form-control quantity format-currency"
                                                       placeholder="Số lượng" required>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <input name="variant[0][data][0][sku]" type="text"
                                                       class="form-control sku" placeholder="sku">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label">Chọn loại: </label>
                            <div class="col-sm-10">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="is_product_featured" type="checkbox"
                                           id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Sản phẩm nổi
                                        bật</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success" style="margin-right: 15px">Tạo mới</button>
                            <button type="reset" class="btn btn-dark">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="{{url('assets/js/input_file.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/format_currency.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/create-product.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('content_2', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
