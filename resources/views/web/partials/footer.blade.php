@php
    $contact_infor = \App\Models\IntroduceModel::where('display',1)->where('type',0)->get();
    $policy = \App\Models\IntroduceModel::where('display',1)->where('type',1)->get();
    $other_infor = \App\Models\IntroduceModel::where('display',1)->where('type',0)->get();
@endphp
<footer class="footer">
    <div class="container footer-end">
        <div class="top_ft">
            <div class="item-menu">
                <span class="title_item title-menu title-menu1">Thông tin liên hệ <i
                        class="fa fa-angle-down hidden"></i></span>
                <div class="bottom-nav nav-bottom1">
                    <ul>
                        @foreach($contact_infor as $item)
                        <li class="first-item">
                            <a href="{{url('introduce/'.$item->id)}}">{{$item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="item-menu">
                <span class="title_item title-menu title-menu2">Chính sách <i
                        class="fa fa-angle-down hidden"></i></span>
                <div class="bottom-nav nav-bottom2">
                    <ul>
                        @foreach($policy as $item)
                        <li class="first-item">
                            <a href="{{url('introduce/'.$item->id)}}">{{$item->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="item-menu">
                <span class="title_item title-menu title-menu3">Thông tin khác <i
                        class="fa fa-angle-down hidden"></i></span>
                <div class="bottom-nav nav-bottom3">
                    <ul>
                        @foreach($other_infor as $item)
                        <li class="first-item">
                            <a href=""> Giải đáp mua hàng Online </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="fanpage item-menu">
                <span class="title_item">Hỗ trợ thanh toán</span>
                <div class="bank-ft">
                    <img src="https://onewaymobile.vn/images/icon/bank1.png" alt="" class="img-responsive img-footer-pay" width="241px"
                         height="33px">
                    <img src="https://onewaymobile.vn/images/icon/bank2.png" alt="" class="img-responsive img-footer-pay" width="117px"
                         height="33px">
                </div>
                <div class="dmca-protec">
                    <a href="" target="_blank" class="img-dk-ft">
                        <img src=" https://onewaymobile.vn/images/config/c52a1034a68361dd3892_1666686156.jpg"
                             class="img-responsive img" style="width: 133px; height: 50px">
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright_">
            <div class="copyright_right" style="color: #999999">
                <span>Copyright © 2023 - Bản quyền thuộc về Hebi Mobile.</span>
            </div>
            <div class="bot_foot_right">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/ONEWAY.416CAUGIAY/"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://bit.ly/33UHrmv"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="https://bit.ly/2XtNtIJ"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/"><i class="fab fa-google"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="catpro" class="danhmuc">
        <div class="category">
            <nav>
                <ul class="sub-menu">
                    <li class="menubottom " data-id="168">
                        <div class="show_par" href="" class="icon_hover" title="Điện thoại">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/dienthoai_1663642681.svg"/
                                class="img-responsive icon-img-footer"> Điện thoại
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="186">
                        <div class="show_par" href="" class="icon_hover" title="Máy cũ">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/dienthoai_quasudung_1665147017.svg"/
                                class="img-responsive icon-img-footer"> Máy cũ
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="7">
                        <div class="show_par" href="" class="icon_hover" title="Máy tính bảng">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/icon_ipad-mini_1574932835.png"/
                                class="img-responsive icon-img-footer"> Máy tính bảng
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="9">
                        <div class="show_par" href="" title="Macbook">
                            <div class="icon_plus">
                                <a href="https://onewaymacbook.vn/"> <img width="30" height="30"
                                                                          src="https://onewaymobile.vn/images/menus/macbook_1663659654.svg"/
                                    class="img-responsive icon-img-footer"> Macbook </a></div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="169">
                        <div class="show_par" href="" class="icon_hover" title="Đồng hồ thông minh">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/dong-ho-thong-minh_1665660274.svg"/
                                class="img-responsive icon-img-footer"> Đồng hồ thông minh
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="150">
                        <div class="show_par" href="" class="icon_hover" title="Nhà thông minh">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/nhathongminh_1663659296.svg"/
                                class="img-responsive icon-img-footer"> Nhà thông minh
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="11">
                        <div class="show_par" href="" class="icon_hover" title="Phụ kiện">
                            <div class="icon_plus">
                                <img width="30" height="30" src="https://onewaymobile.vn/images/menus/accessory-onewaymobile_1671698209.svg" class="img-responsive icon-img-footer"> Phụ kiện
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="258">
                        <div class="show_par" href="" class="icon_hover" title="Âm thanh">
                            <div class="icon_plus">
                                <img width="30" height="30"
                                     src="https://onewaymobile.vn/images/menus/am-thanh_1670425919.svg" class="img-responsive icon-img-footer"> Âm thanh
                            </div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="156">
                        <div class="show_par" href="" title="Khuyến mại">
                            <div class="icon_plus">
                                <a href="https://onewaymobile.vn/khuyen-mai.html"> <img width="30" height="30"
                                                                                        src="https://onewaymobile.vn/images/menus/khuyenmai_1663659727.svg"/
                                    class="img-responsive icon-img-footer"> Khuyến mại </a></div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="89">
                        <div class="show_par" href="" title="Tin tức">
                            <div class="icon_plus">
                                <a href="{{url('news')}}"> <img width="30" height="30"
                                                                                     src="https://onewaymobile.vn/images/menus/tintuc_1663659902.svg"/
                                    class="img-responsive icon-img-footer"> Tin tức </a></div>
                        </div>
                    </li>
                    <li class="menubottom " data-id="60">
                        <div class="show_par" href="" title="Trả góp">
                            <div class="icon_plus">
                                <a href="https://onewaymobile.vn/tra-gop.html"> <img width="30" height="30"
                                                                                     src="https://onewaymobile.vn/images/menus/tragop_1663659805.svg"/
                                    class="img-responsive icon-img-footer"> Trả góp </a></div>
                        </div>
                    </li>
                </ul>
                <div class="side-right">
                    <div class="show_cat show_cat168">
                        <ul class="me-float">
                            <li>
                                <div href="https://onewaymobile.vn/dien-thoai-pc106.html" title="Điện thoại">
                                    <a href="https://onewaymobile.vn/dien-thoai-pc106.html"
                                       style="display:flex; line-height:20px;">
                                        <img width="20" height="20"
                                             src="https://onewaymobile.vn/images/menus/dienthoai_1663642681.svg"
                                             class="img-responsive"
                                             style="padding: 0; height: 20px; width: 20px; margin: 0 10px 0 0; object-fit: contain;"/>
                                        <span>Điện thoại</span>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div href="https://onewaymobile.vn/iphone-pc29.html" title="iPhone">
                                    <a href="https://onewaymobile.vn/iphone-pc29.html">
                                        <span> iPhone</span>
                                    </a>
                                </div>
                                <ul class="me-float ul-child">
                                    <li>
                                        <a href="https://onewaymobile.vn/iphone-14-series-pc105.html"
                                           title="iPhone 14 Series">
                                            iPhone 14 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/iphone-13-series-pc86.html"
                                           title="iPhone 13 Series">
                                            iPhone 13 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/iphone-12-series-pc79.html"
                                           title="iPhone 12 Series">
                                            iPhone 12 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/iphone-11-series-pc50.html"
                                           title="iPhone 11 Series">
                                            iPhone 11 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/iphone-se-pc77.html" title="iPhone SE">
                                            iPhone SE </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div href="https://onewaymobile.vn/samsung-pc51.html" title="Samsung">
                                    <a href="https://onewaymobile.vn/samsung-pc51.html">
                                        <span> Samsung</span>
                                    </a>
                                </div>
                                <ul class="me-float ul-child">
                                    <li>
                                        <a href="https://onewaymobile.vn/z-series-pc81.html" title="Z Series">
                                            Z Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/s23-series-pc199.html" title="S23 Series">
                                            S23 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/s22-series-pc94.html" title="S22 Series">
                                            S22 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/s21-series-pc80.html" title="S21 Series">
                                            S21 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/s20-series-pc76.html" title="S20 Series">
                                            S20 Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/a-series-pc83.html" title="A Series">
                                            A Series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/m-series-pc84.html" title="M Series">
                                            M Series </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div href="https://onewaymobile.vn/xiaomi-pc88.html" title="Xiaomi">
                                    <a href="https://onewaymobile.vn/xiaomi-pc88.html">
                                        <span> Xiaomi</span>
                                    </a>
                                </div>
                                <ul class="me-float ul-child">
                                    <li>
                                        <a href="https://onewaymobile.vn/mi-series-pc102.html" title="Mi series">
                                            Mi series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/redmi-series-pc103.html" title="Redmi series">
                                            Redmi series </a>
                                    </li>
                                    <li>
                                        <a href="https://onewaymobile.vn/poco-series-pc104.html" title="POCO series">
                                            POCO series </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <div class="hidden-lg hidden-md bottom">
        <ul>
            <li>
                <a href="/">
                    <i class="fa fa-home"></i>
                    <span>Trang chủ</span>
                </a>

            </li>
            <li>
                <a alt="Hệ thống cửa hàng" href="/he-thong-cua-hang">
                    <i class="fa fa-store"></i>
                    <span>Cửa hàng</span>
                </a>
            </li>
            <li>
                <a href="/lien-he.html" id="modal_support">
                    <i class="fa fa-address-card"></i>
                    <span>Liên hệ</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" id="procat">
                    <i class="fa fa-list"></i>
                    <span>Danh mục</span>
                </a>
            </li>
            <li>
                <a href="{{url('news')}}">
                    <i class="fa fa-newspaper"></i>
                    <span>Tin tức</span>
                </a>
            </li>
        </ul>
    </div>
</footer>


