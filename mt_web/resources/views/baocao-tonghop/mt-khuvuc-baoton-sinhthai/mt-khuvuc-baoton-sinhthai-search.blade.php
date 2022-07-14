@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Khu vực bảo tồn sinh thái
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
            <label for="donvi_quanly_id">Đơn vị quản lý</label>
            <select id="donvi_quanly_id" class="form-control">
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
    id="mt_khuvuc_baoton_sinhthai_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Tên khu vực bảo tồn sinh thái</th>
    <th class="text-bold">Loài bảo tồn</th>
    <th class="text-bold">Loài đặc trưng</th>
    <th class="text-bold">Loài ưu thế</th>
    <th width="40%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach($result as $col)
            <tr>
                <td>
                    <a href='mt-khuvuc-baoton-sinhthai-detail?id={{$col['id']}}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{$col['name']}}
                    </a>
                </td>
                <td>{{$col['loaibaoton']}}</td>
                <td>{{$col['loaidactrung']}}</td>
                <td>{{$col['loaiuuthe']}}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{$col['id']}}' class="btn btn-info btn-icon m-1" type="button" onclick="onclick_read_details(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Danh sách liên quan</span>
                        </span>
                    </button>
                    {{--<a href='map?id={{$col['id']}}&name_table=mt_khuvuc_baoton_sinhthai' target='_blank' class='btn btn-success btn-icon m-1'>
                        Đi đến
                        <i class='fa fa-map-marker' style='font-size: 16px'></i>
                    </a>--}}
                    <button id='{{ $col['id'] }}' class="btn btn-success btn-icon m-1" type="button"
                            onclick="onclick_read_coor_details(url_indexid, this, 'mt_khuvuc_baoton_sinhthai', '#list_mt_khuvuc_baoton_sinhthai_coor_tbody')">
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
                    <a class="nav-link active" data-toggle="tab" href="#list_mt_khuvuc_baoton_sinhthai_coor_tbody" role="tab"
                       aria-controls="info_fk_1" aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Bản đồ khu vực bảo tồn sinh thái
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_mt_khuvuc_baoton_sinhthai" role="tabpanel"
                 aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_mt_khuvuc_baoton_sinhthai_coor_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{'apps/baocao-tonghop/mt-khuvuc-baoton-sinhthai/config.js'}}"></script>
@endsection
