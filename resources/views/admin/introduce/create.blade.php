@extends('layout.admin.index')
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tạo bài viết cho website</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                @if (session('error'))
                    <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        {{session('error')}}
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{route('admin.introduce.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-2">{{'Title :'}}</div>
                        <div class="col-10">
                            <input class="form-control" name="title" type="text" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-2 col-form-label">Loại bài viết: </label>
                        <div class="col-10">
                            <select class="form-select" name="type" aria-label="Default select example">
                                <option class="bg-info" value="0">Giới thiệu</option>
                                <option class="bg-info" value="1">Liên hệ</option>
                                <option class="bg-info" value="2">Footer</option>
                            </select>
                        </div>

                    </div>
                    <div class="card mb-5">
                        <div class="card-header bg-info text-white">
                            Nội dung
                        </div>
                        <div class="card-body mt-2">
                            <textarea name="content" class="ckeditor">{{ old('content') }}</textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">{{'Bật/tắt :'}}</div>
                        <div class="col-10">
                            <label class="switch">
                                <input type="checkbox" checked name="display">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-center">
                            <a href="{{route('admin.introduce.index')}}" class="btn btn-danger" style="margin-right: 20px">Hủy</a>
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
