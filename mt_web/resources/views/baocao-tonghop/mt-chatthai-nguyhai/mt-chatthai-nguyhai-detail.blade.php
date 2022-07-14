@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Chất thải nguy hại
@endsection

@section('foreign-key')
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Tên chất thải nguy hại</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['name_chatthai_nguyhai']}}
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
                            {{$key['maso_giayphep_quanly_chatthai_nguyhai']}}
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
                            {{$key['maso_giayphep_quanly_chatthai_nguyhai']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Loại hệ thống xử lý</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['name_loaihethong_xuly']}}
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
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Khối lượng cho phép</h6>
                            <p class="mb-1">
                                {{$key['khoiluong_chophep']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Đơn vị</h6>
                            <p class="mb-1">
                                {{$key['donvi']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Phương án xử lý</h6>
                            <p class="mb-1">
                                {{$key['phuongan_xuly']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Mức độ xử lý</h6>
                            <p class="mb-1">
                                {{$key['mucdo_xuly']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Đơn vị đo</h6>
                            <p class="mb-1">
                                {{$key['donvi']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ghi chú</h6>
                            <p class="mb-1">
                                {{$key['notes']}}
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
