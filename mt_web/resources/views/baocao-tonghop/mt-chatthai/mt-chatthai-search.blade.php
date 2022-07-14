@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Chất thải
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
            <label for="loaichatthai_id">Loại chất thải</label>
            <select id="loaichatthai_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="trangthai_tontai_id">Trạng thái tồn tại</label>
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
    id="mt_chatthai_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên chất thải</th>
    <th class="text-bold">Ký hiệu</th>
    <th class="text-bold">Giới hạn nồng độ</th>
    <th class="text-bold">Thành phần chất thải</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-chatthai-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name_chatthai']}}
                    </a>
                </td>
                <td>{{$col['kyhieu']}}</td>
                <td>{{$col['gioihan_nongdo']}}</td>
                <td>{{$col['thanhphan_chatthai']}}</td>
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
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_chitiet_chatthai_nguyhai" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Chi tiết chất thải nguy hại
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#list_mt_chitiet_sodangki_chunguonthai" role="tab" aria-controls="info_fk_2" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Chi tiết sổ đăng kí chủ nguồn thải
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#list_mt_hopdong_thugom_xuly_chatthai_phatsinh" role="tab" aria-controls="info_fk_3" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Hợp  đồng thu gom xử lý chất thải phát sinh
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_chitiet_chatthai_nguyhai" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_chitiet_chatthai_nguyhai_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade show " id="list_mt_chitiet_sodangki_chunguonthai" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_chitiet_sodangki_chunguonthai_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade show " id="list_mt_hopdong_thugom_xuly_chatthai_phatsinh" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_3 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_hopdong_thugom_xuly_chatthai_phatsinh_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-chatthai/config.js'}}"></script>
@endsection
