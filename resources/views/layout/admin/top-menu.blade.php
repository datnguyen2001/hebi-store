<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{'/admin'}}" class="logo d-flex align-items-center">
            <img src="{{asset('assets/images/logo.png')}}" alt="" style="width: 50px;height: 50px;max-height: 50px">
            <h5>Hebi</h5>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li>


            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li style="cursor: pointer">
                        <div class="dropdown-item d-flex align-items-center" data-bs-toggle="modal"
                             data-bs-target="#staticBackdrop">
                            <i class="bi bi-gear"></i>
                            <span>Đổi mật khẩu</span>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li style="cursor: pointer">
                        <a class="dropdown-item d-flex align-items-center" href="{{route('admin.logout')}}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Đăng xuất</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>

</header>
<!-- Modal đổi mật khẩu -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="top: 40%;transform: translateY(-50%)">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Đổi mật khẩu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('admin.changePassword', auth()->user()->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="current_password" required placeholder="Mật khẩu cũ">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mt-2" name="password" required placeholder="Mật khẩu mới">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mt-2" name="password_confirmation" required placeholder="Nhập lại mật khẩu mới">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-success">Đổi mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
