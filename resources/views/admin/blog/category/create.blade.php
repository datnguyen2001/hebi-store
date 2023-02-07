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
                            <h5 class="card-title">Thêm mới danh mục</h5>
                            <!-- General Form Elements -->
                            @if (session('error'))
                                <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                                    {{session('error')}}
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{route('admin.blog.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên danh mục blog</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">{{'Bật/Tắt :'}}</div>
                                    <div class="col-8">
                                        <label class="switch">
                                            <input type="checkbox" checked name="display">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

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
            $(document).on("change", 'input[type="file"]', function () {
                var input = this;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var formData = new FormData();
                        formData.append('file', input.files[0]);
                        formData.append('path', 'upload/category');
                        $.ajax({
                            url : window.location.origin + '/api/upload-file/image',
                            data: formData,
                            type: 'POST',
                            dataType: 'json',
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                if (data.status){
                                    var img = '<img src="'+ data.src +'" class="w-100 h-100" style="object-fit: cover;">';
                                    $(".select_image").html(img);
                                    $('input[name="src"]').val(data.src);
                                }else {
                                    console.log('Đã có lỗi xảy ra');
                                }
                            }
                        });
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            });
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
