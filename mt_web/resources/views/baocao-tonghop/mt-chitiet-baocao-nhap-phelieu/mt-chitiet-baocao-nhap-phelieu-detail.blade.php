@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Chi tiết báo cáo nhập phế liệu
@endsection

@section('foreign-key')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-xl-12 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Chi tiết báo cáo nhập phế liệu</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_mt_chitiet_baocao_nhap_phelieu'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Báo cáo nhập phế liệu</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_sobaocao_nhap_phelieu'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Loại phế liệu</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_loaiphelieu'] }}
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
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Thời điểm nhập</h6>
                            <p class="mb-1">
                                {{ $key['thoidiem_nhap_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Khối lượng đã nhập</h6>
                            <p class="mb-1">
                                {{ $key['khoiluong_danhap'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Cửa khẩu nhập khẩu</h6>
                            <p class="mb-1">
                                {{ $key['cuakhau_nhapkhau'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Khối lượng đã sử dụng</h6>
                            <p class="mb-1">
                                {{ $key['khoiluong_dasudung'] }}
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
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tiền ký quỹ phế liệu</h6>
                            <p class="mb-1">
                                {{ $key['tienkyquy_phelieu'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Hiện trạng sử dụng tiền ký quỹ</h6>
                            <p class="mb-1">
                                {{ $key['hientrang_sudung_tienkyquy'] }}
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
