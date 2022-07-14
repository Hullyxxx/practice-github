@section('province')
    Trà Vinh
@endsection

<div class="main-header">
    <div class="logo">
        <a href="index">
            <img src="../../_lib/_assets/_images/monre_logo.png" alt="">
        </a>
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="d-flex align-items-center">
        <!-- Mega menu -->
        <div class="dropdown mega-menu d-none d-md-block">
            <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Thanh công cụ</a>
            <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton" style="overflow-y: hidden">
                <div class="row m-0">
                    <div class="col-md-4 p-4 bg-img">
                        <h3 class="title">Quản trị hệ thống</h3>
                        <p></p>
                        <!-- <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button> -->
                    </div>
                    <div class="col-md-8 p-4">
                        <p class="text-primary text--cap border-bottom-primary d-inline-block">Công cụ nhanh</p>
                        <div class="menu-icon-grid w-auto p-12">
                            <a href="index"><i class="i-Home1"></i> Trang chủ</a>
                            {{-- <a href="map"><i class="i-Map2"></i> Bản đồ</a>
                             <a href="catalog-search"><i class="i-Data-Search"></i> Tìm kiếm</a>
                             <a href="statistic"><i class="i-Statistic"></i> Thống kê <br> giám sát</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Mega menu -->
        <!-- <div class="search-bar">
            <input type="text" placeholder="Search">
            <i class="search-icon text-muted i-Magnifi-Glass1"></i>
        </div> -->
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- Grid menu Dropdown -->
        <div class="dropdown">
            <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="menu-icon-grid">
                    <a href="index"><i class="i-Home1"></i> Trang chủ</a>
                    {{--<a href="map"><i class="i-Map2"></i> Bản đồ</a>
                    <a href="catalog-search"><i class="i-Data-Search"></i> Tìm kiếm</a>
                    <a href="statistic"><i class="i-Statistic"></i> Thống kê <br> giám sát</a>--}}
                </div>
            </div>
        </div>
        <!-- User avatar dropdown -->
        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="../../_lib/_assets/_images/user.png" id="userDropdown" alt="" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i>
                        {{$_SESSION['fullname']}}
                    </div>
                    <a class="dropdown-item" href="../../all_session/logout.php">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
</div>
