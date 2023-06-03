@extends('web.layout.master')
@section('title','Hebi Mobile')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/product/product.css">
@stop
<style>
    .modal-dialog{
        max-width: 600px!important;
    }
</style>
{{--content of page--}}
@section('content')
    <div class="headerCategory">
        <div class="container">
            <div class="breadcrumb">
                <a href="#">
                    <span class="name">Trang chủ</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="">
                    <span class="name">
                        @if($product->type_product == 1) Điện thoại @elseif($product->type_product == 2) Máy tính bảng @else Đồng hồ thông minh @endif</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="">
                    <span class="name">{{$name_category->name}}</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="">
                    <span class="name">{{$product->name_category_child	}}</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a>
                    <span class="name">{{$product->name}} - RAM {{$product_attribute->parameter_one}}GB - {{$product_attribute->name_product_type}}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container">
            <div class="_rowtop">
                <h1 class="">{{$product->name}} - RAM {{$product_attribute->parameter_one}}GB - {{$product_attribute->name_product_type}}</h1>
                <div class="product-rate">
                    <div class="star-rating" style="--rating: 4.7;"></div>
                </div>
            </div>
            <section class="row details-top">
                <aside class="_picture col-sm-4" id="picture" width="390" height="460">
                    <div class="slide-image row-item " style="overflow: hidden;">
                        <div class="slider-image slider-all"
                             style="border: 1px solid #666;border-radius: 12px;overflow: hidden;height: 290px">
                            @foreach($image_product as $item)
                                <div class="d-flex justify-content-center align-items-center">
                                    <img class="img-phone-detail"
                                         src="{{$item->src}}"
                                         alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="detail-slider slider-one mt-3">
                            @foreach($image_product as $item)
                                <img class="img-responsive img-phone-child"
                                     src="{{$item->src}}"
                                     alt="">
                            @endforeach
                        </div>
                    </div>
                    <div class="warranty">
                        <h4>Chính sách Bảo hành</h4>
                       <div class="content_salient_features">{!! $product->salient_features !!}</div>
                    </div>
                </aside>
                <aside class="_extra col-sm-4">
                    <div class="details_top1">
                        <div class="details_top">
                            <p class="name_mobile visible-xs">Bạn đang xem {{$product->name}} - RAM {{$product_attribute->parameter_one}}GB - {{$product_attribute->name_product_type}} màu
                                <span class="color_mobile">Đỏ</span>
                            </p>
                            <p class="top_prd ">
                                <span class="_price"></span>
                                <span class="price_old"></span>
                            </p>
                            <div class="edit-price">
                                <div class="list_same">
                                    @foreach($list_attribute as $item)
                                    <a href="{{url('product/'.$item->id)}}"
                                       class="item_same @if($item->id == $product_attribute->id) active @endif">
                                        <span class="nick_name">{{$item->name_product_type}}</span>
                                        <span class="price_same">{{number_format($item->price)}}đ</span>
                                    </a>
                                    @endforeach
                                </div>
                                <p><b>Chọn màu để xem giá và chi nhánh có hàng</b></p>
                                <div class="products_type">
                                    @foreach($product_value as $item)
                                    <div data_price="{{number_format($item->price)}}" data_promotional_price="{{number_format($item->promotional_price)}}"
                                         class="item_price products_type_item products_type_click  @if($item->attribute_id == $product_attribute->id) active @endif  ">
                                        <span>
                                            <img src="https://onewaymobile.vn/images/products/2021/11/26/resized/iphone-13-red-onewaymobile_1634879453_1637909338.jpg"
                                                 alt="Đỏ" class="img-responsive">
                                        </span>
                                        <p>
                                            <span>{{$item->name_color}}</span>
                                            <span>{{number_format($item->promotional_price)}}đ</span>
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="accessories">
                                <h4>Ưu đãi đặc biệt</h4>
                                <div>{!! $product->	special_offer !!}</div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="button-cart" class="row row5">
                        <div class="col-sm-12 col5">
                            <a id="buy-now" href="#modal_buy_now" class="btn-buy btn  mt10" data-toggle="modal">
                                Mua ngay
                                <span>Giao tận nơi hoặc nhận tại cửa hàng</span>
                            </a>
                        </div>

                    </div>
                    <div class="call_shop" style="margin-top:20px;">
                        <img src="/modules/products/assets/images/call.svg" width="16" height="16">
                        <a href="tel:0246 681 9779">0246 681 9779</a>
                        <span>Thời gian làm việc (08h15 - 22h00)</span>
                    </div>
                </aside>
                <aside class="buycall col-sm-4">
                    <div class="standard_product" id="accessories">
                        <h4 class="c-h4">
                            <img src="/images/gift-box-3966268-3286985 2.svg" alt="" class="img-responsive">
                            Chính sách khuyến mãi
                        </h4>
                        <div class="c-standard_product">{!! $product->promotion_policy !!}</div>
                    </div>
                </aside>
            </section>
        </div>
    </div>
    <div class="container">
        <section class="contentdetail row">
            <div class="col-sm-8 detail_botom">
                <div class="box-detail">
                    <div class="title_box">
                        <span>Thông tin sản phẩm</span>
                    </div>
                    <div class="boxdesc show-more" id="boxdesc" >{!! $product->product_information !!}</div>
                    <a class="details_click clickmore">Xem thêm</a>
                </div>

            </div>
            <div class="col-sm-4 left_bottom" id="thongso">
                <div class="_characteristic box-detail">
                    <div class="title_box">
                        <span>Thông số kỹ thuật </span>
                    </div>
                    <div style="max-height: 648px;overflow: hidden">{!! $product_attribute->specifications !!}</div>
                    <button id="load_more_charactestic" class="w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span>Xem cấu hình chi tiết</span>
                    </button>
                </div>

                <div id="new_related" class="new_related_mb box-detail">
                    <div class="title_box d-flex">

                        <span style="padding-left: 10px">Tin tức về sản phẩm</span>
                    </div>
                    <div class="relate_content ">
                        <a class="l_item" href="https://onewaymobile.vn/-n461.html">
                            <img class="img-responsive" width="120" height="68"
                                 alt="Cách đổi số điện thoại Zalo nhưng vẫn giữ được tin nhắn và danh bạ cực dễ"
                                 src="https://onewaymobile.vn/images/news/2021/08/resized/zalo_1629111827.jpg"
                                 onerror="javascript:this.src='https://onewaymobile.vn/images/NA-icon.svg'">
                            <span>Cách đổi số điện thoại Zalo nhưng vẫn giữ được tin nhắn và danh bạ cực dễ</span>
                        </a>

                        <a class="l_item" href="https://onewaymobile.vn/-n458.html">
                            <img class="img-responsive" width="120" height="68"
                                 alt="7 cách quan trọng để giữ thông tin cá nhân an toàn khi trực tuyến"
                                 src="https://onewaymobile.vn/images/news/2021/08/resized/7-cach-quan-trong-de-giu-thong-tin-ca-nhan-an-toan-khi-truc-tuyen-0_1628417600.jpg"
                                 onerror="javascript:this.src='https://onewaymobile.vn/images/NA-icon.svg'">
                            <span>7 cách quan trọng để giữ thông tin cá nhân an toàn khi trực tuyến</span>
                        </a>

                        <a class="l_item" href="https://onewaymobile.vn/-n457.html">
                            <img class="img-responsive" width="120" height="68"
                                 alt="Cách sử dụng Ghi chú nhanh trên iPad siêu đơn giản"
                                 src="https://onewaymobile.vn/images/news/2021/08/resized/ghi-chu-nhanh-1png_1628243847.png"
                                 onerror="javascript:this.src='https://onewaymobile.vn/images/NA-icon.svg'">
                            <span>Cách sử dụng Ghi chú nhanh trên iPad siêu đơn giản</span>
                        </a>

                    </div>
                </div>
            </div>
{{--            <div class="clearfix"></div>--}}
        </section>
    </div>
    <!-- Modal cấu hình -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header pb-0" style="border-bottom: none">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body body_characteristic">
                    <p class="title_characteristic">Thông số kỹ thuật chi tiết Điện thoại Apple iPhone 13 - 128GB VN/A</p>
                    <div>{!! $product_attribute->specifications !!}</div>
                </div>
            </div>
        </div>
    </div>
@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $(".clickmore").click(function() {--}}
{{--            $("#boxdesc").toggleClass("show-more");--}}
{{--            if ($("#boxdesc").hasClass("show-more")) {--}}
{{--                $(".clickmore").text("Thu gọn");--}}
{{--            } else {--}}
{{--                $(".clickmore").text("Xem thêm");--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
@section('script_page')

@stop