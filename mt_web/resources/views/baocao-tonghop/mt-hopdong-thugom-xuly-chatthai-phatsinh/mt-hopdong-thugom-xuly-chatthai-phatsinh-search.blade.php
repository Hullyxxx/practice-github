@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Hợp đồng thu gom xử lý chất thải phát sinh
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-4 form-group mb-3">
            <label for="mt_baocao_nhap_phelieu_id">Báo cáo nhập phế liệu</label>
            <select id="mt_baocao_nhap_phelieu_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="mt_chatthai_id">Chất thải</label>
            <select id="mt_chatthai_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="enterprise_id">Doanh nghiệp</label>
            <select id="enterprise_id" class="form-control">
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
    id="mt_hopdong_thugom_xuly_chatthai_phatsinh_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Số hợp đồng thu gom</th>
    <th class="text-bold">Doanh nghiệp</th>
    <th class="text-bold">Báo cáo nhập phế liệu</th>
    <th class="text-bold">Chất thải</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-hopdong-thugom-xuly-chatthai-phatsinh-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['sohopdong_thugom']}}
                    </a>
                </td>
                <td>{{$col['name_enterprise']}}</td>
                <td>{{$col['name_mt_baocao_nhap_phelieu']}}</td>
                <td>{{$col['name_mt_chatthai']}}</td>
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
                    <a class="nav-link" data-toggle="tab" href="#list_mt_baocao_nhap_phelieu" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Báo cáo nhập phế liệu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list_mt_chatthai" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Chất thải
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list_enterprise" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Doanh nghiệp
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade" id="list_mt_baocao_nhap_phelieu" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_baocao_nhap_phelieu_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list_mt_chatthai" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_chatthai_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list_enterprise" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_enterprise_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-hopdong-thugom-xuly-chatthai-phatsinh/config.js'}}"></script>
@endsection
