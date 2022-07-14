@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Nguồn thải
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="enterprise_id">Doanh nghiệp</label>
            <select id="enterprise_id" class="form-control">
            </select>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="tnn_thongtincapphep_id">Thông tin cấp phép</label>
            <select id="tnn_thongtincapphep_id" class="form-control">
            </select>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="basin_id">Lưu vực sông</label>
            <select id="basin_id" class="form-control">
            </select>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="loainguonthai_id">Loại nguồn thải</label>
            <select id="loainguonthai_id" class="form-control">
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
    id="mt_nguonthai_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Lưu lượng xả thải</th>
    <th class="text-bold">Doanh nghiệp</th>
    <th class="text-bold">Thông tin cấp phép</th>
    <th class="text-bold">Lưu vực sông</th>
    <th width="40%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-nguonthai-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['luluong_xa_nguonthai']}}
                    </a>
                </td>
                <td>{{$col['name_enterprise']}}</td>
                <td>{{$col['name_tnn_thongtincapphep']}}</td>
                <td>{{$col['name_basin']}}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Xem danh sách liên quan</span>
                        </span>
                    </button>
                    {{--<a href='map?id={{$col['id']}}&name_table=mt_nguonthai' target='_blank' class='btn btn-success btn-icon m-1'>
                        Đi đến
                        <i class='fa fa-map-marker' style='font-size: 16px'></i>
                    </a>--}}
                    <button id='{{ $col['id'] }}' class="btn btn-success btn-icon m-1" type="button"
                            onclick="onclick_read_coor_details(url_indexid, this, 'mt_nguonthai', '#list_mt_nguonthai_coor_tbody')">
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
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#list_enterprise" role="tab" aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Doanh nghiệp
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_enterprise" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
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
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_nguonthai_coor_tbody" role="tab"
                       aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Bản đồ nguồn thải
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_nguonthai" role="tabpanel"
                 aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_nguonthai_coor_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-nguonthai/config.js'}}"></script>
@endsection
