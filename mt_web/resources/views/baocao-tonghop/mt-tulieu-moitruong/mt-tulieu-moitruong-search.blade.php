@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Tư liệu môi trường
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-4 form-group mb-3">
            <label for="range_date">Ngày bắt đầu - Ngày kết thúc</label>
            <input type="text" id="range_date" class="form-control"/>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="donvi_quanly_id">Đơn vị quản lý</label>
            <select id="donvi_quanly_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="loaitulieu_id">Loại tư liệu</label>
            <select id="loaitulieu_id" class="form-control">
            </select>
        </div>
    </div>
@endsection

@section('id-table')
    id="mt_tulieu_moitruong_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên tư liệu môi trường</th>
    <th class="text-bold">Ngày</th>
    <th class="text-bold">Tác giả, người ký</th>
    <th class="text-bold">Trích yếu</th>
    <th class="text-bold">Ghi chú</th>
   {{-- <th width="25%">
        --}}{{-- Buttons --}}{{--
    </th>--}}
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-tulieu-moitruong-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name']}}
                    </a>
                </td>
                <td>{{$col['ngay_date']}}</td>
                <td>{{$col['tacgia_nguoiky']}}</td>
                <td>{{$col['trich_yeu']}}</td>
                <td>{{$col['notes']}}</td>
               {{-- <td>
                    --}}{{-- Buttons --}}{{--
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Danh sách liên quan</span>
                        </span>
                    </button>
                </td>--}}
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="7" class="text-center text-bold text-primary">Không tìm thấy kết quả</td>
        </tr>
    @endif
@endsection


@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-tulieu-moitruong/config.js'}}"></script>
@endsection
