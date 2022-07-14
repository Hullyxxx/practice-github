@extends('layouts.master')

@section('another-css')
    <style>
        .separator-breadcrumb.border-top {
            margin-bottom: 0;
        }

        .text-bold {
            font-weight: bold !important;
        }

        #table-details {
            table-layout: fixed;
        }

        #table-details td {
            color: #898686;
            word-wrap: break-word;
            text-align: justify;
        }

        #table-details th {
            width: 20%;
            word-wrap: break-word;
            text-align: justify;
        }
    </style>
    <!-- Custom CSS -->
    @yield('custom-css')
@endsection

@section('current_page_name')
    Báo cáo tổng hợp
@endsection

@section('current_page')
    Báo cáo tổng hợp
@endsection

@section('content')
    {{-- Tìm kiếm nâng cao --}}
    <div class="row">
        <div class="col-md-12 mt-12">
            <form>
                @yield('advance-search-form')
            </form>
        </div>
    </div>

    {{-- View thông tin chi tiết + href liên kết trang tiền tố mt_, enterprise và modal files --}}
    {{-- Tìm kiếm cơ bản (Sau khi DOM từ Table - thư viện Datatable) --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title">Kết quả tìm kiếm</h4>
                    <div class="table-responsive">
                        <table @yield('id-table') class="display table-middle-center table table-striped table-bordered"
                            style="width:100%">
                            <thead class="text-center text-nowrap">
                                @yield('thead-th')
                            </thead>
                            <tbody>
                                @yield('tbody-td')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_lists" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 70vw">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold">DANH SÁCH LIÊN QUAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="row">
                        @yield('modal-body-lists')
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-gray-900" type="button" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_lists_coor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 70vw">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold">DANH SÁCH TỌA ĐỘ CHI TIẾT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0">
                    <div class="row">
                        @yield('modal-body-coor-lists')
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-gray-900" type="button" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('another-js')
    <script>
        $("#reports_page").addClass("active")
    </script>
    <script src="{{ 'apps/master-baocao-tonghop/main.js' }}"></script>
    @yield('custom-js')
@endsection
