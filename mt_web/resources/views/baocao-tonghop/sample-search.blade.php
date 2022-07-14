@extends('master-baocao-tonghop')

@section('custom-css')
@endsection

@section('parent_page')
    Sample Search
@endsection

@section('advance-search-form')
    {{-- Các cột liên quan đến date sẽ setup thành chọn range_date,
    Các select option khi tạo cần có khoá ngoại mới tạo (ưu tiên có tiền tố mt_, sau đó là các category --}}
    <div class="row">
        <div class="col-md-6 form-group mb-3">
            <label for="category_id">Loại trạm</label>
            <select id="category_id" class="form-control">
            </select>
        </div>
        <div class="col-md-6 form-group mb-3">
            <label for="range_date">Ngày bắt đầu - Ngày kết thúc</label>
            <input type="text" id="range_date" class="form-control" />
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
    id="sample_table_dom"
@endsection

@section('thead-th')
    <th class="text-bold">Col A</th>
    <th class="text-bold">Col C</th>
    <th class="text-bold">Col D</th>
    <th class="text-bold">Col B date</th>
    <th width="25%">
        {{-- Buttons --}}
    </th>
@endsection

@section('tbody-td')
    @if (count($result) > 0)
        @foreach ($result as $col)
            <tr>
                <td>
                    <a href='sample-detail?id={{ $col['id'] }}' target='_blank'>
                        <i class='fa fa-link'></i>
                        {{ $col['col_a'] }}
                    </a>
                </td>
                <td >{{ $col['col_c'] }}</td>
                <td>{{ $col['col_d'] }}</td>
                <td>{{ $col['col_b_date'] }}</td>
                <td>
                    {{-- Buttons --}}
                    <button id='{{ $col['id'] }}' class="btn btn-info btn-icon m-1" type="button"
                        onclick="read_detail(url_indexid, this)">
                        <span class="ul-btn__icon">
                            <i class="i-Data-Block"></i>
                            <span class="ul-btn__text">Xem chi tiết</span>
                        </span>
                    </button>
                    <a href='map?id={{ $col['id'] }}' target='_blank' class='btn btn-success btn-icon m-1'>
                        Đi đến
                        <i class='fa fa-map-marker' style='font-size: 16px'></i>
                    </a>
                    <button class="btn btn-warning btn-icon m-1" type="button" >
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

@section('modal-body-lists')
    <div class="col-md-12">
        {{-- Dom list of each tab foreign key --}}
        <div id="foreign_key">
            <ul class="nav nav-tabs" id="listsTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#list_fk_1" role="tab" aria-controls="info_fk_1"
                        aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Khoá ngoại 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#list_fk_2" role="tab" aria-controls="info_fk_2"
                        aria-selected="false">
                        <i class="nav-icon i-Library mr-1"></i>
                        Khoá ngoại 2
                    </a>
                </li>
            </ul>
        </div>
        <div id="related-lists" class="tab-content">
            <div class="tab-pane fade show active" id="list_fk_1" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_1 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_fk_1_tbody">
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="list_fk_2" role="tabpanel" aria-labelledby="main-info-tab">
                {{-- DOM data fk_2 --}}
                <table class="display table-middle-center table table-striped table-bordered" style="width:100%">
                    <tbody id="list_fk_2_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ 'apps/baocao-tonghop/config.js' }}"></script>
@endsection
