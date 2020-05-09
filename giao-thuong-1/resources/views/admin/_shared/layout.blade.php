@extends('admin._shared.master')
@section('layout')
    <!-- Top Bar-->
    @include('admin._shared.inc.header')
    <!-- End Top Bar-->

    <!-- Navigation Bar-->
    @include('admin._shared.inc.navigation')
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!-- Footer Start -->
        @include('admin._shared.inc.footer')
        <!-- end Footer -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Setting sidebar -->
    {{--@include('_shared.inc.settingsidebar')--}}
@stop
