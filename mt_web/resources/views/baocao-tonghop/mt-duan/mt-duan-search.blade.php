@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Dự án
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
            <label for="enterprise_id">Doanh nghiệp</label>
            <select id="enterprise_id" class="form-control">
            </select>
        </div>
        <div class="col-md-4 form-group mb-3">
            <label for="district_id">Đơn vị hành chính</label>
            <select id="district_id" class="form-control">
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
    id="mt_duan_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên dự án</th>
    <th class="text-bold">Năm thực hiện</th>
    <th class="text-bold">Diện tích xây dựng</th>
    <th class="text-bold">Quy mô</th>
    <th >
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-duan-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name']}}
                    </a>
                </td>
                <td>{{$col['nam_thuchien']}}</td>
                <td>{{$col['dientich_xaydung']}}</td>
                <td>{{$col['quymo']}}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Danh sách liên quan</span>
                        </span>
                    </button>
                    {{--<a id='{{$col['id']}}' href='map?id={{$col['id']}}&name_table=mt_duan' target='_blank' class='btn btn-success btn-icon m-1' onclick="onclick_map(url_indexid, this)">
                        Đi đến
                        <i class='fa fa-map-marker' style='font-size: 16px'></i>
                    </a>--}}
                    <button id='{{ $col['id'] }}' class="btn btn-success btn-icon m-1" type="button"
                            onclick="onclick_read_coor_details(url_indexid, this, 'mt_duan', '#list_mt_duan_coor_tbody')">
                        <span class="ul-btn__icon">
                            <i class="i-Map2"></i>
                            <span class="ul-btn__text">Danh sách đối tượng bản đồ</span>
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
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_hoso_thutuc_hanhchinh" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Hồ sơ thủ tục hành chính
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " data-toggle="tab" href="#list_enterprise" role="tab" aria-controls="info_fk_2" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Doanh nghiệp
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_hoso_thutuc_hanhchinh" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_hoso_thutuc_hanhchinh_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade show " id="list_enterprise" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_enterprise_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modal-body-coor-lists')
    <div class="col-md-12">
        {{-- Dom list of each tab foreign key --}}
        <div id="foreign_key">
            <ul class="nav nav-tabs" id="listsTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_duan_coor_tbody" role="tab"
                       aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Bản đồ dự án
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_duan" role="tabpanel"
                 aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_duan_coor_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-duan/config.js'}}"></script>
@endsection
