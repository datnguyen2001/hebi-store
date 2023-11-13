@extends('web.layout.master')
<style>
    .btn:focus {
        box-shadow: unset !important;
    }

    @media (max-width: 677px) {
        .text-404 {
            font-size: 100px !important;
        }
        .text-center .text-error {
font-size: 18px!important;
        }
    }
</style>
@section('content')
    <div class="d-flex align-items-center justify-content-center" style="padding: 100px 0">
        <div class="text-center">
            <h1 class="display-1 fw-bold text-404"
                style="text-shadow: 15px 15px #FC430859; color: #FC4308;font-size: 192px">404</h1>
            <p class="fs-3 text-danger text-error" style="line-height: 30px"> OOPS! Trang bạn đang tìm không tồn
                tại.</p>
            <a href="{{url('/')}}" class="btn mt-2 text-white"
               style="background-color: #0a58ca;border: unset;outline: unset">Về trang chủ</a>
        </div>
    </div>
@endsection
