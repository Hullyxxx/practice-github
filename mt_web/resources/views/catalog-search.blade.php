@extends('layouts.master')

@section('another-css')
    <style>
        .loadMore {
            background-color: rgb(255, 255, 255);
            color: #663399;
            all 400ms ease-in-out;
            -webkit-transition: all 400ms ease-in-out;
            -moz-transition: all 400ms ease-in-out;
            -o-transition: all 400ms ease-in-out;
        }

        .loadMore:hover {
            background-color: #663399;
            color: #fff;
        }
    </style>
@endsection

@section('current_page_name')
    Tìm kiếm
@endsection

@section('parent_page')
    Môi trường
@endsection

@section('current_page')
    Tìm kiếm
@endsection

@section('content')
    <!-- Search Bar -->
    <div class="row justify-content-center">
        <div class="col-md-6 mb-12" style=" padding-bottom: 1.1rem">
            <div class="input-group custom-search-bar">
                <input style="font-size:1.1rem; padding: 1.4rem " class="form-control" id="searchBasic" type="text"
                    placeholder="Tìm kiếm ..." />
                <div class="input-group-prepend">
                    <button class="btn btn-primary ladda-button example-button" data-style="expand-left"><span
                            class="ladda-label" id="btn-searchBasic" type="button"><i
                                class="icon-search4"></i></span></button>
                    {{-- <button class="btn btn-raised btn-raised-primary" id="btn-searchBasic" type="button">
                        <i class="icon-search4"></i>
                    </button> --}}
                </div>
                <div class="input-group-prepend" id="clear-search">
                    <button style="border-bottom-right-radius: 5px; border-top-right-radius: 5px" id="eraseElastic_input"
                        class="btn btn-danger ladda-button example-button" data-style="expand-left"><span
                            class="ladda-label"><i class="icon-eraser"></i></span></button>
                </div>
            </div>
        </div>
    </div>

    <!-- DOM gợi ý Search -->
    <div class="row justify-content-center" id="cusDomElastic">
        <div class="col-md-6 mt-1">
            <div class="list-group" id="resElactic">
                <!-- DOM a tag -->
            </div>
        </div>
    </div>

    <!-- Filter and Results Data -->
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row breadcrumb m-0">
                        <div class="col-md-6 card-title mb-0">
                            <i class="fa fa-filter"></i>
                            Bộ lọc
                            {{-- <i class="dd-arrow i-Arrow-Down-in-Circle" style="font-size: 16px"></i> --}}
                        </div>
                        <div class="col-md-6 text-right">
                            <button id="filterElastic" class="btn btn-success m-1" type="button">Lọc tiêu chí</button>
                        </div>
                    </div>
                    <div class="separator-breadcrumb border-top"></div>
                    <!-- Theo loại công trình -->
                    <div class="accordion" id="accordion_category">
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                    <a class="text-default collapsed" data-toggle="collapse" href="#option_district"
                                        aria-expanded="true">
                                        <span>
                                            <i class="i-File-Network ul-accordion__font"> </i>
                                        </span> Theo đơn vị hành chính
                                    </a>
                                </h6>
                            </div>
                            <div class="collapse show" id="option_district" data-parent="#accordion_category">
                                <div class="card-body">
                                    <label class="checkbox checkbox-success">
                                        <input id="district" type="checkbox" checked="checked" /><span
                                            id="district_checked">Đơn vị hành chính</span><span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                    <a class="text-default collapsed" data-toggle="collapse" href="#option_mt"
                                        aria-expanded="false">
                                        <span>
                                            <i class="i-File-Network ul-accordion__font"> </i>
                                        </span> Theo dữ liệu môi trường
                                    </a>
                                </h6>
                            </div>
                            <div class="collapse" id="option_mt" data-parent="#accordion_category">
                                <div class="card-body">
                                    @include('tim_kiem.search-option-mt')
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0">
                                    <a class="text-default collapsed" data-toggle="collapse" href="#option_cate"
                                        aria-expanded="true">
                                        <span>
                                            <i class="i-File-Network ul-accordion__font"> </i>
                                        </span> Theo danh mục
                                    </a>
                                </h6>
                            </div>
                            <div class="collapse" id="option_cate" data-parent="#accordion_category">
                                <div class="card-body">
                                    @include('tim_kiem.search-option-cate')
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="breadcrumb m-0">
                        <div class="card-title mb-3">
                            <i class="i-File-Clipboard-File--Text"></i>
                            Kết quả tìm kiếm
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <div class="col-xl-12">
                            <div class="o-hidden mb-2" id="dom_start">
                                <div class="some-list-counter-1">
                                    <ul style="list-style-type: none;margin: 0; padding: 0;">
                                        @if (count($result) > 0)
                                            @foreach ($result as $key)
                                                <li class="card o-hidden mb-4 border">
                                                    <a href="{{ $key['url'] }}" target='_blank' class="loadMore">
                                                        <div class="card-header">
                                                            <div class="d-inline-block">
                                                                <i class='fa fa-link'></i>
                                                                <strong>
                                                                    <span class="text-18">{{ $key['name'] }}
                                                                    </span>
                                                                </strong>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="text-16 text-teal-100 m-3 bg-white">
                                                        {!! $key['key_1'] !!}
                                                        {!! $key['key_2'] !!}
                                                        {!! $key['fk'] !!}
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center text-bold text-primary">Không tìm
                                                    thấy kết quả
                                                </td>
                                            </tr>
                                        @endif
                                    </ul>

                                </div>
                            </div>
                            <div style="font-size: 1.1rem;" class="mb-3" id="count_results"></div>
                            <div style="display: none" id="dom_search"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('another-js')
    <script src="{{ 'apps/tim-kiem/main.js' }}"></script>
@endsection
