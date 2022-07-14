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
    @yield('foreign-key')

    @yield('feild-value')
@endsection

@section('another-js')
    <script>
        $("#reports_page").addClass("active")
    </script>
    <script src="{{ 'apps/master-baocao-tonghop/main.js' }}"></script>

    @yield('custom-js')
@endsection
