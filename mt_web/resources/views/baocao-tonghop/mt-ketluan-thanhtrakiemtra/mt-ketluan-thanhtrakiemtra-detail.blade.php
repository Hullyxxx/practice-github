@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Kết luận thanh tra kiểm tra
@endsection

@section('foreign-key')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-xl-12 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Số quyết định</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['soquyetdinh'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Đơn vị quản lý</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_donvi_quanly'] }}
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Đoàn thanh tra kiểm tra</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{ $key['name_mt_doanthanhtra_kiemtra'] }}
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
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày kết luận</h6>
                            <p class="mb-1">
                                {{ $key['ngay_ketluan_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Trích yếu</h6>
                            <p class="mb-1">
                                {{ $key['trich_yeu'] }}
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
