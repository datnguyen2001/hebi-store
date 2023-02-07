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
    <title>Sachi-Châu Anh</title>
    {{--Font for web--}}
    <link href="assets/img/logo/logo.svg" rel="icon">
    <link href="assets/img/logo/logo.svg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/home/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/home/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/home/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/home/style.css" rel="stylesheet">

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

@include('web.partials.footer')

<script src="assets/home/vendor/aos/aos.js"></script>
<script src="assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/home/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/home/vendor/php-email-form/validate.js"></script>
<script src="assets/home/vendor/purecounter/purecounter.js"></script>
<script src="assets/home/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/home/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
