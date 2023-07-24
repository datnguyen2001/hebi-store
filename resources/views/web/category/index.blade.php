@extends('web.layout.master')
@section('title','Hebi Store')
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
                <a href="{{url('/')}}"><span class="name">Trang chủ</span></a>
                <div class="breadcrumbs_sepa"></div>
                <a href="{{url('danh-muc/'.$status)}}"><span class="name">{{$name_cate}}</span></a>
                @if($name)
                    <div class="breadcrumbs_sepa"></div>
                    <a href="{{url('danh-muc/'.$status.'/'.$name)}}"><span class="name">{{$name}}</span></a>
                @endif
                @if($slug)
                    <div class="breadcrumbs_sepa"></div>
                    <a href="{{url('danh-muc/'.$status.'/'.$name.'/'.$slug)}}"><span class="name">{{\App\Models\CategoryModel::where('slug',$slug)->first()->name}}</span></a>
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
                    <a class="cat_child @if($item->slug == $slug) cat_active @endif" href="{{url('danh-muc/'.$status.'/'.$name.'/'.$item->slug)}}">
                        <span class="name">{{$item->name}}</span>
                    </a>
                @endforeach
                    <input type="text" name="name_cate" value="{{$name}}" hidden>
                    <input type="text" name="slug_cate" value="{{$slug}}" hidden>
            @endif
        </div>

        <p class="cat_title">Chọn theo tiêu chí:</p>

        <div class="filtersecond">
            <div class="filter-area">
{{--                <div class="dropdown field_filter filterAll">--}}
{{--                    <button class="btn dropdown-toggle btnFilterAll btnOne" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">--}}
{{--                        Giá--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu">--}}
{{--                        <div class="slider" id="price-slider">--}}
{{--                            <div class="slider-thumb" id="min-thumb"></div>--}}
{{--                            <div class="slider-thumb" id="max-thumb"></div>--}}
{{--                        </div>--}}
{{--                        <input type="text" id="min-price" readonly>--}}
{{--                        <input type="text" id="max-price" readonly>--}}
{{--                        <div class="btn-filter-group">--}}
{{--                            <button class="button is-small is-danger is-light">Bỏ chọn</button>--}}
{{--                            <button class="button is-small is-danger submit result_one">--}}
{{--                                Xem kết quả--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <input type="text" name="type_product" value="{{$type_product}}" hidden>
                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll btnOne" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Ram
                    </button>
                    <i class="fa-solid fa-xmark close_one"></i>
                    <div class="dropdown-menu menu_one">
                        <ul class="d-flex flex-wrap" style="grid-gap: 10px;">
                            @foreach($ram as $index => $item)
                                <div class="check-box checkRam">
                                    <input type="radio" id="ram" name="check-ram" value="{{$item->parameter_one}}"/>
                                    <label class="btn btn-default" for="ram" style="position: unset">{{$item->parameter_one}}</label>
                                </div>
                                @endforeach
                        </ul>
                        <div class="btn-filter-group">
                            <button class="button is-small is-danger is-light cancelOne">Bỏ chọn</button>
                            <button class="button is-small is-danger submit resultOne">
                                Xem kết quả
                            </button>
                        </div>
                    </div>
                </div>
                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll btnTwo" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Bộ nhớ trong
                    </button>
                    <i class="fa-solid fa-xmark close_two"></i>
                    <div class="dropdown-menu">
                        <ul class="d-flex flex-wrap" style="grid-gap: 10px;">
                            @foreach($rom as $index => $item)
                                <div class="check-box checkRom">
                                    <input type="radio" id="rom" name="check-rom" value="{{$item->own_parameter}}"/>
                                    <label class="btn btn-default" for="rom" style="position: unset">{{$item->own_parameter}}</label>
                                </div>
                            @endforeach
                        </ul>
                        <div class="btn-filter-group1">
                            <button class="button is-small is-danger is-light cancelTwo">Bỏ chọn</button>
                            <button class="button is-small is-danger submit resultTwo">
                                Xem kết quả
                            </button>
                        </div>
                    </div>
                </div>
                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll btnThree" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Màn hình
                    </button>
                    <i class="fa-solid fa-xmark close_three"></i>
                    <div class="dropdown-menu">
                        <ul class="d-flex flex-wrap" style="grid-gap: 10px;">
                            @foreach($screen as $index => $item)
                                <div class="check-box checkScreen">
                                    <input type="radio" id="screen" name="screen" value="{{$item->parameter_two}}"/>
                                    <label class="btn btn-default" for="screen" style="position: unset">{{$item->parameter_two}}</label>
                                </div>
                            @endforeach
                        </ul>
                        <div class="btn-filter-group2">
                            <button class="button is-small is-danger is-light cancelThree">Bỏ chọn</button>
                            <button class="button is-small is-danger submit resultThree">
                                Xem kết quả
                            </button>
                        </div>
                    </div>
                </div>

                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll btnFour" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Mục đích dùng
                    </button>
                    <i class="fa-solid fa-xmark close_four"></i>
                    <div class="dropdown-menu">
                        <ul class="d-flex flex-wrap" style="grid-gap: 10px;">
                            @foreach($intended_use as $index => $item)
                                <div class="check-box checkPurpose">
                                    <input type="radio" id="purpose" name="purpose" value="{{$item->parameter_three}}"/>
                                    <label class="btn btn-default" for="purpose" style="position: unset">{{$item->parameter_three}}</label>
                                </div>
                            @endforeach
                        </ul>
                        <div class="btn-filter-group3">
                            <button class="button is-small is-danger is-light cancelFour">Bỏ chọn</button>
                            <button class="button is-small is-danger submit resultFour">
                                Xem kết quả
                            </button>
                        </div>
                    </div>
                </div>
                <div class="dropdown field_filter filterAll">
                    <button class="btn dropdown-toggle btnFilterAll btnFive" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Chip xử lý
                    </button>
                    <i class="fa-solid fa-xmark close_five"></i>
                    <div class="dropdown-menu">
                        <ul class="d-flex flex-wrap" style="grid-gap: 10px;">
                            @foreach($chip as $index => $item)
                                <div class="check-box checkChip">
                                    <input type="radio" id="chip" name="chip" value="{{$item->parameter_four}}"/>
                                    <label class="btn btn-default" for="chip" style="position: unset">{{$item->parameter_four}}</label>
                                </div>
                            @endforeach
                        </ul>
                        <div class="btn-filter-group4">
                            <button class="button is-small is-danger is-light cancelFive">Bỏ chọn</button>
                            <button class="button is-small is-danger submit resultFive">
                                Xem kết quả
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <p class="cat_title">Sắp xếp theo:</p>
        <div class="box_ft">
            <div class="list_check">
                <div class="sort_price" data-value="1">
                    <i class="fa-solid fa-arrow-up-wide-short" style="font-size: 16px"></i>
                    Giá Cao - Thấp </div>
                <div class="sort_price" data-value="2">
                    <i class="fa-solid fa-arrow-down-wide-short" style="font-size: 16px"></i>
                    Giá Thấp - Cao </div>
            </div>
        </div>
    </div>
    <div class="container content-cate-mobile">
        <div class="box list-items">
            @if(count($product) > 0)
            <div class="productList">
                @foreach($product as $value)
                    <div class="item-product product_sale_hot col-lg-13 col-lg-14 col-md-15 col-16">
                        <div class="item-child">
                            <a href="{{url('san-pham/'.$value->slug)}}">
                                <div class="product-img">
                                    <img class="img-responsive img-prd"
                                         src="{{$value->infor->image}}"
                                         alt="ảnh sản phẩm">
                                    <div class="box-absolute">
                                        <div class="discount-box">Giảm {{round( 100 - ($value->promotional_price / $value->price * 100))}}%</div>
                                    </div>
                                    @if($value->type_sale == 1)
                                        <div class="count_down_fl">
                                            <p class="coun_down text-center">
                                                <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.4987 5.14581V7.31248L7.85286 8.12498M6.4987 2.70831C3.95589 2.70831 1.89453 4.76967 1.89453 7.31248C1.89453 9.85529 3.95589 11.9166 6.4987 11.9166C9.04151 11.9166 11.1029 9.85529 11.1029 7.31248C11.1029 4.76967 9.04151 2.70831 6.4987 2.70831ZM6.4987 2.70831V1.08331M5.41536 1.08331H7.58203M11.0102 3.029L10.1977 2.2165L10.604 2.62275M1.98717 3.029L2.79967 2.2165L2.39342 2.62275"
                                                        stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="time_coundown" id="time_end"
                                                      data-end="{{date('l, F d Y h:i:s', strtotime($value->time_end))}}">
                                                    <span class="day"></span>
                                                    <span class="hours"></span>
                                                    <span class="minutes"></span>
                                                    <span class="seconds"></span></span>
                                            </p>
                                        </div>
                                    @endif
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
                                <span>{{$value->infor->parameter_one}}</span>
                                <span>{{$value->infor->parameter_two}}</span>
                                <span>{{$value->infor->parameter_three}}</span>
                                <span>{{$value->infor->parameter_four}}</span>
                            </div>
                            <div class="product-price">
                                <span class="price">{{number_format($value->promotional_price)}}₫</span>
                                <del class="price-old">{{number_format($value->price)}}₫</del>
                            </div>
                            <div class="product-status">
                                <span>Mới 100%</span>
                                @if($value->star)
                                    <div class="product-rate">
                                        <div class="star-rating" style="--rating:{{$value->star}}"></div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $product->appends(request()->all())->links('web.partials.paginate') }}
            </div>
            @else
            <p class="text_search">Không tìm thấy kết quả bạn cần tìm</p>
                @endif
        </div>
    </div>
@stop
@section('script_page')
    <script src="{{asset('dist/category/category.js')}}"></script>
@stop
