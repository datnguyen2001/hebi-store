@extends('web.layout.master')
@section('title','Hebi Mobile')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/news/news.css">
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
                    <span class="name">Tin tức</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide-banner-news">
            @foreach($banner_news as $value)
                <a href="" class="position-relative">
                    <img class="w-100 img-banner-news" src="{{$value->src}}" alt="">
                    <p class="title_new custom-content-2-line">{{$value->title}}</p>
                </a>
            @endforeach
        </div>

        <div class="content-post-news">
            <p class="title-post">Tin tức mới</p>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                @foreach($news as $value)
                    <div class="d-flex justify-content-between card-post">
                        <img src="{{$value->src}}" class="img-post-news" alt="">
                        <div class="card-content-title">
                            <p class="title-card-pots custom-content-2-line">{{$value->title}}</p>
                            <span class="time-news">18 Tháng Hai, 2023</span>
                            <div class="content-card-post custom-content-3-line">{!! $value->content!!}</div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script_page')

@stop
