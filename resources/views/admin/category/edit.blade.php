@extends('layout.admin.index')
@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cập nhật danh mục sản phẩm</h5>
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
                            @if (session('success'))
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{url('admin/category/update/'.$category->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{$category->name}}" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Danh mục menu</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="type"
                                                aria-label="Default select example">
                                            <option class="bg-info" @if($category->type == 1) selected @endif value="1">Điện thoại</option>
                                            <option class="bg-info" @if($category->type == 2) selected @endif value="2">Máy tính bảng</option>
                                            <option class="bg-info" @if($category->type == 3) selected @endif value="3">Đồng hồ thông minh</option>
                                            <option class="bg-info" @if($category->type == 4) selected @endif value="4">Nhà thông minh</option>
                                            <option class="bg-info" @if($category->type == 5) selected @endif value="5">Phụ kiện</option>
                                            <option class="bg-info" @if($category->type == 6) selected @endif value="6">Âm thanh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Danh mục con</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="parent_id"
                                                aria-label="Default select example">
                                            <option value="0" selected>Làm danh mục cha</option>
                                            @foreach($category_all as $value)
                                                <option @if($value->id == $category->parent_id) selected
                                                        @endif value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Vị trí, thứ tự</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="location" value="{{$category->location}}" required
                                               class="form-control">
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Trạng thái</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="display" id="gridRadios1"
                                                   value="1" @if($category->display == 1) checked @endif>
                                            <label class="form-check-label" for="gridRadios1">
                                                Hiện
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="display" id="gridRadios2"
                                                   value="0" @if($category->display == 0) checked @endif>
                                            <label class="form-check-label" for="gridRadios2">
                                                Ẩn
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Cập nhập</button>
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
@endsection
