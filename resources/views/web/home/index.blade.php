@extends('web.layout.master')
@section('title','Sachi-Châu Anh')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Sachi-Châu Anh">
@stop

{{--style for page--}}
@section('plugins_css')
    @include('web.partials.plugins-css', ['slick'=>true, 'sweetalert'=>true])
@stop
@section('style_page')
@stop
{{--content of page--}}
@section('content')
    <section id="hero" class="d-flex align-items-center position-relative">
        <div class="slider-banner banner-desktop">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-100">
                    <img src="./assets/img/banner_sachi_2.jpg" class="w-100">
                    <!--          <video class="w-100" muted controls autoplay loop>-->
                    <!--            <source src="./assets/img/video_sachi_5.mp4" type="video/mp4">-->
                    <!--          </video>-->
                </div>
            </div>
        </div>
        <div class="slider-banner banner-mobile">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-100">
                    <img src="./assets/img/banner_mobile_6.jpg" class="w-100">
                </div>
            </div>
        </div>
        <div class="container position-absolute w-100 h-100 d-flex align-items-lg-end p-5" data-aos="zoom-out" data-aos-delay="100">
            <!--      <h1>Wellcome <span>Sachi Healthy</span></h1>-->
            <!--      <h2>Uy tín tạo thương hiệu. Chất lượng tạo thành công.</h2>-->
            <div class="d-flex" style="align-items: flex-end; justify-content: center">
                <a href="#about" class="btn-get-started scrollto">Bắt đầu</a>
                <a href="./assets/img/video_sachi_3.mp4" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="background-product product_1"></div>
                            <h4 class="title" style="margin-top: 20px"><a target="_blank" href="https://shopee.vn/H%E1%BA%A0T-SACHI-RANG-M%E1%BB%98C-(H%E1%BA%A0T-SACHI)-i.89846981.3689834490">HẠT SACHI RANG MỘC (HẠT SACHI)</a></h4>
                            <p class="description"><span class="price-product">₫85.000</span> <span class="price-discount">₫65.000</span></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="background-product product_2"></div>
                            <h4 class="title" style="margin-top: 20px"><a target="_blank" href="https://shopee.vn/D%E1%BA%A6U-SACHI-OMEGA-3_6_9-(D%E1%BA%A6U-SACHI-%C3%89P-L%E1%BA%A0NH)-i.89846981.8658326055">DẦU SACHI OMEGA 3_6_9 (DẦU SACHI ÉP LẠNH)</a></h4>
                            <p class="description"><span class="price-product">₫245.000</span> <span class="price-discount">₫225.000</span></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="background-product product_3"></div>
                            <h4 class="title" style="margin-top: 20px"><a target="_blank" href="https://shopee.vn/TR%C3%80-TH%E1%BA%A2O-M%E1%BB%98C-SACHI-HERBAL-TEA-(TR%C3%80-SACHI)-i.89846981.10806023203">TRÀ THẢO MỘC SACHI HERBAL TEA (TRÀ SACHI)</a></h4>
                            <p class="description"><span class="price-product">₫105.000</span> <span class="price-discount">₫75.000</span></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                            <div class="background-product product_4"></div>
                            <h4 class="title" style="margin-top: 20px"><a target="_blank" href="https://shopee.vn/RAU-SACHI-T%E1%BA%A0I-FARM-SACHIHEALTHY-i.89846981.8860431094">RAU SACHI TẠI FARM SACHIHEALTHY</a></h4>
                            <p class="description"><span class="price-product">₫22.000</span> <span class="price-discount">₫20.000</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Giới thiệu Về chúng tôi</h3>
                    <p class="fst-italic">Trong quá trình hình thành và phát triển Châu Anh, luôn mang bên mình sứ mệnh phát triển bền vững và chiến lược, trách nhiệm ở đây là uy tín lợi ích khách hàng là cam kết trọng tâm</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" style="padding: 0">
                        <section id="testimonials-about" class="testimonials-about">
                            <div class="container" data-aos="zoom-in">
                                <div class="testimonials-about-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-1"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-2"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-3"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-4"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-5"></div>
                                        </div><!-- End testimonial item -->
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </section><!-- End Testimonials Section -->
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="title-box position-relative">SẢN PHẨM</h3>
                        <p class="fst-italic">
                            Từ những cây dược liệu Việt Nam, đặc biệt là cây sachi và kim ngân được Châu Anh nghiên cứu tuyển chọn chặt chẽ, trải qua quá trình sản xuất nghiêm ngặt để ra đời những sản phẩm chất lượng an toàn cho sức khỏe người dùng
                        </p>
                        <a href="#portfolio" class="btn-see-more">Xem thêm</a>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column padding-box" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="title-box position-relative">CHIA SẺ BÀI THUỐC</h3>
                        <p class="fst-italic">
                            Với mong muốn cây dược liệu sachi, kim ngân có hiệu quả kinh tế cao đối với bà con, Châu Anh miệt mài kết hợp với các nhà khoa học tạo ra những sản phẩm tốt cho người dùng. Châu Anh sẵn sàng là người đồng hành tin cậy của bà con
                        </p>
                        <a href="#portfolio" class="btn-see-more">Xem thêm</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100" style="padding: 0">
                        <section id="testimonials-about" class="testimonials-about">
                            <div class="container" data-aos="zoom-in" style="padding: 0">
                                <div class="testimonials-about-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-6"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-7"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-8"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-9"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-10"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-11"></div>
                                        </div><!-- End testimonial item -->
                                        <div class="swiper-slide">
                                            <div class="testimonial-items bg-13"></div>
                                        </div><!-- End testimonial item -->
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </section><!-- End Testimonials Section -->
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <h3 style="text-align: center; margin-bottom: 15px">NGUYÊN LIỆU SẢN XUẤT TRÀ</h3>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="content-box box_1">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="content-box box_2">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="content-box box_3">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="content-box box_4">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">
                <div class="background-banner">
                    <img src="assets/img/banner_7.jpg" style="width: 100%; max-width: 80%">
                </div>

                <!--        <div class="section-title">-->
                <!--          <h2>Đối tác</h2>-->
                <!--          <h3>Đối tác của <span>Chúng tôi</span></h3>-->
                <!--          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
                <!--        </div>-->
                <!--        <div class="row">-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/1.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/7.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/3.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/4.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/5.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">-->
                <!--            <img src="assets/img/logo/6.jpg" class="img-fluid" alt="">-->
                <!--          </div>-->

                <!--        </div>-->

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <!--    <section id="services" class="services">-->
        <!--      <div class="container" data-aos="fade-up">-->

        <!--        <div class="section-title">-->
        <!--          <h3>Dịch vụ Của chúng tôi</h3>-->
        <!--          <p>Sachi healthy món quà sức khỏe từ dươc liệu</p>-->
        <!--        </div>-->

        <!--        <div class="row">-->
        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bxl-dribbble"></i></div>-->
        <!--              <h4><a href="">Lorem Ipsum</a></h4>-->
        <!--              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bx-file"></i></div>-->
        <!--              <h4><a href="">Sed ut perspiciatis</a></h4>-->
        <!--              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bx-tachometer"></i></div>-->
        <!--              <h4><a href="">Magni Dolores</a></h4>-->
        <!--              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bx-world"></i></div>-->
        <!--              <h4><a href="">Nemo Enim</a></h4>-->
        <!--              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bx-slideshow"></i></div>-->
        <!--              <h4><a href="">Dele cardo</a></h4>-->
        <!--              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">-->
        <!--            <div class="icon-box">-->
        <!--              <div class="icon"><i class="bx bx-arch"></i></div>-->
        <!--              <h4><a href="">Divera don</a></h4>-->
        <!--              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>-->
        <!-- End Services Section -->

        <!--    <div class="section-title">-->
        <!--      <h2>Phản hồi</h2>-->
        <!--      <h3>Khách hàng phản hồi Về chúng tôi</h3>-->
        <!--      <p>Uy tín tạo thương hiệu. Chất lượng tạo thành công.</p>-->
        <!--    </div>-->

        <!-- ======= Testimonials Section ======= -->
        <!--    <section id="testimonials" class="testimonials">-->
        <!--      <div class="container" data-aos="zoom-in">-->

        <!--        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">-->
        <!--          <div class="swiper-wrapper">-->

        <!--            <div class="swiper-slide">-->
        <!--              <div class="testimonial-item">-->
        <!--                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
        <!--                <h3>Saul Goodman</h3>-->
        <!--                <h4>Ceo &amp; Founder</h4>-->
        <!--                <p>-->
        <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
        <!--                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.-->
        <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
        <!--                </p>-->
        <!--              </div>-->
        <!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

        <!--            <div class="swiper-slide">-->
        <!--              <div class="testimonial-item">-->
        <!--                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">-->
        <!--                <h3>Sara Wilsson</h3>-->
        <!--                <h4>Designer</h4>-->
        <!--                <p>-->
        <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
        <!--                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.-->
        <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
        <!--                </p>-->
        <!--              </div>-->
        <!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

        <!--            <div class="swiper-slide">-->
        <!--              <div class="testimonial-item">-->
        <!--                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">-->
        <!--                <h3>Jena Karlis</h3>-->
        <!--                <h4>Store Owner</h4>-->
        <!--                <p>-->
        <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
        <!--                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.-->
        <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
        <!--                </p>-->
        <!--              </div>-->
        <!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

        <!--            <div class="swiper-slide">-->
        <!--              <div class="testimonial-item">-->
        <!--                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">-->
        <!--                <h3>Matt Brandon</h3>-->
        <!--                <h4>Freelancer</h4>-->
        <!--                <p>-->
        <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
        <!--                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.-->
        <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
        <!--                </p>-->
        <!--              </div>-->
        <!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

        <!--            <div class="swiper-slide">-->
        <!--              <div class="testimonial-item">-->
        <!--                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">-->
        <!--                <h3>John Larson</h3>-->
        <!--                <h4>Entrepreneur</h4>-->
        <!--                <p>-->
        <!--                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>-->
        <!--                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.-->
        <!--                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>-->
        <!--                </p>-->
        <!--              </div>-->
        <!--            </div>&lt;!&ndash; End testimonial item &ndash;&gt;-->

        <!--          </div>-->
        <!--          <div class="swiper-pagination"></div>-->
        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>-->
        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sản phẩm</h2>
                    <h3>Sản phẩm <span>Của chúng tôi</span></h3>
                    <p>Sachi được ví như vàng lỏng của thế giới.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tất cả</li>
                            <li data-filter=".filter-dau">Dầu Sachi omega3.6.9</li>
                            <li data-filter=".filter-hat">Hạt Sachi rang mộc</li>
                            <li data-filter=".filter-tra">Trà thảo mộc Sachi</li>
                            <li data-filter=".filter-rau">Rau Sachi</li>
                            <li data-filter=".filter-keo">Kẹo Socola Sachi</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-dau">
                        <img src="assets/img/product/dau_sachi/8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sachi Helthy</h4>
                            <p>Dầu Sachi 3</p>
                            <a href="assets/img/product/dau_sachi/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-dau">
                        <img src="assets/img/product/dau_sachi/7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sachi Helthy</h4>
                            <p>Dầu Sachi 1</p>
                            <a href="assets/img/product/dau_sachi/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-dau">
                        <img src="assets/img/product/dau_sachi/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sachi Helthy</h4>
                            <p>Dầu Sachi2</p>
                            <a href="assets/img/product/dau_sachi/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-dau">
                        <img src="assets/img/product/dau_sachi/10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sachi Helthy</h4>
                            <p>Dầu Sachi2</p>
                            <a href="assets/img/product/dau_sachi/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-dau">
                        <img src="assets/img/product/dau_sachi/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Sachi Helthy</h4>
                            <p>Dầu Sachi</p>
                            <a href="assets/img/product/dau_sachi/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-hat">
                        <img src="assets/img/product/hat_sachi/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-hat">
                        <img src="assets/img/product/hat_sachi/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-hat">
                        <img src="assets/img/product/hat_sachi/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-tra">
                        <img src="assets/img/product/tra_sachi/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-rau">
                        <img src="assets/img/product/rau_sachi/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-rau">
                        <img src="assets/img/product/rau_sachi/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-keo">
                        <img src="assets/img/product/keo_sachi/7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <!--    <section id="team" class="team section-bg">-->
        <!--      <div class="container" data-aos="fade-up">-->

        <!--        <div class="section-title">-->
        <!--          <h2>Đội ngũ</h2>-->
        <!--          <h3>Đội ngũ <span>Của chúng tôi</span></h3>-->
        <!--          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
        <!--        </div>-->

        <!--        <div class="row">-->

        <!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">-->
        <!--            <div class="member">-->
        <!--              <div class="member-img">-->
        <!--                <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="member-info">-->
        <!--                <h4>Giám Đốc Marketing</h4>-->
        <!--                <span>Nguyễn Thị Anh</span>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">-->
        <!--            <div class="member">-->
        <!--              <div class="member-img">-->
        <!--                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="member-info">-->
        <!--                <h4>Sarah Jhonson</h4>-->
        <!--                <span>Product Manager</span>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">-->
        <!--            <div class="member">-->
        <!--              <div class="member-img">-->
        <!--                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="member-info">-->
        <!--                <h4>William Anderson</h4>-->
        <!--                <span>CTO</span>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">-->
        <!--            <div class="member">-->
        <!--              <div class="member-img">-->
        <!--                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">-->
        <!--                <div class="social">-->
        <!--                  <a href=""><i class="bi bi-twitter"></i></a>-->
        <!--                  <a href=""><i class="bi bi-facebook"></i></a>-->
        <!--                  <a href=""><i class="bi bi-instagram"></i></a>-->
        <!--                  <a href=""><i class="bi bi-linkedin"></i></a>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="member-info">-->
        <!--                <h4>Amanda Jepson</h4>-->
        <!--                <span>Accountant</span>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </div>-->

        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>-->
        <!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!--    <section id="pricing" class="pricing">-->
        <!--      <div class="container" data-aos="fade-up">-->

        <!--        <div class="section-title">-->
        <!--          <h2>Bảng giá</h2>-->
        <!--          <h3>Bảng giá <span>Của chúng tôi</span></h3>-->
        <!--          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
        <!--        </div>-->

        <!--        <div class="row">-->

        <!--          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">-->
        <!--            <img src="assets/img/price/tra.jpg" class="pricing-img" alt="">-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">-->
        <!--            <img src="assets/img/price/hat.jpg" class="pricing-img" alt="">-->
        <!--          </div>-->

        <!--          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">-->
        <!--            <img src="assets/img/price/dau.jpg" class="pricing-img" alt="">-->
        <!--          </div>-->

        <!--&lt;!&ndash;          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">&ndash;&gt;-->
        <!--&lt;!&ndash;            <div class="box">&ndash;&gt;-->
        <!--&lt;!&ndash;              <span class="advanced">Advanced</span>&ndash;&gt;-->
        <!--&lt;!&ndash;              <h3>Ultimate</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;              <h4><sup>$</sup>49<span> / month</span></h4>&ndash;&gt;-->
        <!--&lt;!&ndash;              <ul>&ndash;&gt;-->
        <!--&lt;!&ndash;                <li>Aida dere</li>&ndash;&gt;-->
        <!--&lt;!&ndash;                <li>Nec feugiat nisl</li>&ndash;&gt;-->
        <!--&lt;!&ndash;                <li>Nulla at volutpat dola</li>&ndash;&gt;-->
        <!--&lt;!&ndash;                <li>Pharetra massa</li>&ndash;&gt;-->
        <!--&lt;!&ndash;                <li>Massa ultricies mi</li>&ndash;&gt;-->
        <!--&lt;!&ndash;              </ul>&ndash;&gt;-->
        <!--&lt;!&ndash;              <div class="btn-wrap">&ndash;&gt;-->
        <!--&lt;!&ndash;                <a href="#" class="btn-buy">Buy Now</a>&ndash;&gt;-->
        <!--&lt;!&ndash;              </div>&ndash;&gt;-->
        <!--&lt;!&ndash;            </div>&ndash;&gt;-->
        <!--&lt;!&ndash;          </div>&ndash;&gt;-->

        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>-->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!--    <section id="faq" class="faq section-bg">-->
        <!--      <div class="container" data-aos="fade-up">-->

        <!--        <div class="section-title">-->
        <!--          <h2>F.A.Q</h2>-->
        <!--          <h3>Các Câu Hỏi <span>Thường Gặp</span></h3>-->
        <!--          <p>Tuy nhiên, để chúng ta có thể có được nó, ai là người mà trong thời gian giải thích nó, trong khi đó, niềm vui của tất cả các chế độ lỗi và cuộc sống mà anh ta mong muốn, tuy nhiên, sẽ xảy ra.</p>-->
        <!--        </div>-->

        <!--        <div class="row justify-content-center">-->
        <!--          <div class="col-xl-10">-->
        <!--            <ul class="faq-list">-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq1" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq2" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq3" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq4" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq5" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--              <li>-->
        <!--                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>-->
        <!--                <div id="faq6" class="collapse" data-bs-parent=".faq-list">-->
        <!--                  <p>-->
        <!--                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.-->
        <!--                  </p>-->
        <!--                </div>-->
        <!--              </li>-->

        <!--            </ul>-->
        <!--          </div>-->
        <!--        </div>-->

        <!--      </div>-->
        <!--    </section>-->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Liên hệ</h2>
                    <h3><span>Liên hệ với chúng tôi</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Địa chỉ</h3>
                            <p>Km13+500 khu công nghiệp Ngọc hồi.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>sachihealthy@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Số điện thoại</h3>
                            <p>02466624896</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDX1GYdRZFd5R588gS3r4L6t5QB9ehJ-jU&q=20.912791,105.8395346" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@stop

{{--script for page--}}
@section('plugins_js')
    @include('web.partials.plugins-js', ['slick'=>true, 'sweetalert'=>true])
@stop
@section('script_page')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stop
