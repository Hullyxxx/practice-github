@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Đoàn thanh tra kiểm tra
@endsection

@section('foreign-key')
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Đoàn thanh tra kiểm tra</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['soquyetdinh']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Kế hoạch bảo vệ môi trường</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['soquyetdinh_kehoach_bvmt']}}
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
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày ban hành</h6>
                            <p class="mb-1">
                                {{$key['ngay_banhanh_date']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Số lượng cơ sở thanh tra kiểm tra</h6>
                            <p class="mb-1">
                                {{$key['soluong_coso_thanhtrakiemtra']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Thời gian thanh tra kiểm tra</h6>
                            <p class="mb-1">
                                {{$key['thoigian_thanhtrakiemtra']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Trưởng đoàn</h6>
                            <p class="mb-1">
                                {{$key['truongdoan']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Phó đoàn</h6>
                            <p class="mb-1">
                                {{$key['phodoan']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Thành viên đoàn</h6>
                            <p class="mb-1">
                                {{$key['thanhviendoan']}}
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
