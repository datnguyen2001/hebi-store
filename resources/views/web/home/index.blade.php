@extends('web.layout.master')
@section('title','Hebi Mobile')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/home/home.css">
@stop
{{--content of page--}}
@section('content')
    <div class="container">
        <div class="home-top">
            <div class="position-absolute mobile-posi" style="position: unset!important;">
                <div id='cssmenu_content' class="position-relative menu ">
                    <ul class='menu-product list-unstyled '>
                        <li class='level_0 first-item' style="padding-top: 6px">
                            <a href='{{url('danh-muc/dien-thoai')}}' class='lv_0'>
                                <span><img src=https://onewaymobile.vn/images/menus/dienthoai_1663642681.svg
                                           width='20px' height='20px'>Điện thoại</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_phone as $value)
                                    <li class='level_1 first-item child_168'><a
                                            href='https://onewaymobile.vn/iphone-pc29.html'>{{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='level_2 first-item child_6'><a
                                                            href='https://onewaymobile.vn/iphone-14-series-pc105.html'>
                                                            {{$item->name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class='level_0'><a
                                href='{{url('danh-muc/may-tinh-bang')}}' class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/icon_ipad-mini_1574932835.png
                                        width='20px' height='20px'>Máy tính bảng</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_tablet as $value)
                                    <li class='level_1 child_7'><a href='https://onewaymobile.vn/ipad-pc30.html'>
                                            {{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='  level_2 last-item child_143'><a
                                                            href='https://onewaymobile.vn/ipad-pro-moi-pc82.html'>{{$item->name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class='level_0'><a
                                href='{{url('danh-muc/may-tinh-bang')}}' class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/icon_ipad-mini_1574932835.png
                                        width='20px' height='20px'>Laptop</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_tablet as $value)
                                    <li class='level_1 child_7'><a href='https://onewaymobile.vn/ipad-pc30.html'>
                                            {{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='  level_2 last-item child_143'><a
                                                            href='https://onewaymobile.vn/ipad-pro-moi-pc82.html'>{{$item->name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class='level_0'><a
                                href='{{url('danh-muc/dong-ho-thong-minh')}}' class='lv_0'>
                                        <span><img
                                                src=https://onewaymobile.vn/images/menus/dong-ho-thong-minh_1665660274.svg
                                                width='20px' height='20px'>Đồng hồ thông minh</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_watch as $value)
                                    <li class='level_1 child_169'><a
                                            href='https://onewaymobile.vn/apple-watch-pc61.html'>{{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='level_2 child_160'><a
                                                            href='https://onewaymobile.vn/apple-watch-ultra-pc140.html'>
                                                            {{$item->name}}</a>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class='level_0'><a
                                href='{{url('danh-muc/nha-thong-minh')}}' class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/nhathongminh_1663659296.svg
                                        width='20px' height='20px'>Nhà thông minh</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_home as $value)
                                    <li class='level_1 child_150'><a
                                            href='https://onewaymobile.vn/robot-hut-bui-pc91.html'>{{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='level_2 child_152'><a
                                                            href='https://onewaymobile.vn/dreame-pc112.html'>{{$item->name}}</a>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class='level_0'><a href='{{url('danh-muc/phu-kien')}}'
                                               class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/accessory-onewaymobile_1671698209.svg
                                        width='20px' height='20px'>Phụ kiện</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_accessory as $value)
                                    <li class='level_1 child_11'><a
                                            href='https://onewaymobile.vn/bo-sac-pc74.html'>{{$value->name}}</a>
                                        <ul class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='level_2 child_135'><a
                                                            href='https://onewaymobile.vn/pin-du-phong-pc181.html'>{{$item->name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class='level_0'><a
                                href='{{url('danh-muc/am-thanh')}}' class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/am-thanh_1670425919.svg width='20px'
                                        height='20px'>Âm thanh</span><i
                                    class='fa fa-angle-right'></i></a>
                            <ul class='wrapper_children_level0'>
                                @foreach($cate_sound as $value)
                                    <li class='  level_1 child_258'><a
                                            href='https://onewaymobile.vn/tai-nghe-pc63.html'>{{$value->name}}</a>
                                        <ul id='c_132' class='wrapper_children wrapper_children_level1'>
                                            @foreach($category as $item)
                                                @if($item->parent_id == $value->id)
                                                    <li class='  level_2 child_132'><a
                                                            href='https://onewaymobile.vn/bang-olufsen-pc195.html'>{{$item->name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class='level_0'>
                            <a href='{{url('tin-tuc/trang-chu')}}' class='lv_0'>
                                <span><img src=https://onewaymobile.vn/images/menus/tintuc_1663659902.svg width='20px'
                                           height='20px'>Tin tức</span><i class='fa fa-angle-right'></i></a>
                        </li>
                        <li class='level_0'>
                            <a href='{{url('tin-tuc/trang-chu')}}' class='lv_0'> <span><img
                                        src=https://onewaymobile.vn/images/menus/tintuc_1663659902.svg width='20px'
                                        height='20px'>Tra cứu đơn hàng</span><i
                                    class='fa fa-angle-right'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="home-slider-banner">
                <div class="row-3">
                    <div class="col-md-row col-left">
                        <div class="slider-image slider-for">
                            @foreach($banner_top as $item)
                                <div class="item-image">
                                    <a href="{{$item->link}}">
                                        <img alt="{{$item->title}}" width="714px" height="301px"
                                             src="{{$item->image}}"
                                             class="img-responsive img-banner-responsive">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="detail-slider slider-nav">
                            @foreach($banner_top as $item)
                                <div class="item-caption">
                                    <div>
                                        <p class="title">{{$item->title}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-row col-right">
                        <div class='banners banners-home banners-default block_inner block_banner'>
                            @foreach($banner_top_right as $item)
                                <a href="{{$item->link}}" title='{{$item->title}}' id="banner_item_27">
                                    <img class="img-old img-responsive me-4" alt="{{$item->title}}"
                                         src="{{$item->image}}">
                                </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a href="{{$banner_two->link}}">
            <img src="{{$banner_two->image}}" alt="" class="banner-home-top2">
        </a>
        <div class="box-sale">
            <a href="" class="d-flex justify-content-center">
                <img src="{{$banner_hot_sale->image}}" class="img-big-sale" alt="">
            </a>
            <div class="box-sales">
                <div class="product_sale sale-hot">
                    @for($i=0;$i<10;$i++)
                        <div class="item-product product_sale_hot">
                            <div class="item-child">
                                <a href="">
                                    <div class="product-img">
                                        <img class="img-responsive img-prd"
                                             src="https://onewaymobile.vn/images/products/2022/10/14/resized/amazfit-gts-4-mini---1_1665723928.png"
                                             alt="">
                                        <div class="box-absolute">
                                            <div class="discount-box">Giam 29%</div>
{{--                                            <div class="installment-box">Trả góp 0%</div>--}}
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="product-name">Đồng hồ Amazfit GTS 4 Mini</a>
                                <div class="product-tech">
                                    <span>Dây Silicone</span>
                                </div>
                                <div class="product-price">
                                    <span class="price">2.350.000₫</span>
                                    <del class="price-old">2.350.000₫</del>
                                </div>
                                <div class="product-status">
                                    <span>Mới 100%</span>
                                    <div class="product-rate">
                                        <div class="star-rating" style="--rating:4.6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
        <div class="phone">
            <div class="title-block">
                <h2>Điện thoại nổi bật nhất</h2>
                <div class="list-cat">
                    @foreach($cate_phone as $item)
                        <a href="#" class="item-cat"><span>{{$item->name}}</span></a>
                    @endforeach
                        <a href="{{url('danh-muc/dien-thoai')}}" class="item-cat"><span>Xem tất cả <span style="font-weight: 800">{{count($product_phone)}}</span> sản phẩm</span></a>
                </div>
            </div>
            <div class="list-products row">
                @foreach($product_phone as $value)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="{{url('san-pham/'.$value->slug)}}">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="{{$value->image}}"
                                         alt="ảnh sản phẩm">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
{{--                                        <div class="installment-box">Trả góp 0%</div>--}}
                                    </div>
                                </div>
                            </a>
                            <a href="{{url('san-pham/'.$value->slug)}}" class="product-name">{{$value->name}}</a>
                            <div class="product-tech">
                                @foreach($value->type_product as $item)
                                    <a href="{{url('san-pham/'.$item->slug)}}"
                                       class="{{$value->own_parameter == $item->own_parameter?'active':''}}">{{$item->own_parameter}}</a>
                                @endforeach
                            </div>
                            <div class="product-tech">
                                <span>{{$value->parameter->parameter_one}}</span>
                                <span>{{$value->parameter->parameter_two}}</span>
                                <span>{{$value->parameter->parameter_three}}</span>
                                <span>{{$value->parameter->parameter_four}}</span>
                            </div>
                            <div class="product-price">
                                <span class="price">{{number_format($value->promotional_price_item)}}₫</span>
                                <del class="price-old">{{number_format($value->price_item)}}₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                <div class="product-rate">
                                    <div class="star-rating" style="--rating:4.6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tablet">
            <div class="title-block">
                <h2>MÁY TÍNH BẢNG</h2>
                <div class="list-cat">
                    <a href="#" class="item-cat"><span>iphone</span></a>
                </div>
            </div>
            <div class="list-products row">
                @for($i=0;$i<10;$i++)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="https://onewaymobile.vn/images/products/2022/10/14/resized/amazfit-gts-4-mini---1_1665723928.png"
                                         alt="">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
                                        <div class="installment-box">Trả góp 0%</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product-name">Đồng hồ Amazfit GTS 4 Mini</a>
                            <div class="product-tech">
                                <span>Dây Silicone</span>
                            </div>
                            <div class="product-price">
                                <span class="price">2.350.000₫</span>
                                <del class="price-old">2.350.000₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                <div class="product-rate">
                                    <div class="star-rating" style="--rating:4.6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="watch">
            <div class="title-block">
                <h2>ĐỒNG HỒ THÔNG MINH</h2>
                <div class="list-cat">
                    <a href="#" class="item-cat"><span>Xem tất cả 54 sản phẩm</span></a>
                </div>
            </div>
            <div class="list-products row">
                @for($i=0;$i<10;$i++)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="https://onewaymobile.vn/images/products/2022/10/14/resized/amazfit-gts-4-mini---1_1665723928.png"
                                         alt="">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
                                        <div class="installment-box">Trả góp 0%</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product-name">Đồng hồ Amazfit GTS 4 Mini</a>
                            <div class="product-tech">
                                <span>Dây Silicone</span>
                            </div>
                            <div class="product-price">
                                <span class="price">2.350.000₫</span>
                                <del class="price-old">2.350.000₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                <div class="product-rate">
                                    <div class="star-rating" style="--rating:4.6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="home">
            <div class="title-block">
                <h2>NHÀ THÔNG MINH</h2>
                <div class="list-cat">
                    <a href="#" class="item-cat"><span>Xem tất cả 54 sản phẩm</span></a>
                </div>
            </div>
            <div class="list-products row">
                @for($i=0;$i<10;$i++)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="https://onewaymobile.vn/images/products/2022/10/14/resized/amazfit-gts-4-mini---1_1665723928.png"
                                         alt="">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
                                        <div class="installment-box">Trả góp 0%</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product-name">Đồng hồ Amazfit GTS 4 Mini</a>
                            <div class="product-tech">
                                <span>Dây Silicone</span>
                            </div>
                            <div class="product-price">
                                <span class="price">2.350.000₫</span>
                                <del class="price-old">2.350.000₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                <div class="product-rate">
                                    <div class="star-rating" style="--rating:4.6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="accessory-hot">
            <div class="title-block">
                <h2>PHỤ KIỆN NỔI BẬT</h2>
                <div class="list-cat">
                    <a href="#" class="item-cat"><span>Xem tất cả 54 sản phẩm</span></a>
                </div>
            </div>
            <div class="list-products row">
                @for($i=0;$i<10;$i++)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="https://onewaymobile.vn/images/products/2022/10/14/resized/amazfit-gts-4-mini---1_1665723928.png"
                                         alt="">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
                                        <div class="installment-box">Trả góp 0%</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="product-name">Đồng hồ Amazfit GTS 4 Mini</a>
                            <div class="product-tech">
                                <span>Dây Silicone</span>
                            </div>
                            <div class="product-price">
                                <span class="price">2.350.000₫</span>
                                <del class="price-old">2.350.000₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                <div class="product-rate">
                                    <div class="star-rating" style="--rating:4.6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="accessory">
            <div class="title-block">
                <h2>PHỤ KIỆN</h2>
                <div class="list-cat">
                    <a href="#" class="item-cat"><span>Xem tất cả 54 sản phẩm</span></a>
                </div>
            </div>
            <div class="list-categories">
                @for($i=0;$i<7;$i++)
                    <a href="#" class="b-item-cat">
                        <img onerror="this.src='/images/NA-icon.svg'"
                             src="https://onewaymobile.vn/images/products/cat/resized/bo-sac_1663662780.png"
                             alt="Bộ sạc" class="img-responsive">
                        <div>
                            <p class="name-cat">Bộ sạc</p>
                            <p class="link-cat">Xem tất cả <i class="fa fa-angle-right"></i></p>
                        </div>
                    </a>
                @endfor
            </div>
        </div>


    </div>
@stop
{{--<script src="{{asset('dist/home/home.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script_page')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stop
