@extends('web.layout.master')
@section('title','Hebi Mobile')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/category/category.css">
@stop
{{--content of page--}}
@section('content')
    <div class="headerCategory">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{url('/')}}">
                    <span class="name">Trang chủ</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="{{url('danh-muc/'.$status)}}">
                    <span class="name">{{$name_cate}}</span>
                </a>
                @if($name)
                    <div class="breadcrumbs_sepa"></div>
                    <a href="{{url('danh-muc/'.$status.'/'.$name)}}">
                        <span class="name">{{$name}}</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="list_cat_parent">
            @if(!$name)
                @foreach($cate as $item)
                    <a class="cat_child" href="{{url('danh-muc/'.$status.'/'.$item->name)}}">
                        <span class="name">{{$item->name}}</span>
                    </a>
                @endforeach
            @else
                @foreach($cate as $item)
                    <a class="cat_child" href="">
                        <span class="name">{{$item->name}}</span>
                    </a>
                @endforeach
            @endif
        </div>

        <p class="cat_title">Chọn theo tiêu chí:</p>

        <div class="filtersecond">
            <div class="filter-area">
                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                        Bộ lọc
                    </button>
                </div>

                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll" type="button" data-toggle="dropdown"
                            aria-expanded="false">
                        Giá
                    </button>
                </div>


            </div>
        </div>

        <p class="cat_title">Sắp xếp theo:</p>
        <div class="box_ft">
            <div class="list_check">
                <a href="https://onewaymobile.vn/dien-thoai-pc106.html&amp;sort=desc" class="">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1731_652)">
                            <path
                                d="M0.117777 3.69395L2.62257 1.22001V1.22022C2.71555 1.12579 2.84249 1.07257 2.97501 1.07257C3.10754 1.07257 3.23448 1.12579 3.32746 1.22022L5.83225 3.69416V3.69395C5.95215 3.83456 5.98508 4.02962 5.91778 4.2015C5.85048 4.37358 5.69413 4.49471 5.51066 4.51667H3.97683V14.5358C3.97683 14.8125 3.75256 15.0368 3.47591 15.0368H2.4741C2.19744 15.0368 1.97318 14.8125 1.97318 14.5358V4.51667H0.470197C0.281344 4.50486 0.115062 4.38786 0.0405122 4.21392C-0.034038 4.03998 -0.00421629 3.83891 0.11775 3.69395H0.117777Z"
                                fill="currentColor" fill-opacity="0.87"></path>
                            <path
                                d="M7.48383 1.00998H15.4992C15.7758 1.00998 16.0001 1.28664 16.0001 1.5109V2.51271C16.0001 2.78937 15.7758 3.01363 15.4992 3.01363H7.48383C7.20717 3.01363 6.98291 2.73697 6.98291 2.51271V1.5109C6.98291 1.23424 7.20717 1.00998 7.48383 1.00998Z"
                                fill="currentColor" fill-opacity="0.87"></path>
                            <path
                                d="M7.48383 5.01764H13.4953C13.772 5.01764 13.9963 5.2943 13.9963 5.51856V6.52037C13.9963 6.79702 13.772 7.02128 13.4953 7.02128H7.48383C7.20717 7.02128 6.98291 6.74463 6.98291 6.52037V5.51856C6.98291 5.2419 7.20717 5.01764 7.48383 5.01764Z"
                                fill="currentColor" fill-opacity="0.87"></path>
                            <path
                                d="M7.48383 13.033H9.48772C9.76438 13.033 9.98864 13.3096 9.98864 13.5339V14.5357C9.98864 14.8124 9.76437 15.0366 9.48772 15.0366H7.48383C7.20717 15.0366 6.98291 14.76 6.98291 14.5357V13.5339C6.98291 13.2572 7.20718 13.033 7.48383 13.033Z"
                                fill="currentColor" fill-opacity="0.87"></path>
                            <path
                                d="M7.48383 9.02533H11.4916C11.7683 9.02533 11.9925 9.30199 11.9925 9.52625V10.5281C11.9925 10.8047 11.7683 11.029 11.4916 11.029H7.48383C7.20717 11.029 6.98291 10.7523 6.98291 10.5281V9.52625C6.98291 9.24959 7.20717 9.02533 7.48383 9.02533Z"
                                fill="currentColor" fill-opacity="0.87"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1731_652">
                                <rect width="16" height="16" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>


                    Giá cao </a>
                <a href="https://onewaymobile.vn/dien-thoai-pc106.html&amp;sort=asc" class="">

                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.35534 14.866C3.26151 14.9598 3.1342 15.0125 3.00154 15.0125C2.86874 15.0125 2.74144 14.9598 2.64762 14.866L0.149179 12.364C0.0542695 12.2704 0.000599927 12.1429 3.22444e-06 12.0095C-0.000474903 11.8762 0.0522377 11.7482 0.14655 11.6539C0.24086 11.5596 0.368879 11.5068 0.502277 11.5072H2.00337V1.512C2.00337 1.3792 2.05608 1.25202 2.14991 1.1582C2.24375 1.06425 2.37105 1.01154 2.50371 1.01154H3.50443C3.63723 1.01154 3.76441 1.06425 3.85823 1.1582C3.95206 1.25203 4.00478 1.37922 4.00478 1.512V11.5109H5.50418C5.63758 11.5104 5.7656 11.5631 5.85991 11.6575C5.95422 11.7518 6.00693 11.8798 6.00646 12.0132C6.00598 12.1465 5.95219 12.2741 5.85728 12.3677L3.35534 14.866ZM7.00196 2.51269V1.51197C7.00196 1.37917 7.05467 1.25199 7.14851 1.15817C7.24234 1.06422 7.36964 1.01151 7.50231 1.01151H15.4997C15.6325 1.01151 15.7596 1.06422 15.8535 1.15817C15.9473 1.252 16 1.37919 16 1.51197V2.51269C16 2.64537 15.9473 2.77267 15.8535 2.86649C15.7596 2.96032 15.6324 3.01303 15.4997 3.01303H7.50047C7.36803 3.01255 7.2412 2.9596 7.14774 2.86589C7.05427 2.77206 7.00179 2.64512 7.00179 2.51267L7.00196 2.51269ZM7.00196 5.51318C7.00196 5.3805 7.05467 5.2532 7.14851 5.15939C7.24234 5.06555 7.36964 5.01284 7.50231 5.01284H13.4999C13.632 5.01332 13.7586 5.06603 13.8521 5.15939C13.9454 5.25286 13.9981 5.37944 13.9986 5.51153V6.51225C13.9986 6.64493 13.9459 6.77223 13.8521 6.86605C13.7582 6.95988 13.6309 7.01259 13.4983 7.01259H7.50065C7.36797 7.01259 7.24067 6.95988 7.14685 6.86605C7.05302 6.77221 7.00031 6.64491 7.00031 6.51225L7.00196 5.51318ZM7.00196 9.51262C7.00196 9.37994 7.05467 9.25264 7.14851 9.15882C7.24234 9.06499 7.36964 9.01228 7.50231 9.01228H11.5002C11.6329 9.01228 11.7602 9.06499 11.854 9.15882C11.9478 9.25266 12.0006 9.37996 12.0006 9.51262V10.5117C12.0006 10.6443 11.9478 10.7716 11.854 10.8655C11.7602 10.9593 11.6329 11.012 11.5002 11.012H7.50077C7.36809 11.012 7.24079 10.9593 7.14698 10.8655C7.05314 10.7716 7.00043 10.6443 7.00043 10.5117L7.00196 9.51262ZM7.00196 13.5121V13.5122C7.00196 13.3794 7.05467 13.2522 7.14851 13.1584C7.24234 13.0644 7.36964 13.0117 7.50231 13.0117H9.5004C9.63308 13.0117 9.76038 13.0644 9.8542 13.1584C9.94803 13.2522 10.0007 13.3794 10.0007 13.5122V14.5129C10.0007 14.6456 9.94803 14.7729 9.8542 14.8667C9.76037 14.9605 9.63307 15.0132 9.5004 15.0132H7.50062C7.36794 15.0132 7.24064 14.9605 7.14682 14.8667C7.05299 14.7729 7.00028 14.6456 7.00028 14.5129L7.00196 13.5121Z"
                            fill="currentColor" fill-opacity="0.87"></path>
                    </svg>

                    Giá thấp </a>
            </div>
        </div>
    </div>
    <div class="container content-cate-mobile">
        <div class="box">
            <div class="productList">
                @foreach($product as $item)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="{{url('san-pham/'.$item->slug)}}">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="{{$item->infor->image}}"
                                         alt="">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giam 29%</div>
{{--                                        <div class="installment-box">Trả góp 0%</div>--}}
                                    </div>
                                </div>
                            </a>
                            <a href="{{url('san-pham/'.$item->slug)}}" class="product-name">{{$item->name}}</a>
                            <div class="product-tech">
                                @foreach($item->type_product as $value)
                                    <a href="{{url('san-pham/'.$value->slug)}}"
                                       class="{{$value->own_parameter == $item->own_parameter?'active':''}}">{{$value->own_parameter}}</a>
                                @endforeach
                            </div>
                            <div class="product-tech">
                                <span>{{$item->infor->parameter_one}}</span>
                                <span>{{$item->infor->parameter_two}}</span>
                                <span>{{$item->infor->parameter_three}}</span>
                                <span>{{$item->infor->parameter_four}}</span>
                            </div>
                            <div class="product-price">
                                <span class="price">{{number_format($item->promotional_price_item)}}₫</span>
                                <del class="price-old">{{number_format($item->price)}}₫</del>
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
            <div class="d-flex justify-content-center">
                {{ $product->appends(request()->all())->links('web.partials.paginate') }}
            </div>
        </div>
    </div>
@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script_page')

@stop
