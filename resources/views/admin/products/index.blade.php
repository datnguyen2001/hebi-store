@extends('layout.admin.index')
<style>
    .content__product:nth-child(2n) {
        background: #E0E0E0;
    }
</style>
@section('main')
    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                            {{session('error')}}
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2 mt-3 d-flex justify-content-end">
                                <form action="{{route('admin.products.index')}}" method="get" class="w-50 d-flex justify-content-end">
                                    <input class="form-control" style="max-width: 300px; border-right: 0; border-top-right-radius: 0; border-bottom-right-radius: 0;outline: none" value="{{request()->get('key_search')}}" name="key_search" placeholder="Tìm kiếm theo sku hoặc tên sản phẩm">
                                    <button class="btn btn-info" style="border-left: 0;border-top-left-radius: 0;border-bottom-left-radius: 0"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Danh sách sản phẩm</h5>
                                <div>
                                    <a class="btn btn-success" href="{{route('admin.products.create')}}">Tạo mới sản phẩm</a>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="overflow-auto">
                                    <div style="width: 1530px">
                                        <div class="d-flex w-100 align-items-center text-center text-white font-size-16" style="background: #4154f1;padding: 5px 0">
                                            <div style="padding-left: 30px; width: 15%">Tên sản phẩm </div>
                                            <div style="width: 10%">Barcode</div>
{{--                                            <div style="width: 10%">Trạng thaí</div>--}}
                                            <div style="width: 10%">SKU Phân loại </div>
                                            <div style="width: 10%">Phân loại </div>
                                            <div style="width: 10%">Giá gốc</div>
                                            <div style="width: 10%">Giá bán ra </div>
                                            <div style="width: 10%">Kho hàng</div>
                                            <div style="width: 5%">Đơn vị </div>
                                            <div style="width: 10%">Thao tác </div>
                                        </div>
                                        <div class="w-100 bg-white mt-10">
                                            @foreach($listData as $item)
                                                <div class="w-100 d-flex mb-5 pt-2 pb-2 content__product align-items-center">
                                                    <div style="padding-left: 30px; width: 15%">
                                                        <div class="media">
                                                            <div class="media-body mb-2">
                                                                <h6 class="font-weight-bolder font-size-14">{{ $item['name'] }}</h6>
                                                                <p class="mb-0 font-size-12">Mã SP: {{ $item['sku'] }}</p>
                                                                <p class="mb-0 font-size-12">{{ $item['trademark_name'] }}</p>
                                                            </div>
                                                            @if($item['type_banner'] == 2)
                                                                <video class="w-75 mr-3" style="border-radius: 4px" controls>
                                                                    <source src="{{$item['banner']}}" type="video/mp4">
                                                                </video>
                                                                @else
                                                                <img src="{{ $item['banner'] }}" class="w-75 mr-3" style="border-radius: 4px" alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center" style="width: 10%">
                                                        <p class="mb-0 font-size-12">{{ $item['barcode'] }}</p>
                                                    </div>
{{--                                                    <div style="width: 10%">--}}
{{--                                                        <p class="font-size-12 text-center">Sắp ra mắt</p>--}}
{{--                                                    </div>--}}
                                                    <div style="width: 50%">
                                                        @foreach($item->product_value as $value)
                                                            <div class="w-100 d-flex">
                                                                <div style="width: 20%">
                                                                    <p class="text-center font-size-12">{{$value->sku}}</p>
                                                                </div>
                                                                <div style="width: 20%">
                                                                    <p class="text-center text-capitalize font-size-12">{{$value->name_value}}</p>
                                                                </div>
                                                                <div style="width: 20%">
                                                                    <p class="text-center font-size-12">{{number_format($value->price)}} vnđ</p>
                                                                </div>
                                                                <div style="width: 20%">
                                                                    <p class="text-center font-size-12">{{number_format($value->promotional_price)}} vnđ</p>
                                                                </div>
                                                                <div style="width: 20%">
                                                                    <p class="text-center font-size-12">{{$value->quantity}}</p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div style="width: 5%">
                                                        <p class="text-center font-size-12">{{$item['name_unit']}}</p>
                                                    </div>
                                                    <div style="width: 10%" class="d-flex justify-content-center">
                                                        <div class="btn-group">
                                                            <a href="{{url('admin/products/edit/'.$item->id)}}" class="btn btn-icon btn-light btn-hover-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Cập nhật">
                                                                <i class="bi bi-pencil-square "></i>
                                                            </a>
                                                            <a href="{{url('admin/products/delete/'.$item->id)}}" class="btn btn-delete btn-icon btn-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Xóa">
                                                                <i class="bi bi-trash "></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $('a.btn-delete').confirm({
            title: 'Xác nhận!',
            content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
            buttons: {
                ok: {
                    text: 'Xóa',
                    btnClass: 'btn-danger',
                    action: function(){
                        location.href = this.$target.attr('href');
                    }
                },
                close: {
                    text: 'Hủy',
                    action: function () {}
                }
            }
        });
    </script>
@endsection
