@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Chất thải nguy hại
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
            <label for="mt_giayphep_quanly_chatthainguyhai_id">Giấy phép quản lý chất thải nguy hại</label>
            <select id="mt_giayphep_quanly_chatthainguyhai_id" class="form-control">
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="loaihethong_xuly_id">Loại hệ thống xử lý</label>
            <select id="loaihethong_xuly_id" class="form-control">
            </select>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="trangthai_tontai_id">Trạng thại tồn tại</label>
            <select id="trangthai_tontai_id" class="form-control">
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a id="search" class="btn btn-primary btn-block m-1 mb-3 text-white"
               style="height: 40px; font-size: 15px">Tìm kiếm</a>
        </div>
    </div>
@endsection

@section('id-table')
    id="mt_chatthai_nguyhai_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên chất thải nguy hại</th>
    <th class="text-bold">Khối lượng cho phép</th>
    <th class="text-bold">Đơn vị</th>
    <th class="text-bold">Phương án xử lý</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-chatthai-nguyhai-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name_chatthai_nguyhai']}}
                    </a>
                </td>
                <td>{{$col['khoiluong_chophep']}}</td>
                <td>{{$col['donvi']}}</td>
                <td>{{$col['phuongan_xuly']}}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Danh sách liên quan</span>
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

@section('modal-body-lists')
    <div class="col-md-12">
        {{-- Dom list of each tab foreign key --}}
        <div id="foreign_key">
            <ul class="nav nav-tabs" id="listsTab" role="tablist">
                <li class="nav-item ">
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_giayphep_quanly_chatthainguyhai" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Giấy phép quản lý chất thải nguy hại
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#list_mt_chitiet_chatthai_nguyhai" role="tab" aria-controls="info_fk_2" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Chi tiết chất thải nguy hại
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_giayphep_quanly_chatthainguyhai" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_giayphep_quanly_chatthainguyhai_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade show " id="list_mt_chitiet_chatthai_nguyhai" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_chitiet_chatthai_nguyhai_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-chatthai-nguyhai/config.js'}}"></script>
@endsection
