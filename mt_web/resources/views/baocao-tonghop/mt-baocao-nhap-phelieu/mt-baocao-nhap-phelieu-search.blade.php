@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Báo cáo nhập phế liệu
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-12 form-group mb-3">
            <label for="mt_coso_nhapkhau_phelieu_id">Cơ sở nhập khẩu phế liệu</label>
            <select id="mt_coso_nhapkhau_phelieu_id" class="form-control">
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
    id="mt_baocao_nhap_phelieu_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Số báo cáo</th>
    <th class="text-bold">Cơ sở nhập khẩu phế liệu</th>
    <th class="text-bold">Năm báo cáo</th>
    <th class="text-bold">Tổng khối lượng đã nhập</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-baocao-nhap-phelieu-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['so_baocao']}}
                    </a>
                </td>
                <td>{{$col['so_xacnhan_coso_nhapkhau_phelieu']}}</td>
                <td>{{$col['nam_baocao']}}</td>
                <td>{{$col['tongkhoiluong_danhap']}}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Xem danh sách liên quan</span>
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
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_coso_nhapkhau_phelieu" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Cơ sở nhập khẩu phế liệu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list_mt_chitiet_baocao_nhap_phelieu" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Chi tiết báo cáo nhập phế liệu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list_mt_hopdong_thugom_xuly_chatthai_phatsinh" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Hợp đồng thu gom xử lý chất thải phát sinh
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_coso_nhapkhau_phelieu" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_coso_nhapkhau_phelieu_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list_mt_chitiet_baocao_nhap_phelieu" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_chitiet_baocao_nhap_phelieu_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list_mt_hopdong_thugom_xuly_chatthai_phatsinh" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-baocao-nhap-phelieu/config.js'}}"></script>
@endsection
