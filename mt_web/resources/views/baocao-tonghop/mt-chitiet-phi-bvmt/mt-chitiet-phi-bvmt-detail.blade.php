@extends('master-baocao-tonghop-detail')

@section('custom-css')
@endsection

@section('parent_page')
    Chi tiết phí bảo vệ môi trường
@endsection

@section('foreign-key')
    @if (count($result) > 0)
        @foreach ($result as $key)
            <div class="row mb-4 mt-4">
                <div class="col-lg-12 col-xl-12 text-center">
                    <div class="card o-hidden mb-4">
                        <div class="card-header purple-500">
                            <div class="d-inline-block">
                                <span class="text-18  font-25 text-purple-500">Năm thực hiện phí bảo vệ môi trường</span>
                            </div>
                        </div>
                        <div class="card-title text-purple-500 mt-2 bg-white">
                            {{ $key['nam_thuchien'] }}
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
                            <h6 class="text-18 text-purple line-height-1 mb-3">Thời gian</h6>
                            <p class="mb-1">
                                {{ $key['thoigian_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="text-18 text-purple line-height-1 mb-3">Số tiền nộp hành năm</h6>
                            <p class="mb-1">
                                {{ $key['sotien_nop_hangnam_quy'] }}
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
