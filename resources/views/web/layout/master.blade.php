<!doctype html>
<html lang="vi">
<head>
    <base href="{{asset('')}}">
    <meta name="google-site-verification" content="googleeacc2166ce777ac3.html"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Hebi Store</title>
    {{--Font for web--}}
    <link href="{{asset('assets/images/logo.png')}}" rel="icon">
    <link href="{{asset('assets/images/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/home/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="assets/css/home/style.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/partials/style.css">
    <link rel="stylesheet" href="{{asset('assets/web/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('dist/style.css')}}">


    @yield('plugins_css')

    @yield('style_page')

</head>
<body>
{{--Header--}}
@include('web.partials.header')
{{--Content Page--}}
<main class="main">
    @yield('content')
</main>
{{--Footer--}}
<button class="btn" id="button"><i class="fas fa-arrow-up text-white"></i></button>
@include('web.partials.footer')
<div class="moby-overlay"></div>
<script src="assets/home/vendor/aos/aos.js"></script>
<script src="assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/home/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/home/vendor/php-email-form/validate.js"></script>
<script src="assets/home/vendor/purecounter/purecounter.js"></script>
<script src="assets/home/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/home/vendor/waypoints/noframework.waypoints.js"></script>
<!-- Template Main JS File -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/main.js"></script>
{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/web/slick/slick.min.js')}}"></script>
@yield('script_page')
<script src="{{asset('dist/home/home.js')}}"></script>
</body>
</html>
