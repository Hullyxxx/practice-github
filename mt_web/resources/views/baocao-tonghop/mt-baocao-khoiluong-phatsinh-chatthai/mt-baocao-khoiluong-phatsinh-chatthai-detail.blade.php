@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Báo cáo khối lượng phát sinh chất thải
@endsection

@section('foreign-key')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Số báo cáo</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['so_baocao'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Cơ sở xử lý chất thải</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_coso_xuly_chatthai'] }}
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
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày báo cáo</h6>
                            <p class="mb-1">
                                {{ $key['ngay_baocao_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tổng khối lượng phát sinh</h6>
                            <p class="mb-1">
                                {{ $key['tong_khoiluong_phatsinh'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tổng khối lượng thu gom</h6>
                            <p class="mb-1">
                                {{ $key['tong_khoiluong_thugom'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tổng khối lượng xử lý</h6>
                            <p class="mb-1">
                                {{ $key['tong_khoiluong_xuly'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Đơn vị</h6>
                            <p class="mb-1">
                                {{ $key['donvi'] }}
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
