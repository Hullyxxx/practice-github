@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Văn bản
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="range_date">Ngày bắt đầu - Ngày kết thúc</label>
            <input type="text" id="range_date" class="form-control"/>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="donvi_quanly_id">Đơn vị quản lý</label>
            <select id="donvi_quanly_id" class="form-control">
            </select>
        </div>
        {{-- <div class="col-md-4 form-group mb-3">
            <label for="cate_table_id">#####</label>
            <select id="cate_table_id" class="form-control">
            </select>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-md-4 form-group mb-3">
            <label for="dinhkem_id">Đính kèm</label>
            <select id="dinhkem_id" class="form-control">
            </select>
        </div> <div class="col-md-4 form-group mb-3">
            <label for="chucvu_id">Đơn vị quản lý</label>
            <select id="chucvu_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="loaivanban_id">Loại văn bản</label>
            <select id="loaivanban_id" class="form-control">
            </select>
        </div>
    </div>
@endsection

@section('id-table')
    id="mt_vanban_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên văn bản</th>
    <th class="text-bold">Số quyết định</th>
    <th class="text-bold">Ngày hiệu lực</th>
    <th class="text-bold">Người kí</th>
     <th width="25%">
          {{--Buttons--}}
     </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-vanban-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name']}}
                    </a>
                </td>
                <td>{{$col['soquyetdinh']}}</td>
                <td>{{$col['ngay_hieuluc_date']}}</td>
                <td>{{$col['nguoi_ky']}}</td>
                 <td>
                      {{--Buttons--}}
                     <button class="btn btn-warning btn-icon m-1" type="button">
                        <span class="ul-btn__icon">
                            <i class="icon-file-pdf"></i>
                            <span class="ul-btn__text">PDF</span>
                        </span>
                     </button>
                 </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="7" class="text-center text-bold text-primary">Không tìm thấy kết quả</td>
        </tr>
    @endif
@endsection


@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-vanban/config.js'}}"></script>
@endsection
