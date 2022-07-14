@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Báo cáo công tác bảo vệ môi trường
@endsection

@section('foreign-key')
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-lg-6 col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-18  font-25 text-purple-500">Tên doanh nghiệp</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['enterprise_name']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-18  font-25 text-white">Tên đơn vị quản lý</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['donvi_quanly_name']}}
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
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row my-xl-4 ">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Tên báo cáo công tác BVMT</h6>
                            <p class="mb-1">
                                {{$key['name_baocao_congtac_bvmt']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Người ký</h6>
                            <p class="mb-1">
                                {{$key['nguoiky']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Số báo cáo</h6>
                            <p class="mb-1">
                                {{$key['so_baocao']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày ban hành</h6>
                            <p class="mb-1">
                                {{$key['ngay_banhanh_date']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-1">Thời gian kết thúc</h6>
                            <p class="mb-1 ">
                                {{$key['thoigian_ketthuc_date']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-1">Trích yếu</h6>
                            <p class="mb-1">
                                {{$key['trich_yeu']}}
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