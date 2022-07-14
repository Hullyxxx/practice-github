@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
   Văn bản
@endsection

@section('foreign-key')
    @if(count($result) > 0)
        @foreach($result as $key)
            <div class="row mb-4 mt-4">
                {{-- <div class="col-lg-4 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-white">Cate Table</span>
                            </div>
                        </div>
                        <div class="card-title text-teal-600 mt-2 bg-white">
                            {{$key['name_cate_table']}}
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Đơn vị quản lý</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_donvi_quanly']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Đính kèm</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_dinhkem']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Chức vụ</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_chucvu']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Loại văn bản</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{$key['name_loaivanban']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-22 text-purple-500">Tên văn bản</span>
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
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Số quyết định</h6>
                            <p class="mb-1">
                                {{$key['soquyetdinh']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Ngày hiệu lực</h6>
                            <p class="mb-1">
                                {{$key['ngay_hieuluc_date']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Người ký</h6>
                            <p class="mb-1">
                                {{$key['nguoi_ky']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Trích yếu</h6>
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

