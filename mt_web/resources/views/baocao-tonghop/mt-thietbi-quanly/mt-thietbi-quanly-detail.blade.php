@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Thiết bị quản lý
@endsection

@section('foreign-key')
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Doanh nghiệp</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['name_enterprise']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Giấy phép quản lý chất thải nguy hại</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_mt_giayphep_quanly_chatthainguyhai']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Loại thiết bị</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_loaithietbi']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Tên thiết bị</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name']}}
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
            <div class="row my-xl-4">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Số lượng</h6>
                            <p class="mb-1">
                                {{$key['soluong']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Loại hình</h6>
                            <p class="mb-1">
                                {{$key['loaihinh']}}
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

