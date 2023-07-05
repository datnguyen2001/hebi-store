<div class="bor_navigation">
    <div class="navigation ">
        <div class="container">
            <div class="visible-xs visible-sm dpl bar_mobile">
                <div class="header_menu text-center">
                    <div class="logo">
                        <a href="{{url('/')}}" title="Hebi Mobile">
                            <img src="{{asset('assets/images/logo.png')}}"
                                 alt="Hebi Mobile" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="search-mobiles">
                        <div id="search-mobile" class="search">
                            <form action="" name="search_form" id="search_form" method="get">
                                <div id="search_form_mobile">
                                    <input type="text" value="" placeholder="Tìm kiếm sản phẩm" name="keyword"
                                           class="navigation__search__input" id="navigation__search__input"/>
                                    <button type="submit" class="searchbt" id='searchbt' class='searchbt'><i
                                            class="fas fa-search"></i></button>
                                    {{--                                        <input type='hidden' name="module" id='link_search' value="" />--}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex">
                        <a class="icon-phone-xb mobile-phone" href="tel::0978129116">
                            <img src="https://onewaymobile.vn/images/phone-call.svg" alt=""
                                 class="img-responsive img-icon"
                                 width="24px" height="24px">
                        </a>
                        <a class="icon-phone-xb"
                           href="https://onewaymobile.vn/index.php?module=products&view=cart&task=cart">
                            <img src="https://onewaymobile.vn/images/shopping-bag.svg" alt=""
                                 class="img-responsive img-icon"
                                 width="24px" height="24px">
                        </a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center bar_desktop">
                <div class="col-md-7 col-row-left">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-4 col-row-left-one">
                            <div class="logo-menu">
                                <div class="logo">
                                    <a href="{{url('/')}}" title="Hebi Mobile">
                                        <img
                                            src="{{asset('assets/images/logo.png')}}"
                                            alt="Hebi Mobile" class="img-responsive" width="50px" height="48px"/>
                                    </a>
                                </div>
                                <div class="menu_show align-items-center tab-click" style="cursor: pointer">
                                    <img src="https://onewaymobile.vn/images/menu.svg" alt="Hebi Mobile"
                                         class="image-show-menu visible-md-block visible-lg-block" width="16px"
                                         height="16px">
                                    <span class="catpro">Danh mục</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-row-left-two">
                            <div class="search_1">

                                <div id="search" class="search ">
                                    <div id="collapseExample" class="collapse_search">
                                        <form action="" name="search_form" id="search_form" method="get">
                                            <input type="text" value=""
                                                   placeholder="Tìm kiếm sản phẩm"
                                                   name="keyword" class="keyword" id="autocomplete"/>
                                            <button type="submit" class="submit_form_search"><i class="fas fa-search"
                                                                                                style="font-weight: 900"></i>
                                            </button>
                                            <input type='hidden' name="module" id='link_search'
                                                   value="https://onewaymobile.vn/tim-kiem"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-row-right">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="position-relative">
                                <div class="d-flex align-items-center justify-content-end">
                                        <span class="icon-phone-xb">
                                            <img src="https://onewaymobile.vn/images/phone-call.svg" alt=""
                                                 class="img-responsive" width="24px" height="24px">
                                        </span>
                                    <a href="tel::0978129116" class="link-to-hotline">
                                        <div class="hotline-head">
                                            <p class="title-hotline">Tổng đài</p>
                                            <b>0978129116</b>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <div class="d-flex align-items-center justify-content-end">
                                        <span class="icon-phone-xb">
                                        <img src="https://onewaymobile.vn/images/map-pin.svg" alt=""
                                             class="img-responsive" width="24px" height="24px">
                                        </span>

                                    <a href="https://onewaymobile.vn/he-thong-cua-hang" class="link-to-hotline">
                                        <div class="hotline-head">
                                            <p class="title-hotline">Chỉ đường đến</p>
                                            <b>Showroom</b>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative">
                                <div class="d-flex align-items-center justify-content-end">
                                        <span class="icon-phone-xb">
                                            <img src="https://onewaymobile.vn/images/shopping-bag.svg" alt=""
                                                 class="img-responsive" width="24px" height="24px">
                                        </span>
                                    <span class="link-to-hotline" data-bs-toggle="offcanvas"
                                          data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <div class="hotline-head">
                                            <p class="title-hotline">Giỏ hàng</p>
                                            <b>Sản phẩm <span>0</span></b>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-show-click">
                <div class="menu-click for-click">
                    <div class="position-absolute">
                        <div id='cssmenu_content' class="position-relative menu ">

                            <ul class='menu-product list-unstyled '>
                                <li class='level_0 first-item' style="padding-top: 6px">
                                    <a href='https://onewaymobile.vn/dien-thoai-pc106.html' class='lv_0'>
                                        <span><img onerror='this.src="/images/NA-icon.svg"'
                                                   src=https://onewaymobile.vn/images/menus/dienthoai_1663642681.svg
                                                   alt=Điện thoại width='20px' height='20px'>Điện thoại</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_168' class='wrapper_children_level0'>
                                        <li class='  level_1 first-item child_168'><a
                                                href='https://onewaymobile.vn/iphone-pc29.html'> iPhone</a>
                                            <ul id='c_6' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 first-item child_6'><a
                                                        href='https://onewaymobile.vn/iphone-14-series-pc105.html'>
                                                        iPhone 14 Series</a>
                                                <li class='  level_2 first-item last-item child_6'><a
                                                        href='https://onewaymobile.vn/iphone-13-series-pc86.html'>
                                                        iPhone 13 Series</a>
                                                <li class='  level_2 first-item child_6'><a
                                                        href='https://onewaymobile.vn/iphone-12-series-pc79.html'>
                                                        iPhone 12 Series</a>
                                                <li class='  level_2 first-item child_6'><a
                                                        href='https://onewaymobile.vn/iphone-11-series-pc50.html'>
                                                        iPhone 11 Series</a>
                                                <li class='  level_2 first-item child_6'><a
                                                        href='https://onewaymobile.vn/iphone-se-pc77.html'> iPhone
                                                        SE</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_168'><a
                                                href='https://onewaymobile.vn/samsung-pc51.html'> Samsung</a>
                                            <ul id='c_10' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/z-series-pc81.html'> Z Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/s23-series-pc199.html'> S23
                                                        Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/s22-series-pc94.html'> S22
                                                        Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/s21-series-pc80.html'> S21
                                                        Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/s20-series-pc76.html'> S20
                                                        Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/a-series-pc83.html'> A Series</a>
                                                <li class='  level_2 child_10'><a
                                                        href='https://onewaymobile.vn/m-series-pc84.html'> M Series</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_168'><a
                                                href='https://onewaymobile.vn/xiaomi-pc88.html'> Xiaomi</a>
                                            <ul id='c_149' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_149'><a
                                                        href='https://onewaymobile.vn/mi-series-pc102.html'> Mi
                                                        series</a>
                                                <li class='  level_2 child_149'><a
                                                        href='https://onewaymobile.vn/redmi-series-pc103.html'> Redmi
                                                        series</a>
                                                <li class='  level_2 child_149'><a
                                                        href='https://onewaymobile.vn/poco-series-pc104.html'> POCO
                                                        series</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_7'><a
                                        href='https://onewaymobile.vn/may-tinh-bang-pc73.html' class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/icon_ipad-mini_1574932835.png
                                                alt=Máy tính bảng width='20px' height='20px'>Máy tính bảng</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_7' class='wrapper_children_level0'>
                                        <li class='  level_1 child_7'><a href='https://onewaymobile.vn/ipad-pc30.html'>
                                                Apple iPad</a>
                                            <ul id='c_143' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 last-item child_143'><a
                                                        href='https://onewaymobile.vn/ipad-pro-moi-pc82.html'> iPad Pro
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-air-moi-pc52.html'> iPad Air
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-gen-moi-pc53.html'> iPad Gen
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-mini-moi-pc54.html'> iPad
                                                        Mini Series</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_7'><a
                                                href='https://onewaymobile.vn/galaxy-tab-pc131.html'> Galaxy Tab</a>
                                            <ul id='c_185' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_185'><a
                                                        href='https://onewaymobile.vn/tab-s-series-pc132.html'> Tab S
                                                        Series</a>
                                                <li class='  level_2 child_185'><a
                                                        href='https://onewaymobile.vn/tab-a-series-pc133.html'> Tab A
                                                        Series</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_7'><a
                                        href='https://onewaymobile.vn/may-tinh-bang-pc73.html' class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/icon_ipad-mini_1574932835.png
                                                alt=Máy tính bảng width='20px' height='20px'>Laptop</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_7' class='wrapper_children_level0'>
                                        <li class='  level_1 child_7'><a href='https://onewaymobile.vn/ipad-pc30.html'>
                                                Apple iPad</a>
                                            <ul id='c_143' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 last-item child_143'><a
                                                        href='https://onewaymobile.vn/ipad-pro-moi-pc82.html'> iPad Pro
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-air-moi-pc52.html'> iPad Air
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-gen-moi-pc53.html'> iPad Gen
                                                        Series</a>
                                                <li class='  level_2 child_143'><a
                                                        href='https://onewaymobile.vn/ipad-mini-moi-pc54.html'> iPad
                                                        Mini Series</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_7'><a
                                                href='https://onewaymobile.vn/galaxy-tab-pc131.html'> Galaxy Tab</a>
                                            <ul id='c_185' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_185'><a
                                                        href='https://onewaymobile.vn/tab-s-series-pc132.html'> Tab S
                                                        Series</a>
                                                <li class='  level_2 child_185'><a
                                                        href='https://onewaymobile.vn/tab-a-series-pc133.html'> Tab A
                                                        Series</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_169'><a
                                        href='https://onewaymobile.vn/dong-ho-thong-minh-pc108.html' class='lv_0'>
                                        <span><img onerror='this.src="/images/NA-icon.svg"'
                                                   src=https://onewaymobile.vn/images/menus/dong-ho-thong-minh_1665660274.svg
                                                   alt=Đồng hồ thông minh width='20px' height='20px'>Đồng hồ thông minh</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_169' class='wrapper_children_level0'>
                                        <li class='  level_1 child_169'><a
                                                href='https://onewaymobile.vn/apple-watch-pc61.html'> Apple Watch</a>
                                            <ul id='c_160' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-ultra-pc140.html'>
                                                        Apple Watch Ultra</a>
                                                <li class='  level_2 child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-series-8-pc134.html'>
                                                        Apple Watch Series 8</a>
                                                <li class='  level_2 last-item child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-series-7-pc135.html'>
                                                        Apple Watch Series 7</a>
                                                <li class='  level_2 child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-series-6-pc136.html'>
                                                        Apple Watch Series 6</a>
                                                <li class='  level_2 child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-series-3-pc139.html'>
                                                        Apple Watch Series 3</a>
                                                <li class='  level_2 child_160'><a
                                                        href='https://onewaymobile.vn/apple-watch-se-pc187.html'> Apple
                                                        Watch SE</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_169'><a
                                                href='https://onewaymobile.vn/xiaomi-watch-pc109.html'> Xiaomi Watch</a>
                                            <ul id='c_161' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_161'><a
                                                        href='https://onewaymobile.vn/smart-band-pc141.html'> Smart
                                                        Band</a>
                                                <li class='  level_2 child_161'><a
                                                        href='https://onewaymobile.vn/watch-s1-active-pc142.html'> Watch
                                                        S1 Active</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_169'><a
                                                href='https://onewaymobile.vn/amazfit-watch-pc111.html'> Amazfit
                                                Watch</a>
                                            <ul id='c_178' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_178'><a
                                                        href='https://onewaymobile.vn/gtr-series-pc143.html'> GTR
                                                        Series</a>
                                                <li class='  level_2 child_178'><a
                                                        href='https://onewaymobile.vn/t-rex-series-pc144.html'> T-Rex
                                                        Series</a>
                                                <li class='  level_2 child_178'><a
                                                        href='https://onewaymobile.vn/gts-series-pc145.html'> GTS
                                                        Series</a>
                                                <li class='  level_2 child_178'><a
                                                        href='https://onewaymobile.vn/bip-3-pro-pc146.html'> Bip 3
                                                        Pro</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_169'><a
                                                href='https://onewaymobile.vn/huawei-watch-pc110.html'> Huawei Watch</a>
                                            <ul id='c_179' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_179'><a
                                                        href='https://onewaymobile.vn/gt3-series-pc147.html'> GT3
                                                        Series</a>
                                                <li class='  level_2 child_179'><a
                                                        href='https://onewaymobile.vn/band-7-pc148.html'> Band 7</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_150'><a
                                        href='https://onewaymobile.vn/nha-thong-minh-pc89.html' class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/nhathongminh_1663659296.svg
                                                alt=Nhà thông minh width='20px' height='20px'>Nhà thông minh</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_150' class='wrapper_children_level0'>
                                        <li class='  level_1 child_150'><a
                                                href='https://onewaymobile.vn/robot-hut-bui-pc91.html'> Robot hút
                                                bụi</a>
                                            <ul id='c_152' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_152'><a
                                                        href='https://onewaymobile.vn/dreame-pc112.html'> Dreame</a>
                                                <li class='  level_2 child_152'><a
                                                        href='https://onewaymobile.vn/vacuum-mop-pc113.html'> Vacuum
                                                        Mop</a>
                                                <li class='  level_2 child_152'><a
                                                        href='https://onewaymobile.vn/roborock-pc114.html'> Roborock</a>
                                                <li class='  level_2 child_152'><a
                                                        href='https://onewaymobile.vn/viomi-pc193.html'> Viomi</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 last-item child_150'><a
                                                href='https://onewaymobile.vn/may-loc-khong-khi-pc92.html'> Máy lọc
                                                không khí</a>
                                            <ul id='c_154' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_154'><a
                                                        href='https://onewaymobile.vn/xiaomi-air-purifier-pc115.html'>
                                                        Xiaomi Air Purifier</a>
                                                <li class='  level_2 child_154'><a
                                                        href='https://onewaymobile.vn/lg-puricare-pc116.html'> LG
                                                        Puricare</a>
                                                <li class='  level_2 child_154'><a
                                                        href='https://onewaymobile.vn/levoit-core-pc117.html'> Levoit
                                                        Core</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_150'><a
                                                href='https://onewaymobile.vn/camera-ai-pc95.html'> Camera AI</a>
                                            <ul id='c_157' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_157'><a
                                                        href='https://onewaymobile.vn/camera-xiaomi-pc150.html'>
                                                        Xiaomi</a>
                                                <li class='  level_2 child_157'><a
                                                        href='https://onewaymobile.vn/camera-ezviz-pc152.html'>
                                                        Ezviz</a>
                                                <li class='  level_2 child_157'><a
                                                        href='https://onewaymobile.vn/camera-imou-pc152.html'> Imou</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_150'><a
                                                href='https://onewaymobile.vn/do-gia-dung-thong-minh-pc96.html'> Đồ gia
                                                dụng thông minh</a>
                                            <ul id='c_158' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_158'><a
                                                        href='https://onewaymobile.vn/can-thong-minh-pc156.html'> Cân
                                                        thông minh</a>
                                                <li class='  level_2 child_158'><a
                                                        href='https://onewaymobile.vn/ban-chai-dien-pc153.html'> Bàn
                                                        chải điện</a>
                                                <li class='  level_2 child_158'><a
                                                        href='https://onewaymobile.vn/noi-chien-khong-dau-pc154.html'>
                                                        Nồi chiên không dầu</a>
                                                <li class='  level_2 child_158'><a
                                                        href='https://onewaymobile.vn/quat-thong-minh-pc155.html'> Quạt
                                                        thông minh</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_150'><a
                                                href='https://onewaymobile.vn/smart-tivi-pc100.html'> Smart Tivi</a>
                                            <ul id='c_162' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_162'><a
                                                        href='https://onewaymobile.vn/smart-tivi-pc100.html'> TV
                                                        Xiaomi</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_150'><a
                                                href='https://onewaymobile.vn/maychieu-pc101.html'> Máy chiếu</a>
                                            <ul id='c_163' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_163'><a
                                                        href='https://onewaymobile.vn/may-chieu-pc101.html'> Xiaomi</a>
                                                <li class='  level_2 child_163'><a
                                                        href='https://onewaymobile.vn/may-chieu-samsung-pc159.html'>
                                                        Samsung</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_11'><a href='https://onewaymobile.vn/phu-kien-pc32.html'
                                                                      class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/accessory-onewaymobile_1671698209.svg
                                                alt=Phụ kiện width='20px' height='20px'>Phụ kiện</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_11' class='wrapper_children_level0'>
                                        <li class='  level_1 child_11'><a
                                                href='https://onewaymobile.vn/bo-sac-pc74.html'> Bộ sạc</a>
                                            <ul id='c_135' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_135'><a
                                                        href='https://onewaymobile.vn/pin-du-phong-pc181.html'> Pin dự
                                                        phòng</a>
                                                <li class='  level_2 child_135'><a
                                                        href='https://onewaymobile.vn/cap-sac-pc183.html'> Cáp sạc</a>
                                                <li class='  level_2 child_135'><a
                                                        href='https://onewaymobile.vn/sac-khong-day-pc184.html'> Sạc
                                                        không dây</a>
                                                <li class='  level_2 child_135'><a
                                                        href='https://onewaymobile.vn/cu-sac-pc182.html'> Củ sạc</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 last-item child_11'><a
                                                href='https://onewaymobile.vn/bao-da-ban-phim-pc75.html'> Bao da - Bàn
                                                phím</a>
                                            <ul id='c_136' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_136'><a
                                                        href='https://onewaymobile.vn/bao-da-ban-phim-apple-pc185.html'>
                                                        Apple</a>
                                                <li class='  level_2 child_136'><a
                                                        href='https://onewaymobile.vn/bao-da-ban-phim-samsung-pc186.html'>
                                                        Samsung</a>
                                                <li class='  level_2 child_136'><a
                                                        href='https://onewaymobile.vn/zagg-pc188.html'> Zagg</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_11'><a
                                                href='https://onewaymobile.vn/phu-kien-khac-pc60.html'> Phụ kiện
                                                khác</a>
                                            <ul id='c_122' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_122'><a
                                                        href='https://onewaymobile.vn/but-cam-ung-pc160.html'> Bút cảm
                                                        ứng</a>
                                                <li class='  level_2 child_122'><a
                                                        href='https://onewaymobile.vn/airtag-pc161.html'> Airtag</a>
                                                <li class='  level_2 child_122'><a
                                                        href='https://onewaymobile.vn/tham-lot-ban-phim-pc162.html'>
                                                        Thảm lót bàn phím</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_11'><a
                                                href='https://onewaymobile.vn/action-camera-pc87.html'> Action
                                                Camera</a>
                                            <ul id='c_148' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_148'><a
                                                        href='https://onewaymobile.vn/dji-pc166.html'> DJI</a>
                                                <li class='  level_2 child_148'><a
                                                        href='https://onewaymobile.vn/gopro-pc167.html'> Gopro</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_11'><a
                                                href='https://onewaymobile.vn/op-lung-pc90.html'> Ốp lưng</a>
                                            <ul id='c_151' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_151'><a
                                                        href='https://onewaymobile.vn/op-lung-apple-pc163.html'>
                                                        Apple</a>
                                                <li class='  level_2 child_151'><a
                                                        href='https://onewaymobile.vn/op-lung-uag-pc164.html'> UAG</a>
                                                <li class='  level_2 child_151'><a
                                                        href='https://onewaymobile.vn/op-lung-gear-4-pc165.html'>
                                                        Gear4</a>
                                                <li class='  level_2 child_151'><a
                                                        href='https://onewaymobile.vn/spigen-pc200.html'> Spigen</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_11'><a
                                                href='https://onewaymobile.vn/kinh-cuong-luc-pc168.html'> Kính cường
                                                lực</a>
                                            <ul id='c_245' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_245'><a
                                                        href='https://onewaymobile.vn/cuong-luc-dien-thoai-pc169.html'>
                                                        Điện thoại</a>
                                                <li class='  level_2 child_245'><a
                                                        href='https://onewaymobile.vn/cuong-luc-may-tinh-bang-pc170.html'>
                                                        Máy tính bảng</a>
                                                <li class='  level_2 child_245'><a
                                                        href='https://onewaymobile.vn/dong-ho-thong-minh-1-pc171.html'>
                                                        Đồng hồ thông minh</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_258'><a
                                        href='https://onewaymobile.vn/am-thanh-pc190.html' class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/am-thanh_1670425919.svg alt=Âm
                                                thanh width='20px' height='20px'>Âm thanh</span><i
                                            class='fa fa-angle-right'></i></a>
                                    <ul id='c_258' class='wrapper_children_level0'>
                                        <li class='  level_1 child_258'><a
                                                href='https://onewaymobile.vn/tai-nghe-pc63.html'> Tai Nghe</a>
                                            <ul id='c_132' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/bang-olufsen-pc195.html'> Bang
                                                        &amp; Olufsen</a>
                                                <li class='  level_2 last-item child_132'><a
                                                        href='https://onewaymobile.vn/samsung-pc196.html'> Samsung</a>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/sennheiser-pc197.html'>
                                                        Sennheiser</a>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/soundpeats-pc198.html'>
                                                        SoundPEATS</a>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/apple-pc172.html'> Apple</a>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/sony-pc173.html'> Sony</a>
                                                <li class='  level_2 child_132'><a
                                                        href='https://onewaymobile.vn/tai-nghe-jbl-pc174.html'> JBL</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_258'><a
                                                href='https://onewaymobile.vn/loa-di-dong-pc72.html'> Loa di động</a>
                                            <ul id='c_133' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/bang-amp;-olufsen-pc175.html'>
                                                        Bang &amp; Olufsen</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/jbl-pc176.html'> JBL</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/harman-kardon-pc177.html'> Harman
                                                        Kardon</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/marshall-pc178.html'> Marshall</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/sony-pc179.html'> Sony</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/lg-pc180.html'> LG</a>
                                                <li class='  level_2 child_133'><a
                                                        href='https://onewaymobile.vn/apple-homepod-1-pc189.html'>
                                                        Apple</a>
                                            </ul>
                                        </li>
                                        <li class='  level_1 child_258'><a
                                                href='https://onewaymobile.vn/soundbar-pc191.html'> Soundbar</a>
                                            <ul id='c_259' class='wrapper_children wrapper_children_level1'>
                                                <li class='  level_2 child_259'><a
                                                        href='https://onewaymobile.vn/tai-nghe-jbl-pc174.html'> JBL</a>
                                            </ul>
                                    </ul>
                                </li>
                                <li class='  level_0  ' id='pr_89'><a href='{{url('news')}}'
                                                                      class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/tintuc_1663659902.svg alt=Tin
                                                tức width='20px' height='20px'>Tin tức</span><i
                                            class='fa fa-angle-right'></i></a>
                                <li class='level_0' style="padding-bottom: 7px"><a
                                        href='https://onewaymobile.vn/tra-gop.html'
                                        class='lv_0'> <span><img
                                                onerror='this.src="/images/NA-icon.svg"'
                                                src=https://onewaymobile.vn/images/menus/tragop_1663659805.svg alt=Trả
                                                góp width='20px' height='20px'>Tra cứu đơn hàng</span><i
                                            class='fa fa-angle-right'></i></a>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</div>
</div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header" style="background-color: #0a58ca">
        <h5 class="offcanvas-title text-center w-100 text-white" id="offcanvasRightLabel" style="padding-left: 20px">Giỏi hàng</h5>
        <button type="button" class="btn-close-cart" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex justify-content-between line_cart_small">
            <div class="d-flex flex-column align-items-center">
                <img src="https://onewaymobile.vn/images/products/2022/09/08/resized/14-1-2_1662618313.png" alt=""
                     class="img-cart-small">
                <div style="cursor: pointer">
                    <i class="fa-solid fa-circle-xmark mt-2" style="color: red;font-size: 15px;"></i>
                    <span style="color: red">Xóa</span>
                </div>
            </div>
            <div>
                <p class="title_sp_cart_small">Điện thoại Apple iPhone 14 Plus 256GB VN/A</p>
                <p class="type_cart_sp_small">Màu: Đỏ</p>
                <p class="price_sp_cart_small">23.290.000₫</p>
                <span class="number-input">
                    <button type="button"
                            onclick="down_quantity(2114)"
                            class="down"><i class="fa-solid fa-minus"></i>
                    </button>
                    <input type="number"
                           name="quantity_2114"
                           id="quantity_2114"
                           class="numbersOnly"
                           maxlength="5"
                           onblur="change_quantity(2114)"
                           value="1"/>
                    <button type="button"
                            onclick="up_quantity(2114)"
                            class="plus"><i class="fa-solid fa-plus"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <span class="title_end_small">Tổng tiền</span>
            <span class="total_end_small">23.290.000₫</span>
        </div>
        <button class="payment-btn-small">Thanh toán</button>
    </div>
</div>
