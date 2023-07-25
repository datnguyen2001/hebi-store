@extends('web.layout.master')
@section('title','Hebi Store')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/cart/cart.css">
@stop
{{--content of page--}}
@section('content')
    <div class="container">
        <div class="container-cart">
            <div class="nav-cart">
                <a href="https://onewaymobile.vn/" class="buy-more">
                    <i class="fa fa-angle-left"></i>
                    Mua thêm sản phẩm khác                </a>
                <a href="javascript:void(0)">Giỏ hàng của bạn</a>
            </div>
            <div class="content-cart">
                <div class="list-products">
                    <div class="product-cart1">
                        <div class="product-cart">
                            <div class="product-image text-center p-0">
                                <a href="https://onewaymobile.vn/dien-thoai-apple-iphone-14-128gb-new100-vna/-dp.html" title="Điện thoại Apple iPhone 14 128GB VN/A">
                                    <img src="https://onewaymobile.vn/images/products/2022/09/08/resized/14-1-5_1662617918.png" alt="dien-thoai-apple-iphone-14-128gb-new100-vna"
                                         class="img-responsive"
                                         onerror="javascript:this.src='https://onewaymobile.vn/images/not_picture.png'"/>
                                </a>
                                <a class="del-pro-link" data-id="2114"
                                   title="Xóa">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                         viewBox="0 0 15 15">
                                        <path d="M12.8,2.2A7.5,7.5,0,0,0,2.2,12.8,7.5,7.5,0,0,0,12.8,2.2Zm-.621,9.985A6.621,6.621,0,0,1,2.818,2.818a6.621,6.621,0,1,1,9.364,9.364Z"
                                              transform="translate(0)"/>
                                        <path d="M145.494,144.873l-2.685-2.685,2.685-2.685a.439.439,0,0,0-.622-.621l-2.685,2.685-2.685-2.685a.439.439,0,0,0-.621.621l2.685,2.685-2.685,2.685a.439.439,0,1,0,.621.621l2.685-2.685,2.685,2.685a.439.439,0,1,0,.621-.621Z"
                                              transform="translate(-134.668 -134.668)"/>
                                    </svg>
                                    Xóa                                    </a>
                            </div>
                            <div class="product-detail">
                                <div class="top_detail">
                                    <a class="product-name-cart" href="https://onewaymobile.vn/dien-thoai-apple-iphone-14-128gb-new100-vna/-dp.html"
                                       title="Điện thoại Apple iPhone 14 128GB VN/A">
                                        Điện thoại Apple iPhone 14 128GB VN/A                                        </a>
                                    <div class="fee visibleCart-xs">
                                        <p class="price-item">
                                            18.190.000đ                                            </p>
                                        <del class="old-price">19.390.000đ</del>
                                    </div>
                                </div>
                                <div class="price_detail">
                                    <div class="box_color">
                                        <span class="select_color"
                                              data-id="1">Màu: Đỏ                                            <i class="fa fa-caret-down"></i></span>
                                        <ul class="list_sub_item list_sub_item_1">
                                            <li class=" " onclick="change_color(2114,2113)">
                                                <img src="https://onewaymobile.vn/images/products/2022/09/08/resized/14-1-3_1662617918.png" alt="Trắng" class="img-responsive">
                                                <span>Trắng</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="quan visibleCart-xs">
                                            <span class="number-input">
                                                <button type="button"
                                                        onclick="down_quantity(2114)"
                                                        class="down">
                                                </button>
                                                <input type="number"
                                                       name="quantity_2114"
                                                       id="quantity_2114"
                                                       class="numbersOnly1"
                                                       maxlength="5"
                                                       onblur="change_quantity(2114)"
                                                       value="1"/>
                                                <button type="button"
                                                        onclick="up_quantity(2114)"
                                                        class="plus">
                                                </button>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-price-cart hiddenCart-xs">
                                <div class="fee">
                                    <p class="price-item">
                                        18.190.000đ                                        </p>
                                    <del class="old-price">19.390.000đ</del>
                                </div>
                                <div class="quan">
                                        <span class="number-input">
                                            <button type="button"
                                                    onclick="down_quantity(2114)"
                                                    class="down"></button>
                                            <input type="number"
                                                   name="quantity_2114"
                                                   id="quantity_2114"
                                                   class="numbersOnly1"
                                                   maxlength="5"
                                                   onblur="change_quantity(2114)"
                                                   value="1"/>
                                            <button type="button"
                                                    onclick="up_quantity(2114)"
                                                    class="plus"></button>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment">
                    <form action="" method="post" class="formPayment" id="formPayment">
                        <h3 class="h3_title">Thông tin mua hàng</h3>
                        <div class="mb-2">
                            <label for="gender1">
                                <input type="radio" name="gender" id="gender1" value="1" checked>
                                <span>Anh</span>
                            </label>
                            <label for="gender0">
                                <input type="radio" name="gender" id="gender0" value="0">
                                <span>Chị</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Họ tên">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input class="form-control" type="text" name="telephone" id="telephone" placeholder="Số điện thoại">
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input class="form-control" type="text" name="email" id="email"  placeholder="Email (Vui lòng điền email để nhận hóa đơn VAT)">
                            </div>
                        </div>
                        <h3 class="h3_title">Chọn cách thức nhận hàng</h3>
                        <input class="input-header" type="radio" name="type" value="1" id="one" checked="checked"/>
                        <label for="one">Giao tận nơi</label>

                        <input class="input-header" type="radio" value="2" name="type" id="two"/>
                        <label for="two">Nhận tại cửa hàng</label>
                        <article class="content one tabReceive">
                            <div class="" id="tab0">
                                <p class="tab-title">
                                    Chọn địa chỉ để biết thời gian và phí vận chuyển (nếu có)                                </p>
                                <div class="row row_1">
                                    <div class="col-md-6 col-xs-6 pd1">
                                        <select class="form-select" name="city" id="city">
                                            <option value="" selected hidden
                                                    disabled>Tỉnh/ Thành phố</option>
                                            <option value="89">
                                                An Giang</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xs-6 pd1">
                                        <select class="form-select" name="district" id="district">
                                            <option value="" selected hidden disabled>Quận/ Huyện</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-xs-12 pd1">
                                        <select class="form-select" name="ward" id="ward">
                                            <option value="" selected hidden disabled>Phường/ Xã</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-xs-12 pd1">
                                        <input class="form-control" type="text" name="address" id="address" placeholder="Số nhà, tên đường">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="content two tabReceive">
                            <div class="" id="tab1">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-select" name="store" id="store">
                                            <option value="" selected hidden disabled>Vui lòng chọn cửa hàng</option>
                                            <option value="19"  title="">
                                                416 Cầu Giấy - P.Dịch Vọng - Q.Cầu Giấy - TP.Hà Nội</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <div class="request_orther" style="padding-top: 30px">
                            <input class="form-control" type="text" name="note" id="note" placeholder="Yêu cầu khác (không bắt buộc)">
                        </div>

                        <label for="company" class="company" data-bs-toggle="collapse" data-bs-target="#collapseExampleCTY" aria-expanded="false" aria-controls="collapseExample">
                            <input type="checkbox" name="company" id="company" value="1">
                            <span>Xuất hóa đơn công ty</span>
                        </label>
                        <div class="collapse" id="collapseExampleCTY">
                            <div class="row bill_company">
                                <div class="col-md-12 col-xs-12">
                                    <input class="form-control" type="text" name="com_name" id="com_name" placeholder="Tên công ty">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="form-control" type="text" name="com_add" id="com_add" placeholder="Địa chỉ">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="form-control" type="text" name="com_tax" id="com_tax" placeholder="Mã số thuế">
                                </div>
                            </div>
                        </div>

                        <p class="total_end">Tổng tiền:
                            <span id="total_money">18.190.000đ</span>
                        </p>
                        <div class="btn-area">
                            <a href="javascript:void(0)" id="cod-btn" class="payment-btn"
                               title="Đặt hàng">
                                Đặt hàng                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script_page')

@stop
