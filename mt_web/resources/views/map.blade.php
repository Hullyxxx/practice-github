@extends('layouts.master')

@section('another-css')
    <style>
        #map {
            height: 91.5vh;
        }
    </style>
    <!-- Style SideBar Right -->
    <style>
        .custom-sidebar-right {
            background-color: #fff;
            position: absolute;
            right: 0;
            top: 80px;
            height: calc(100vh - 80px);
            width: 70vh;
            opacity: 0;
            visibility: hidden;
            transition: opacity .25s, visibility .25s;
        }

        .custom-sidebar-right.open {
            visibility: visible;
            opacity: 1;
        }

        #table_searchMap_wrapper div:nth-child(3) {
            margin-top: 1rem;
        }

        .dummy {
            z-index: 550 !important;
        }

        /* Custom scroll bar */
        #table_searchMap_wrapper div:nth-child(2)::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(93, 93, 93, 0.3);
            background-color: #F5F5F5;
        }

        #table_searchMap_wrapper div:nth-child(2)::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            background-color: #F5F5F5;
        }

        #table_searchMap_wrapper div:nth-child(2)::-webkit-scrollbar-thumb {
            background-color: rgba(93, 93, 93, 0.3);
        }
    </style>
@endsection

@section('current_page_name')
    Bản đồ
@endsection

@section('parent_page')
    Môi trường
@endsection

@section('current_page')
    Bản đồ
@endsection

@section('content')
    <div class="main-content-wrap sidenav-open d-flex flex-column p-0">
        <div class="main-content">
            <div id="map"></div>
        </div>
    </div>
    <div class="custom-sidebar-right">
        <div class="row justify-content-center m-0">
            <div class="text-center mt-3">
                <h5 class="text-primary" style="font-weight: bold">Tìm kiếm dữ liệu bản đồ</h5>
            </div>
            <div class="col-md-12">
                <div class="input-group">
                    <input class="form-control" id="searchMap_input" type="text" placeholder="Tìm kiếm ..."/>
                    <div class="input-group-prepend">
                        <button class="btn btn-raised btn-raised-primary" type="button" id="btn-searchmap">
                            <i class="icon-search4"></i>
                        </button>
                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table id="table_searchMap" class="display table table-striped table-bordered text-center"
                           style="width:100%">
                        <thead>
                        <tr>
                            <th>Danh sách tọa độ bản đồ của đối tượng</th>
                            <th >Xem chi tiết</th>
                        </tr>
                        <div id="counter-result"></div>
                        <div id="dom-result"></div>
                        </thead>
                    </table>

                </div>
                <div class="text-right mt-3">
                    <a id="closeSearch" href="#" class="btn btn-primary">Đóng</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('another-js')
    <script>
        $("#map_page").addClass("active")
    </script>

    <!-- Custom JS -->
    {{--<script src="maps/index-main.js"></script>--}}
    <script src="apps-map/mapScript_exp.js"></script>
    <script src="apps-map/mapSearchGeom.js"></script>
    <script src="apps-map/mapTableSearch.js"></script>
    <script src="apps-map/mapLegend.js"></script>
    <script src="apps-map/mapSearch.js"></script>
@endsection
