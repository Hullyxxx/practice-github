@extends('layouts.master')

@section('another-css')
@endsection

@section('current_page_name')
    Trang chủ
@endsection

@section('parent_page')
    Môi trường
@endsection

@section('current_page')
    Trang chủ
@endsection

@section('content')
@endsection

@section('another-js')
    <script>
        $("#home_page").addClass("active")
    </script>

    <!-- Custom JS -->
    {{--<script src="maps/index-main.js"></script>--}}
@endsection

