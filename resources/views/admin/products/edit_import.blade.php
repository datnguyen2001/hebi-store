@extends('layout.admin.index')
<style>
    .category:nth-child(2n){
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

    .image-uploader .uploaded .uploaded-images {
        display: inline-block;
        width: calc(16.6666667% - 1rem);
        padding-bottom: calc(16.6666667% - 1rem);
        height: 0;
        position: relative;
        margin: .5rem;
        background: #f3f3f3;
        cursor: default
    }

    .image-uploader .uploaded .uploaded-images img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute
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
    .image-uploader .uploaded .uploaded-images .delete__image {
        display: block;
        cursor: pointer;
        position: absolute;
        top: .2rem;
        right: .2rem;
        border-radius: 50%;
        padding: .3rem;
        background-color: rgba(0, 0, 0, .5);
        border: none
    }

    .image-uploader .uploaded .uploaded-image:hover .delete-image {
        display: block
    }

    .image-uploader .uploaded .uploaded-image .delete-image i {
        color: #fff;
        font-size: 1.4rem
    }
    .image-uploader .uploaded .uploaded-images .delete__image i {
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
    ul li{
        list-style-type: none;
    }
    .sku_variant{
        text-transform: uppercase;
        text-align: center;
    }
    .sku_variant::placeholder{
        text-transform: capitalize;
    }
    .attribute_product .title-attribute:before{
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 2px;
        background: #ffffff;
    }
    .attribute_product .title-attribute{
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
    .parent_category.active{
        background: #EFEFEF;
    }
    .parent_category.active img{
        display: block;
    }
    .parent_category img{
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
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                            {{session('error')}}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="post" action="{{url('admin/products/update-product-kho/'.$product->id)}}" enctype="multipart/form-data" class="card p-3">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Mã sản phẩm (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="sku" required value="{{$product->sku}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Mã vạch (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="barcode" required value="{{$product->barcode}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Tên sản phẩm (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input class="form-control" name="name" required value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Hình bìa ảnh (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <div class="d-flex align-items-center position-relative selector__image justify-content-center" style="width: 200px; height: 250px; background: #f0f0f0;cursor: pointer">
                                    <img src="{{$product->image}}" class="position-absolute w-100 h-100" style="top: 0;left: 0; object-fit: cover">
                                    <label class="position-absolute bg-transparent clear-img text-black" style="top: 5px; right: 5px; z-index: 10; cursor: pointer"><i class="bi bi-x-circle-fill"></i></label>
                                </div>
                                <input type="file" hidden name="file_product" accept="image/*">
                                <input name="image_product" hidden value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Video sản phẩm :</p>
                            </div>
                            <div class="col-9">
                                <div class="d-flex align-items-center selector__video justify-content-center" style="width: 400px; height: 250px; background: #f0f0f0;cursor: pointer">
                                    @if(isset($product->video))
                                        <video width="100%" height="100%" style="object-fit: cover" controls>
                                            <source src="{{$product->video}}" type="video/mp4">
                                        </video>
                                    @else
                                        <img src="../assets/img/camera.png">
                                    @endif
                                </div>
                                <input type="file" id="videos" hidden name="video_product" accept="video/mp4,video/x-m4v,video/*">
                                <input name="video" hidden value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Danh mục (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <div class="row m-0 border">
                                    <div class="col-lg-4 pt-2 pb-2" style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                        @foreach($category as $value)
                                            <div class="d-flex align-items-center category p-1">
                                                <div class="d-flex align-items-center" style="margin-right: 10px">
                                                    <input type="checkbox" style="width: 20px; height: 20px" value="{{$value->id}}" @if($product->category_id == $value->id) checked @endif name="category">
                                                </div>
                                                <p class="m-0">{{$value->name}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div list_category_children class="col-lg-4" style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                        @php $category_children = \App\Models\CategoriesModel::where('parent_id', $product->category_id)->where('is_active', 1)->orderBy('created_at', 'desc')->get(); @endphp
                                        @foreach($category_children as $value)
                                            <div class="d-flex align-items-center category list_category_children p-1">
                                                <div class="d-flex align-items-center" style="margin-right: 10px">
                                                    <input type="checkbox" style="width: 20px; height: 20px" value="{{$value->id}}" @if($product->category_children == $value->id) checked @endif name="category_children">
                                                </div>
                                                <p class="m-0">{{$value->name}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div list_sub_category class="col-lg-4" style="overflow: auto; max-height: 400px">
                                        @php $sub_category = \App\Models\CategoriesModel::where('parent_id', $product->category_children)->where('is_active', 1)->orderBy('created_at', 'desc')->get(); @endphp
                                        @foreach($sub_category as $value)
                                            <div class="d-flex align-items-center category list_category_children p-1">
                                                <div class="d-flex align-items-center" style="margin-right: 10px">
                                                    <input type="checkbox" style="width: 20px; height: 20px" value="{{$value->id}}" @if($product->sub_category == $value->id) checked @endif name="sub_category">
                                                </div>
                                                <p class="m-0">{{$value->name}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Thương hiệu (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                @if(count($trademark))
                                    <select name="trademark" class="form-select">
                                        <option value="">Chọn thương hiệu</option>
                                        @foreach($trademark as $value)
                                            <option @if($product->trademark_id == $value->id) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <p class="text-center" style="color: red">Vui lòng thêm thương hiệu để tiếp tục</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Nhà cung cấp (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                @if(count($supplier))
                                    <select name="supplier" class="form-select">
                                        <option value="">Chọn nhà cung cấp</option>
                                        @foreach($supplier as $value)
                                            <option @if($product->supplier_id == $value->id) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <p class="text-center" style="color: red">Vui lòng thêm nhà cung cấp để tiếp tục</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Đơn vị (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                @if(count($unit))
                                    <select name="unit" class="form-select">
                                        <option value="">Chọn đơn vị</option>
                                        @foreach($unit as $value)
                                            <option @if($product->unit == $value->id) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <p class="text-center" style="color: red">Vui lòng thêm thương hiệu để tiếp tục</p>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Gía bán (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input name="price" type="text" class="form-control format-currency" required value="{{number_format($product->price)}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Gía khuyến mại :</p>
                            </div>
                            <div class="col-9">
                                <input name="promotion_price" type="text" class="form-control format-currency" value="{{isset($product->promotional_price) ? number_format($product->promotional_price) : 0 }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-center">
                                <p class="m-0">Số lượng (<span style="color: red"> * </span>) :</p>
                            </div>
                            <div class="col-9">
                                <input name="quantity" type="text" class="form-control format-currency" value="{{$product->quantity}}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 d-flex align-items-start">
                                <p class="m-0">Mô tả ngắn :</p>
                            </div>
                            <div class="col-9">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="short_description" maxlength="200" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;">{{$product->short_description}}</textarea>
                                    <label for="floatingTextarea">Tối đa 200 ký tự</label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header bg-info text-white">
                                Mô tả
                            </div>
                            <div class="card-body mt-2">
                                <textarea name="content" class="ckeditor">{!! $product->description !!}</textarea>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header bg-info text-white">
                                Thêm số lượng sản phẩm vào các kho
                            </div>
                            <div class="card-body mt-2">
                                @if(count($kho))
                                    <div class="row m-0">
                                        @foreach($kho as $key => $value)
                                            <div class="col-lg-6">
                                                <input type="hidden" name="kho[{{$key}}][id]" value="{{$value->id}}">
                                                <label class="mb-2">{{$value->name}} :</label>
                                                <input class="form-control format-currency" type="text" @if(isset($value->product_kho)) value="{{number_format($value->product_kho->quantity)}}" @endif name="kho[{{$key}}][quantity]" placeholder="Số lượng">
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-center">Vui lòng tạo kho để nhập sản phẩm vào kho</p>
                                @endif
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header bg-info text-white">
                                Hình ảnh sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="image-uploader image_product has-files mt-2">
                                    <div class="uploaded">
                                        @foreach($image_variant as $value)
                                            <div class="uploaded-images">
                                                <img src="{{$value->src}}">
                                                <button type="button" value="{{$value->id}}" class="delete__image"><i class="bi bi-x"></i></button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header bg-info text-white">
                                Cập nhập hình ảnh sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <label class="mt-2 mb-2"><i class="fa fa-upload"></i> Chọn hoặc kéo ảnh vào khung bên dưới</label>
                                    <div class="input-image-product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header bg-info text-white">
                                Thuộc tính sản phẩm <span style="font-size: 14px; color: #ef06b2">( Thêm ít nhất 1 màu sắc, 1 size số )</span>
                            </div>
                            <div class="card-body p-0">
                                @foreach($product_attribute as $key => $item)
                                    @php $product_value = \App\Models\ProductsValueModel::where('attribute_id', $item->id)->get(); @endphp
                                    <div class="mt-3 border-bottom data-variant pb-3">
                                        <input value="{{$item->id}}" hidden name="variant[{{$key}}][attribute_id]">
                                        <div class="row m-0">
                                            <div class="col-lg-2 p-1">
                                                <select class="form-select color" name="variant[{{$key}}][color]" required>
                                                    <option value="">Màu sắc</option>
                                                    @foreach($color as $value)
                                                        <option style="background: {{$value->code}}; color: #ffffff" @if($item->color_name == $value->name) selected @endif value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <button type="button" class="btn btn-success btn-add-size form-control"><i class="bi bi-plus-lg"></i> Thêm Size Số</button>
                                            </div>
                                            <div class="col-lg-2 p-1">
                                                <button type="button" class="btn btn-primary btn-add-color form-control"><i class="bi bi-plus-lg"></i> Thêm Màu</button>
                                            </div>
                                            @if($key > 0)
                                                <div class="col-lg-2 p-1">
                                                    <a class="btn btn-danger btn-delete-color" href="{{url('/admin/products/delete-color/'.$item->id)}}">
                                                        <i class="bi bi-trash"></i> Xóa</a>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="list-size">
                                            @foreach($product_value as $k => $value)
                                                <div class="row m-0">
                                                    <input value="{{$value->id}}" hidden name="variant[{{$key}}][data][{{$k}}][value_id]">
                                                    <div class="col-lg-2 p-1">
                                                        <select class="form-select size" name="variant[{{$key}}][data][{{$k}}][size]" required>
                                                            <option value="">Size số</option>
                                                            @foreach($size as $v)
                                                                <option @if($value->size_id == $v->id) selected @endif value="{{$v->id}}">{{$v->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 p-1">
                                                        <input name="variant[{{$key}}][data][{{$k}}][price]" type="text" class="form-control price format-currency" value="{{number_format($value->price)}}" placeholder="Gía bán">
                                                    </div>
                                                    <div class="col-lg-2 p-1">
                                                        <input name="variant[{{$key}}][data][{{$k}}][promotion_price]" type="text" class="form-control promotiom_price format-currency" value="{{number_format($value->promotional_price)}}" placeholder="Gía KM">
                                                    </div>
                                                    <div class="col-lg-2 p-1">
                                                        <input name="variant[{{$key}}][data][{{$k}}][quantity]" type="text" class="form-control quantity format-currency" value="{{number_format($value->quantity)}}" placeholder="Số lượng" required>
                                                    </div>
                                                    <div class="col-lg-2 p-1">
                                                        <input name="variant[{{$key}}][data][{{$k}}][sku]" type="text" class="form-control sku" value="{{$value->sku}}" placeholder="sku">
                                                    </div>
                                                    @if($k > 0)
                                                        <div class="col-lg-2 p-1">
                                                            <a href="{{url('admin/products/delete-size/'.$value->id)}}" class="btn btn-danger btn-delete-size">
                                                                <i class="bi bi-trash"></i> Xóa</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mb-5">
                            <label class="col-sm-2 col-form-label">Chọn loại: </label>
                            <div class="col-sm-10">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="is_product_selling" type="checkbox" id="flexSwitchCheckDefault" @if($product->is_product_selling == 1) checked @endif>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Sản phẩm bán chạy</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="is_product_featured" type="checkbox" id="flexSwitchCheckChecked" @if($product->is_product_featured == 1) checked @endif>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Sản phẩm nổi bật</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success" style="margin-right: 15px">Cập nhật</button>
                            <a href="{{route('admin.products.index')}}" type="reset" class="btn btn-dark">Hủy</a>
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
    <script src="{{url('assets/admin/edit-product.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
