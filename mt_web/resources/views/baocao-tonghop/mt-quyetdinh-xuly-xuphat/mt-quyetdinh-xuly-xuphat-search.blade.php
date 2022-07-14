@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Quyết định xử lý, xử phạt
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
            <label for="mt_bienban_thanhtrakiemtra_id">Biên bản thanh tra kiểm tra</label>
            <select id="mt_bienban_thanhtrakiemtra_id" class="form-control">
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
    id="mt_quyetdinh_xuly_xuphat_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Số quyết định xử lý</th>
    <th class="text-bold">Biên bản thanh tra kiểm tra</th>
    <th class="text-bold">Ngày ban hành quyết định xử lý</th>
    <th class="text-bold">Hình thức xử lý chính</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-quyetdinh-xuly-xuphat-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['soquyetdinh_xuly']}}
                    </a>
                </td>
                <td>{{$col['name_mt_bienban_thanhtrakiemtra']}}</td>
                <td>{{$col['ngaybanhanh_quyetdinh_xuly_date']}}</td>
                <td>{{$col['hinhthuc_xuly_chinh']}}</td>
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
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_bienban_thanhtrakiemtra" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Biên bản thanh tra kiểm tra
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_bienban_thanhtrakiemtra" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_bienban_thanhtrakiemtra_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-quyetdinh-xuly-xuphat/config.js'}}"></script>
@endsection
