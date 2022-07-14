<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.lib-css')
    <!-- Add another CSS -->
    @yield('another-css')
</head>
<body class="text-left">
<span style="display: none">{{session_start()}}</span>
@if(!isset($_SESSION['username']))
    <script>window.location = "../../all_session/login.php";</script>
@else
    @if(isset($_SESSION['permission_id']))
        @if(strpos($_SESSION['permission_id'], '0') === false && strpos($_SESSION['permission_id'], '1') === false
            && strpos($_SESSION['permission_id'], '2') === false && strpos($_SESSION['permission_id'], '3') === false
            && strpos($_SESSION['permission_id'], '4') === false && strpos($_SESSION['permission_id'], '5') === false)
            <script>window.location = "../../all_session/login.php";</script>
        @endif
    @endif
@endif
<div class="app-admin-wrap layout-sidebar-large">
    <!-- Header START -->
    @include('layouts.header')
    <!-- Header END -->

    <!-- Side Nav START -->
    @include('layouts.sidebar')
    <!-- Side Nav END -->

    <!-- Page Container START -->
    @if(Request::getPathInfo() === '/map')
        @yield('content')
    @else
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>@yield('current_page_name')</h1>
                    <ul>
                        <li><a href="#">@yield('parent_page')</a></li>
                        <li>@yield('current_page')</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                @yield('content')
            </div>
        </div>
    @endif
    <!-- Page Container START -->
</div>

@include('layouts.lib-js')
<!-- Add another JS -->
@yield('another-js')
</body>
</html>
