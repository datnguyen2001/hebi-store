@extends('layout.admin.index')
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
                                <form action="{{route('admin.products.search')}}" method="get" class="w-50 d-flex justify-content-end">
                                    <input class="form-control" style="max-width: 300px; border-right: 0; border-top-right-radius: 0; border-bottom-right-radius: 0;outline: none" name="key_work" placeholder="Tìm kiếm theo thương hiệu, danh mục hoặc tên sản phẩm">
                                    <button class="btn btn-info" style="border-left: 0;border-top-left-radius: 0;border-bottom-left-radius: 0"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Danh sách sản phẩm</h5>
                            </div>
                            <div class="card-body p-3">
                                @if($listData->total() > 0)
                                    <div class="table-responsive">
                                        <div class="row btn-secondary m-0 text-white p-2" style="min-width: 1440px; overflow: auto;">
                                            <div class="col-1 d-flex align-items-center justify-content-center p-0 text-center">ID</div>
                                            <div class="col-2 d-flex align-items-center justify-content-center text-center">Tên</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Barcode</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center p-0">Sku</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Phân loại</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Gía bán (vnđ)</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center"> Gía khuyến mại (vnđ)</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Tồn kho</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Đơn vị</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Đã bán</div>
                                            <div class="col-1 d-flex align-items-center justify-content-center text-center">Thao tác</div>
                                        </div>
                                        @foreach($listData as $key => $value)
                                            <div class="row m-0 border-bottom p-2" style="min-width: 1440px; overflow: auto;">
                                                <div class="col-1 d-flex align-items-center justify-content-center p-0 text-center">{{$key + 1}}</div>
                                                <div class="col-2">
                                                    <p>{{$value->name}}</p>
                                                    <div class="position-relative" style="padding-top: calc(100% + 20px)">
                                                        <img src="{{$value->image}}" class="position-absolute w-100 h-100" style="top: 0; left: 0; object-fit: cover; border-radius: 4px">
                                                    </div>
                                                </div>
                                                <div class="col-1">
                                                    <p>{{$value->barcode}}</p>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <p>{{$value->sku}}</p>
                                                </div>
                                                <div class="col-1 text-center">
                                                    @foreach($value->product_value as $item)
                                                        @php $product_attribute = \App\Models\ProductAttribute::find($item->attribute_id); @endphp
                                                        <p>{{$product_attribute->color_name}} - {{$item->name_size}}</p>
                                                    @endforeach
                                                </div>
                                                <div class="col-1 text-center">
                                                    @foreach($value->product_value as $item)
                                                        <p>{{number_format($item->price)}}</p>
                                                    @endforeach
                                                </div>
                                                <div class="col-1 text-center">
                                                    @foreach($value->product_value as $item)
                                                        <p>{{isset($item->promotional_price) ? number_format($item->promotional_price) : 0}}</p>
                                                    @endforeach
                                                </div>
                                                <div class="col-1 text-center">
                                                    @foreach($value->product_value as $item)
                                                        <p>{{$item->quantity}}</p>
                                                    @endforeach
                                                </div>
                                                <div class="col-1 text-center">
                                                    {{$value->name_unit}}
                                                </div>
                                                <div class="col-1 text-center"><p>0</p></div>
                                                <div class="col-1 d-flex justify-content-center align-items-center">
                                                    <div class="btn-group">
                                                        <a href="{{url('admin/products/edit-import-request/'.$value->id)}}" class="btn btn-icon btn-light btn-hover-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Cập nhật">
                                                            <i class="bi bi-pencil-square "></i>
                                                        </a>
                                                        <a href="{{url('admin/products/delete-import-request/'.$value->id)}}" class="btn btn-delete btn-icon btn-light btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Xóa">
                                                            <i class="bi bi-trash "></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {{ $listData->render('pagination_custom.index') }}
                                    </div>
                                @else
                                    <div class="text-muted w-100 text-center">
                                        {{ __('Không có bản ghi nào') }}
                                    </div>
                                @endif
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
