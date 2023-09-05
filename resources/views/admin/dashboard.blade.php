@extends('layout.admin.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tổng quan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item active">Tổng quan</li>
                </ol>
            </nav>

            @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="pagetitle">
                            <h8 class="card-title" style="color: #f26522">Thống kê đơn hàng</h8>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tổng số đơn hàng</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>99</h6>
                                            <a href="{{url('admin/order/index/all')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>999999 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng chờ xác nhận</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>999</h6>
                                            <a href="{{url('admin/order/index/0')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>999999 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng chờ lấy hàng</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9999</h6>
                                            <a href="{{url('admin/order/index/1')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>9999999 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng vận chuyển</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9999</h6>
                                            <a href="{{url('admin/order/index/2')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>99999 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng hoàn thành</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>999</h6>
                                            <a href="{{url('admin/order/index/3')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>99999 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Đơn hàng đã huỷ</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/order/index/4')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>9 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Khách từ chối nhận hàng</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/order/index/5')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>9 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Hoàn hàng trả tiền</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/order/index/6')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            <p>9 VND</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pagetitle">
                            <h8 class="card-title" style="color: #f26522">Khách hàng</h8>
                        </div>
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Danh sách khách hàng</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/customer/customer-haunt')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Khách hàng mua một lần</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/customer/customer-order')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Khách hàng mua nhiều lần</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/customer/customer-admin')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="pagetitle">
                            <h8 class="card-title" style="color: #f26522">Kho</h8>
                        </div>
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Số lượng kho</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/kho/kho')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            {{--                                            <p>{{number_format($order_cancel_money)}} VND</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tổng sản phẩm</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/products')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            {{--                                            <p>{{number_format($order_cancel_money)}} VND</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm đã hết</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/products')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            {{--                                            <p>{{number_format($order_cancel_money)}} VND</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm yêu cầu duyệt</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/products/import_request')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            {{--                                            <p>{{number_format($order_cancel_money)}} VND</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm bán chạy</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>9</h6>
                                            <a href="{{url('admin/products')}}" /><span class="text-muted small pt-2 ps-1">Xem chi tiết</span></a>
                                            {{--                                            <p>{{number_format($order_cancel_money)}} VND</p>--}}
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
