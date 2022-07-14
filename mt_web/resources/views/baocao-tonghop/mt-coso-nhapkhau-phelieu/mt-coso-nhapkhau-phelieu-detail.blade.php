@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Cơ sở nhập khẩu phế liệu
@endsection

@section('foreign-key')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Số xác nhận</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['so_xacnhan'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Hồ sơ thủ tục hành chính</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_hoso_thutuc_hanhchinh'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Doanh nghiệp</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_enterprise'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Đơn vị cấp phép</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_donvi_capphep'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <tr>
            <td colspan="7" class="text-center text-bold text-primary">Không tìm thấy kết quả</td>
        </tr>
    @endif
@endsection

@section('feild-value')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row my-xl-4 ">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày cấp phép</h6>
                            <p class="mb-1">
                                {{ $key['ngay_capphep_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày hết hạn</h6>
                            <p class="mb-1">
                                {{ $key['ngay_hethan_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tổng khối lượng nhập cho phép</h6>
                            <p class="mb-1">
                                {{ $key['tongkhoi_nhapchophep'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Khối lượng nhập cho phép trong năm</h6>
                            <p class="mb-1">
                                {{ $key['khoiluong_chophep_nhaptrongnam'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Đơn vị</h6>
                            <p class="mb-1">
                                {{ $key['donvi'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Thông tin kho bãi</h6>
                            <p class="mb-1">
                                {{ $key['thongtin_khobai'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Yêu cầu bảo vệ môi trường</h6>
                            <p class="mb-1">
                                {{ $key['yeucau_baovemoitruong'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Mục đích sử dụng</h6>
                            <p class="mb-1">
                                {{ $key['mucdich_sudung'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Công tác bảo vệ môi trường</h6>
                            <p class="mb-1">
                                {{ $key['congtac_baove_moitruong'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <tr>
            <td colspan="7" class="text-center text-bold text-primary">Không tìm thấy kết quả</td>
        </tr>
    @endif
@endsection
