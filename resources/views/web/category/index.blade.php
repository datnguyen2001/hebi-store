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
                <a href="">
                    <span class="name">Trang chủ</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="">
                    <span class="name">Điện thoại</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="list_cat_parent">
            <a class="cat_child" href="#">
                <span class="name">iPhone</span>
            </a>
            <a class="cat_child" href="#">
                <span class="name">iPhone</span>
            </a>
            <a class="cat_child" href="#">
                <span class="name">iPhone</span>
            </a>
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

                <a href="https://onewaymobile.vn/dien-thoai-pc106.html&amp;status=1" class="">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6668 3.33334L3.3335 12.6667" stroke="currentColor" stroke-opacity="0.87"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M4.33317 5.99999C5.25364 5.99999 5.99984 5.2538 5.99984 4.33332C5.99984 3.41285 5.25364 2.66666 4.33317 2.66666C3.4127 2.66666 2.6665 3.41285 2.6665 4.33332C2.6665 5.2538 3.4127 5.99999 4.33317 5.99999Z"
                            stroke="currentColor" stroke-opacity="0.87" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path
                            d="M11.6667 13.3333C12.5871 13.3333 13.3333 12.5871 13.3333 11.6667C13.3333 10.7462 12.5871 10 11.6667 10C10.7462 10 10 10.7462 10 11.6667C10 12.5871 10.7462 13.3333 11.6667 13.3333Z"
                            stroke="currentColor" stroke-opacity="0.87" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>


                    Giảm giá sốc </a>
                <a href="https://onewaymobile.vn/dien-thoai-pc106.html&amp;status=2" class="">

                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.9728 12.0566C15.8794 11.72 15.5728 11.5 15.2427 11.5C15.1661 11.5 15.0927 11.5133 15.0161 11.5366L13.0961 12.1434C12.4828 12.3367 11.9162 12.6533 11.4095 13.0466C10.8428 13.4833 10.2228 13.8399 9.72956 13.8399H6.88965C6.70636 13.8399 6.5563 13.6899 6.5563 13.5065C6.5563 13.3233 6.70634 13.1732 6.88965 13.1732H9.72956C10.1395 13.1732 10.4995 12.6832 10.3395 12.1798C10.2329 11.8499 9.90282 11.6432 9.55617 11.6432H7.72292C7.49961 11.6432 7.28295 11.5832 7.09291 11.4665L4.94627 10.1265C4.75295 10.0066 4.53292 9.94324 4.30961 9.94324H2.76628V9.77664C2.76628 9.4467 2.49956 9.17999 2.16963 9.17999L0.593276 9.17346C0.266584 9.17346 0 9.44018 0 9.77011V14.6434C0 14.9701 0.266714 15.2367 0.593276 15.2367L2.16988 15.2433C2.49982 15.2433 2.76653 14.9766 2.76653 14.6501V14.3334H3.01655C3.15982 14.3334 3.29983 14.3668 3.42991 14.4268L6.15313 15.7233C6.85644 16.0567 7.65972 16.0901 8.38633 15.8167C8.75967 15.6734 9.2097 15.5033 9.69632 15.32C11.6496 14.5833 14.3195 13.4167 15.5096 12.9635C15.8762 12.8268 16.0762 12.4334 15.9729 12.0568L15.9728 12.0566ZM1.38322 14.5133C1.11651 14.5133 0.903229 14.3 0.903229 14.0367C0.903229 13.7734 1.1165 13.5601 1.38322 13.5601C1.64655 13.5601 1.85981 13.7734 1.85981 14.0367C1.85993 14.2999 1.64654 14.5133 1.38322 14.5133Z"
                            fill="currentColor" fill-opacity="0.87"></path>
                        <path
                            d="M9.38129 0C6.92003 0 4.91748 2.02889 4.91748 4.52261C4.91748 7.01636 6.92 9.04553 9.38129 9.04553C11.8429 9.04553 13.8454 7.01652 13.8454 4.52261C13.8454 2.02874 11.8429 0 9.38129 0ZM9.38153 4.07413C10.1821 4.07413 10.8284 4.73488 10.8284 5.54515C10.8284 6.18668 10.4232 6.75092 9.82525 6.94378V7.17048C9.82525 7.42123 9.62745 7.62385 9.38153 7.62385C9.13561 7.62385 8.93781 7.42134 8.93781 7.17048V6.94378C8.33983 6.75094 7.93467 6.18668 7.93467 5.54515C7.93467 5.2944 8.13247 5.09178 8.37839 5.09178C8.61948 5.09178 8.82211 5.29429 8.82211 5.54515C8.82211 5.85866 9.07287 6.11425 9.38153 6.11425C9.69019 6.11425 9.94107 5.85866 9.94107 5.54515C9.94107 5.22682 9.69019 4.97122 9.38153 4.97122C8.58091 4.97122 7.93467 4.31047 7.93467 3.50032C7.93467 2.85879 8.33983 2.29455 8.93781 2.10169V1.875C8.93781 1.62412 9.13561 1.42162 9.38153 1.42162C9.62745 1.42162 9.82525 1.62414 9.82525 1.875V2.10169C10.4232 2.29465 10.8284 2.85892 10.8284 3.50032C10.8284 3.75108 10.6306 3.94887 10.3847 3.94887C10.1436 3.94887 9.94107 3.75107 9.94107 3.50032C9.94107 3.18681 9.69019 2.93122 9.38153 2.93122C9.07286 2.93122 8.82211 3.18681 8.82211 3.50032C8.82199 3.81853 9.07287 4.07413 9.38153 4.07413Z"
                            fill="currentColor" fill-opacity="0.87"></path>
                    </svg>

                    Trả góp 0% </a>
            </div>
        </div>
    </div>
    <div class="container content-cate-mobile">
    <div class="box">
        <div class="productList">
            @for($i=0;$i<20;$i++)
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
        <div class="pagination"><a id="load_more_button" class="load_more" data-pagecurrent="20" title="Next page"
                                   data-nextpage="20" onclick="load_product()" href="javascript: void(0);"
                                   data-list="list-product-hot">Xem thêm 20 sản phẩm <i
                    class="fas fa-angle-right ml-2"></i></a></div>
    </div>
    </div>
    <div class="container">
        <div class="grid-content-news">
            <div class="box-content">
                <div class="grid-box ">
                    <div class="boxdesc" id="boxdesc" data-height="500" style="max-height: 500px;">
                        <p dir="ltr">Điện thoại di động đang dần trở thành một vật bất ly thân trong cuộc sống hiện đại
                            ngày nay. Xem ngay những thông tin bạn cần phải biết trước khi mua “dế yêu” về phục vụ cuộc
                            sống hàng ngày.</p>
                        <p dir="ltr">Điện thoại phục vụ cho nhu cầu chụp ảnh thì các hãng hay hướng tới số lượng và chất
                            lượng trên cụm camera. Xu hướng hiện tại nhiều nhà sản xuất đang theo đuổi là nhiều camera
                            và độ phân giải cao.</p>

                        <p dir="ltr">Điện thoại giá rẻ, tầm trung hay cao cấp đa số đều có 3-4 camera được tích hợp. Độ
                            phân giải cũng được đẩy lên 48MP - 50MP ở trong tầm giá 4-5tr. Điện thoại tầm trung, cao cấp
                            thì nay đã được trang bị camera lên đến 108MP.</p>

                        <p dir="ltr">Tuy vậy, độ phân giải cao hay số lượng camera nó cũng chỉ là một yếu tố để quyết
                            định bức ảnh cho ra có đẹp hay không. Nó còn phụ thuộc vào nhiều yếu tố khác như chất lượng,
                            kích thước cảm biến hay phần mềm xử lý từ hãng.</p>

                        <p dir="ltr">&nbsp;</p>

                        <h2 dir="ltr">Phân loại điện thoại di động theo phân khúc</h2>

                        <h3 dir="ltr">Điện thoại giá rẻ (2-4 triệu)</h3>

                        <p dir="ltr">Điện thoại thông minh giá rẻ hiện nay đang có mức giá dao động từ khoảng 2 đến 4
                            triệu đồng.&nbsp;</p>

                        <ul>
                            <li dir="ltr">
                                <p dir="ltr">Ưu điểm: dòng điện thoại phân khúc này thường có màn hình lớn, pin trâu,
                                    rất phù hợp với những bạn học sinh, sinh viên có kinh tế eo hẹp.</p>
                            </li>
                            <li dir="ltr">
                                <p dir="ltr">Nhược điểm: thiết kế không ấn tượng, pin lớn nhưng không có sạc nhanh và
                                    camera không chất lượng.</p>
                            </li>
                        </ul>

                        <p dir="ltr">Một số mẫu điện thoại bán chạy nhất trong phân khúc này phải kể đến: Xiaomi Redmi
                            9A, 9C, 10C; Samsung Galaxy A03S, A12, A13; Oppo A16K,....Chi tiết về các sản phẩm mời các
                            bạn xem thêm <strong><a
                                    href="http://onewaymb.phongcachso.com/dien-thoai-pc106.html/filter/gia=tu-2-den-4-trieu"><span
                                        style="color:#ff0000">TẠI ĐÂY</span></a><span
                                    style="color:#ff0000">.</span></strong></p>

                        <p>&nbsp;</p>

                        <p dir="ltr">Dòng điện thoại nằm trong phân khúc điện thoại giá rẻ nhưng nổi bật nhờ những trang
                            bị tốt phải kể đến Tecno Mobile.&nbsp;</p>

                        <p dir="ltr">Với Tecno Spark 6 Go hay Tecno Spark 7T, 2 sản phẩm này giá chỉ hơn 2 triệu nhưng
                            lại mang những thông số của những chiếc smartphone giá 4 triệu như: bộ nhớ RAM 4GB, ROM
                            64GB, camera độ phân giải cao lên đến 48MP hay pin 6.000mAh,... <strong><a
                                    href="https://onewaymb.phongcachso.com"><span style="color:#ff0000">XEM NGAY</span></a><span
                                    style="color:#ff0000">&nbsp;</span></strong></p>

                        <h3 dir="ltr">Điện thoại tầm trung (4-10 triệu)</h3>

                        <p dir="ltr">Dòng điện thoại thông minh tầm trung nằm trong mức giá dao động từ 4 đến 10
                            triệu.</p>

                        <p dir="ltr">Điểm nổi bật của các điện thoại trong phân khúc này bao gồm: màn hình lớn, độ nét
                            tốt hơn (nhiều lựa chọn màn hình FullHD+, tần số quét cao 90Hz, 120Hz), cấu hình ổn, pin
                            trâu, camera khá, độ phân giải cao tới 108MP.</p>

                        <p dir="ltr">Thành công nhất trong phân khúc này là chắc chắn phải kể đến dòng Xiaomi Redmi Note
                            11 Series. Cao hơn một chút Oppo đang thống lĩnh thị trường với dòng Reno6Z và Reno7 vừa ra
                            mắt. Cạnh tranh trực tiếp với Oppo đang là dòng Galaxy A 2022 mới của Samsung bao gồm Galaxy
                            A23, A33, A53 5G.</p>

                        <h3 dir="ltr">Điện thoại cận cao cấp (10-15 triệu)</h3>

                        <p dir="ltr">Các mẫu điện thoại nằm trong phân khúc cận cao cấp sẽ có mức giá từ 10 - 15 triệu.
                            Chúng thường là các phiên bản rút gọn của những chiếc điện thoại cao cấp. Chính vì vậy, các
                            smartphone trong phân khúc này thường có cấu hình khá mạnh, camera ngon và thiết kế cũng
                            được trau chuốt khá nhiều.</p>

                        <p dir="ltr">Chúng ta có thể kể tới các sản phẩm tiêu biểu như Xiaomi 11T, Samsung Galaxy A73
                            5G, S21 FE 5G hay Oppo Reno7 5G,....</p>

                        <h3 dir="ltr">Điện thoại cao cấp (từ 15 triệu trở lên)</h3>

                        <p dir="ltr">Điện thoại cao cấp hay còn gọi là Flagship là những chiếc máy có giá trị cao từ
                            15-50 hay thậm chí cả trăm triệu. Các mẫu này luôn được các nhà sản xuất ưu ái những công
                            nghệ mới nhất, tốt nhất ở thời điểm máy ra mắt. Ví dụ như bộ vi xử lý mạnh nhất, camera độ
                            phân giải cao, nhiều tính năng thông minh hay công nghệ sạc nhanh vượt trội tới 165W.</p>

                        <p dir="ltr">Flagship đang bán chạy nhất 2022 kể từ đầu năm nay đứng số 1 luôn là iPhone 13 Pro
                            Max. Tiếp theo là các ông lớn tới từ nhà Android bao gồm Samsung Galaxy S22 Ultra, Oppo Find
                            X5 Pro (sắp ra mắt) hay Xiaomi 12 Pro,....</p>

                        <p dir="ltr">&nbsp;</p>

                        <h2 dir="ltr">Các tiêu chí cần phải biết khi chọn mua điện thoại tốt</h2>

                        <p dir="ltr">Khi chọn mua điện thoại thông minh, người dùng cần nắm bắt được một vài tiêu chí
                            dưới đây để lựa chọn cho mình một chiếc máy phù hợp nhất:</p>

                        <h3 dir="ltr">Thiết kế thời thượng</h3>

                        <p dir="ltr">Trước hết, chưa biết điện thoại ngon tới đâu nhưng ban đầu, cái “đập” vào mắt người
                            dùng chính là thiết kế của máy. Một chiếc máy tốt, không bao giờ mang thiết kế xấu. Vì vậy,
                            yếu tố thiết kế, cảm giác cầm nắm tốt là điều đầu tiên người dùng quan tâm khi chọn mua sản
                            phẩm.</p>

                        <h3 dir="ltr">Màn hình đẹp, mượt mà</h3>

                        <p dir="ltr">Tương tự như thiết kế, màn hình điện thoại là thành phần người dùng tiếp xúc với
                            máy hàng ngày. Màn hình lớn, độ phân giải cao là những điều người dùng nên lưu ý.</p>

                        <p dir="ltr">Hiện nay, loại màn hình tốt nhất mà các hãng đang trang bị cho các flagship của
                            mình là màn OLED và màn Super Amoled. Hai lại màn hình này thể hiện màu sắc rực rỡ, nịnh
                            mắt, kết hợp màu màu đen sâu giúp cho máy tiết kiệm pin và người dùng cũng đỡ mỏi mắt khi sử
                            dụng máy trong thời gian dài.</p>

                        <p dir="ltr">Bên cạnh màn hình đẹp, tần số quét cao cũng là một tiêu chí người dùng nên chọn khi
                            mua điện thoại. Tần số quét cao hơn 60Hz truyền thống sẽ giúp những thao tác vuốt chạm, chơi
                            game mượt mà hơn. Tùy từng mức giá, tần số quét trên điện thoại đang có những tùy chọn gồm
                            90Hz, 120Hz hay 144Hz.</p>

                        <h3 dir="ltr">Cấu hình mạnh</h3>

                        <p dir="ltr">Cấu hình được ví như bộ não - trung tâm xử lý mọi tác vụ trên điện thoại. Vì thế,
                            muốn dùng điện thoại lâu dài thì phải chọn những sản phẩm cấu hình mạnh nhất trong phân
                            khúc.&nbsp;</p>

                        <p dir="ltr">Hiện nay, có những bộ vi xử lý phổ biến nhất thị trường là:</p>


                    </div>
                    <div class="showbtn">
                        <div class="gradient"></div>
                        <a class="details_click clickmore" data-class="1" data-id="boxdesc">Xem thêm <i
                                class="fa fa-angle-double-down ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="box-news">
                <div class="grid-box">
                    <div class="box-title">
                        <svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.75" y="0.75" width="24.5" height="20.5" rx="2.25" stroke="#EF6837"
                                  stroke-width="1.5"></rect>
                            <path
                                d="M3.63 3.506C3.63 3.38467 3.672 3.282 3.756 3.198C3.84 3.114 3.94267 3.072 4.064 3.072H4.155C4.26233 3.072 4.34867 3.09533 4.414 3.142C4.47933 3.18867 4.54233 3.24933 4.603 3.324L7.053 6.495V3.485C7.053 3.36833 7.09267 3.27033 7.172 3.191C7.256 3.107 7.35633 3.065 7.473 3.065C7.59433 3.065 7.69467 3.107 7.774 3.191C7.858 3.27033 7.9 3.36833 7.9 3.485V7.601C7.9 7.72233 7.86033 7.825 7.781 7.909C7.70167 7.98833 7.60133 8.028 7.48 8.028H7.445C7.34233 8.028 7.256 8.00467 7.186 7.958C7.12067 7.91133 7.05767 7.84833 6.997 7.769L4.477 4.507V7.615C4.477 7.73167 4.435 7.832 4.351 7.916C4.27167 7.99533 4.17367 8.035 4.057 8.035C3.93567 8.035 3.833 7.99533 3.749 7.916C3.66967 7.832 3.63 7.73167 3.63 7.615V3.506ZM11.5963 5.893C11.5823 5.75767 11.5519 5.63167 11.5053 5.515C11.4586 5.39367 11.3956 5.291 11.3163 5.207C11.2369 5.11833 11.1413 5.04833 11.0293 4.997C10.9219 4.94567 10.7983 4.92 10.6583 4.92C10.3923 4.92 10.1753 5.00867 10.0073 5.186C9.83927 5.36333 9.73661 5.599 9.69927 5.893H11.5963ZM12.0863 7.594C11.9183 7.74333 11.7269 7.86233 11.5123 7.951C11.3023 8.03967 11.0503 8.084 10.7563 8.084C10.4903 8.084 10.2406 8.03733 10.0073 7.944C9.77861 7.85067 9.57794 7.72 9.40527 7.552C9.23727 7.384 9.10427 7.18333 9.00627 6.95C8.90827 6.712 8.85927 6.45067 8.85927 6.166V6.152C8.85927 5.886 8.90361 5.63633 8.99227 5.403C9.08094 5.16967 9.20461 4.96667 9.36327 4.794C9.52661 4.61667 9.71794 4.479 9.93727 4.381C10.1566 4.27833 10.3993 4.227 10.6653 4.227C10.9593 4.227 11.2159 4.283 11.4353 4.395C11.6546 4.50233 11.8366 4.64467 11.9813 4.822C12.1306 4.99467 12.2403 5.18833 12.3103 5.403C12.3849 5.61767 12.4223 5.83233 12.4223 6.047C12.4223 6.16833 12.3826 6.26633 12.3033 6.341C12.2239 6.41567 12.1306 6.453 12.0233 6.453H9.70627C9.75294 6.761 9.87194 6.99433 10.0633 7.153C10.2546 7.31167 10.4903 7.391 10.7703 7.391C10.9476 7.391 11.1063 7.363 11.2463 7.307C11.3909 7.24633 11.5239 7.167 11.6453 7.069C11.6779 7.04567 11.7083 7.027 11.7363 7.013C11.7689 6.999 11.8109 6.992 11.8623 6.992C11.9556 6.992 12.0349 7.02467 12.1003 7.09C12.1656 7.15533 12.1983 7.237 12.1983 7.335C12.1983 7.38633 12.1866 7.43533 12.1633 7.482C12.1446 7.524 12.1189 7.56133 12.0863 7.594ZM14.5259 8.063C14.2972 8.063 14.1409 7.937 14.0569 7.685L13.0629 4.871C13.0535 4.843 13.0442 4.81033 13.0349 4.773C13.0255 4.731 13.0209 4.69133 13.0209 4.654C13.0209 4.55133 13.0582 4.46033 13.1329 4.381C13.2075 4.30167 13.3079 4.262 13.4339 4.262C13.5412 4.262 13.6275 4.29467 13.6929 4.36C13.7629 4.42067 13.8142 4.5 13.8469 4.598L14.5609 6.838L15.2819 4.598C15.3145 4.5 15.3682 4.42067 15.4429 4.36C15.5175 4.29467 15.6085 4.262 15.7159 4.262H15.7649C15.8722 4.262 15.9632 4.29467 16.0379 4.36C16.1125 4.42067 16.1662 4.5 16.1989 4.598L16.9269 6.838L17.6479 4.591C17.6759 4.49767 17.7225 4.42067 17.7879 4.36C17.8579 4.29467 17.9489 4.262 18.0609 4.262C18.1775 4.262 18.2732 4.30167 18.3479 4.381C18.4225 4.45567 18.4599 4.54667 18.4599 4.654C18.4599 4.724 18.4482 4.787 18.4249 4.843L17.4169 7.685C17.3702 7.81567 17.3049 7.91133 17.2209 7.972C17.1415 8.03267 17.0505 8.063 16.9479 8.063H16.9199C16.8125 8.063 16.7169 8.03267 16.6329 7.972C16.5535 7.91133 16.4952 7.82033 16.4579 7.699L15.7369 5.501L15.0089 7.699C14.9715 7.82033 14.9109 7.91133 14.8269 7.972C14.7475 8.03267 14.6565 8.063 14.5539 8.063H14.5259ZM20.5217 8.07C20.2837 8.07 20.0433 8.035 19.8007 7.965C19.558 7.89033 19.3293 7.77833 19.1147 7.629C19.068 7.60567 19.0283 7.56833 18.9957 7.517C18.9677 7.46567 18.9537 7.405 18.9537 7.335C18.9537 7.24167 18.9863 7.16233 19.0517 7.097C19.117 7.027 19.1987 6.992 19.2967 6.992C19.3667 6.992 19.4273 7.00833 19.4787 7.041C19.656 7.16233 19.8357 7.25333 20.0177 7.314C20.1997 7.37 20.3747 7.398 20.5427 7.398C20.7247 7.398 20.8647 7.363 20.9627 7.293C21.0653 7.21833 21.1167 7.12033 21.1167 6.999V6.985C21.1167 6.915 21.0933 6.85433 21.0467 6.803C21.0047 6.75167 20.944 6.70733 20.8647 6.67C20.79 6.63267 20.7013 6.59767 20.5987 6.565C20.5007 6.53233 20.398 6.49967 20.2907 6.467C20.1553 6.42967 20.0177 6.38533 19.8777 6.334C19.7423 6.28267 19.6187 6.21733 19.5067 6.138C19.3993 6.054 19.3107 5.95133 19.2407 5.83C19.1707 5.70867 19.1357 5.55933 19.1357 5.382V5.368C19.1357 5.19533 19.1683 5.039 19.2337 4.899C19.3037 4.759 19.397 4.64 19.5137 4.542C19.635 4.444 19.775 4.36933 19.9337 4.318C20.097 4.26667 20.2697 4.241 20.4517 4.241C20.6477 4.241 20.846 4.269 21.0467 4.325C21.2473 4.37633 21.4363 4.44867 21.6137 4.542C21.6743 4.57467 21.7233 4.619 21.7607 4.675C21.798 4.72633 21.8167 4.78933 21.8167 4.864C21.8167 4.962 21.7817 5.04367 21.7117 5.109C21.6463 5.17433 21.5647 5.207 21.4667 5.207C21.4293 5.207 21.399 5.20467 21.3757 5.2C21.3523 5.19067 21.3267 5.179 21.2987 5.165C21.1493 5.08567 21 5.025 20.8507 4.983C20.7013 4.93633 20.5613 4.913 20.4307 4.913C20.2673 4.913 20.139 4.948 20.0457 5.018C19.957 5.08333 19.9127 5.16967 19.9127 5.277V5.291C19.9127 5.35633 19.936 5.41467 19.9827 5.466C20.0293 5.51733 20.09 5.564 20.1647 5.606C20.244 5.64333 20.3327 5.68067 20.4307 5.718C20.5333 5.75067 20.6383 5.78333 20.7457 5.816C20.8763 5.858 21.0093 5.907 21.1447 5.963C21.2847 6.019 21.4083 6.089 21.5157 6.173C21.6277 6.25233 21.7187 6.35033 21.7887 6.467C21.8587 6.58367 21.8937 6.726 21.8937 6.894V6.908C21.8937 7.104 21.8587 7.27433 21.7887 7.419C21.7187 7.56367 21.6207 7.685 21.4947 7.783C21.3733 7.87633 21.2287 7.94867 21.0607 8C20.8927 8.04667 20.713 8.07 20.5217 8.07Z"
                                fill="#EF6837"></path>
                            <path d="M4 12H10" stroke="#EF6837" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M4 15H10" stroke="#EF6837" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M4 18H10" stroke="#EF6837" stroke-width="1.5" stroke-linecap="round"></path>
                            <rect x="14" y="12" width="8" height="6" rx="1" fill="#EF6837" stroke="#EF6837"
                                  stroke-width="1.5"></rect>
                        </svg>
                        Tin tức
                    </div>
                    <div class="box-list">
                        <div class="box-item">
                            <a href="https://onewaymobile.vn/gia-ban-iphone-15-ultra-co-the-len-toi-1799-usd-n953.html"
                               title="Giá bán iPhone 15 Ultra có thể lên tới 1799 USD!">
                                <img
                                    src="https://onewaymobile.vn/images/news/2023/02/resized/gia-ban-iphone-15-ultra-co-the-len-toi-1799-usd_1676100853.jpeg"
                                    alt="Giá bán iPhone 15 Ultra có thể lên tới 1799 USD!" class="img-responsive">
                                <span>Giá bán iPhone 15 Ultra có thể lên tới 1799 USD!</span>
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="https://onewaymobile.vn/5-sai-lam-thuong-mac-phai-khi-sac-dien-thoai-thong-minh-n952.html"
                               title="5 sai lầm thường mắc phải khi sạc điện thoại thông minh">
                                <img
                                    src="https://onewaymobile.vn/images/news/2023/02/resized/5-sai-lam-thuong-mac-phai-khi-sac-dien-thoai-thong-minh_1676086131.jpg"
                                    alt="5 sai lầm thường mắc phải khi sạc điện thoại thông minh"
                                    class="img-responsive">
                                <span>5 sai lầm thường mắc phải khi sạc điện thoại thông minh</span>
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="https://onewaymobile.vn/apple-watch-ultra-voi-man-hinh-microled-se-lui-den-nam-2025-n951.html"
                               title="Apple Watch Ultra với màn hình microLED sẽ lùi đến năm 2025">
                                <img
                                    src="https://onewaymobile.vn/images/news/2023/02/resized/apple-watch-ultra-voi-man-hinh-microled-se-lui-den-nam-2025_1676074587.jpg"
                                    alt="Apple Watch Ultra với màn hình microLED sẽ lùi đến năm 2025"
                                    class="img-responsive">
                                <span>Apple Watch Ultra với màn hình microLED sẽ lùi đến năm 2025</span>
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="https://onewaymobile.vn/xiaomi-ra-mat-dien-thoai-hello-kitty-tai-trung-quoc-n950.html"
                               title="Xiaomi ra mắt điện thoại thông minh Hello Kitty tại Trung Quốc">
                                <img
                                    src="https://onewaymobile.vn/images/news/2023/02/resized/xiaomi-ra-mat-dien-thoai-hello-kitty-tai-trung-quoc_1676017344.jpg"
                                    alt="Xiaomi ra mắt điện thoại thông minh Hello Kitty tại Trung Quốc"
                                    class="img-responsive">
                                <span>Xiaomi ra mắt điện thoại thông minh Hello Kitty tại Trung Quốc</span>
                            </a>
                        </div>
                        <div class="box-item">
                            <a href="https://onewaymobile.vn/samsung-galaxy-s23-ultra-dien-thoai-hieu-nang-tot-nhat-n949.html"
                               title="Samsung Galaxy S23 Ultra là điện thoại Android sở hữu hiệu năng tốt nhất lịch sử">
                                <img
                                    src="https://onewaymobile.vn/images/news/2023/02/resized/samsung-galaxy-s23-ultra-dien-thoai-hieu-nang-tot-nhat_1675999565.jpg"
                                    alt="Samsung Galaxy S23 Ultra là điện thoại Android sở hữu hiệu năng tốt nhất lịch sử"
                                    class="img-responsive">
                                <span>Samsung Galaxy S23 Ultra là điện thoại Android sở hữu hiệu năng tốt nhất lịch sử</span>
                            </a>
                        </div>

                    </div>
                    <a class="a_all" href="https://onewaymobile.vn/tin-tuc.html" title="Xem tất cả bài viết">Xem tất cả
                        bài viết <i class="fa fa-angle-right"></i></a>
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
