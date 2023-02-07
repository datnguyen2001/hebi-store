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
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Thêm mới {{$titlePage}}</h5>
                            <!-- General Form Elements -->
                            @if (session('error'))
                                <div
                                    class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                    role="alert">
                                    {{session('error')}}
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{route('admin.blog.blog_posts.store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên blog</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 d-flex align-items-center">
                                        <p class="m-0">Danh mục (<span style="color: red"> * </span>) :</p>
                                    </div>
                                    <div class="col-sm-10">
                                        @if(count($blogCategory))
                                            <select name="blogCategory_id" class="form-select">
                                                <option value="">Chọn danh mục</option>
                                                @foreach($blogCategory as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endforeach
                                            </select>
                                        @else
                                            <p class="text-center" style="color: red">Vui lòng thêm danh mục để tiếp
                                                tục</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">{{'Link bài viết :'}}</div>
                                    <div class="col-10">
                                        <input class="form-control" name="link" type="text" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">{{'Thứ tự :'}}</div>
                                    <div class="col-10">
                                        <input class="form-control" name="index" type="number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3">{{'Hình ảnh hoặc video :'}}</div>
                                    <div class="col-8">
                                        <div class="form-control position-relative" style="padding-top: 50%">
                                            <button type="button"
                                                    class="position-absolute border-0 bg-transparent select-image"
                                                    style="top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                                <i style="font-size: 30px" class="bi bi-download"></i>
                                            </button>
                                        </div>
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
                                <div class="row mb-3">
                                    <div class="col-2">{{'Bật/tắt :'}}</div>
                                    <div class="col-8">
                                        <label class="switch">
                                            <input type="checkbox" checked name="display">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 d-flex justify-content-center">
                                        <a href="{{route('admin.blog.blog_posts.index')}}" class="btn btn-danger"
                                           style="margin-right: 20px">Hủy</a>
                                        <button type="submit" class="btn btn-primary">Tạo</button>
                                    </div>
                                    <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg,video/*"
                                           hidden>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        let parent;
        $(document).on("click", ".select-image", function () {
            $('input[name="file"]').click();
            parent = $(this).parent();
        });
        $('input[type="file"]').change(function (e) {
            imgPreview(this);
        });

        function imgPreview(input) {
            let file = input.files[0];
            let mixedfile = file['type'].split("/");
            let filetype = mixedfile[0]; // (image, video)
            if (filetype == "image") {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $("#preview-img").show().attr("src",);
                    let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                        '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>' +
                        '<img src="' + e.target.result + '" class="w-100 h-100" style="object-fit: cover">' +
                        '</div>';
                    parent.html(html);
                }
                reader.readAsDataURL(input.files[0]);
            } else if (filetype == "video" || filetype == "mp4") {
                let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                    '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%;z-index: 14"><i class="bi bi-x-lg text-white"></i></button>' +
                    '<video class="w-100 h-100" style="object-fit: cover" controls>\n' +
                    '<source src="' + URL.createObjectURL(input.files[0]) + '"></video>' +
                    '</div>';
                parent.html(html);
            } else {
                alert("Invalid file type");
            }
        }

        $(document).on("click", "button.clear", function () {
            $(".div-file").remove();
            let html = '<button type="button" class="position-absolute border-0 bg-transparent select-image" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">\n' +
                '                                    <i style="font-size: 30px" class="bi bi-download"></i>\n' +
                '                                </button>';
            parent.html(html);
            $('input[type="file"]').val("");
        });
    </script>

    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
