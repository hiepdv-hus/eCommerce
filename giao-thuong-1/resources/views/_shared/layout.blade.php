@extends('_shared.master')
@section('layout')
    <!-- Top Bar-->
    @include('_shared.inc.header')
    <!-- End Top Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- Footer Start -->
    @include('_shared.inc.footer')
    <!-- end Footer -->
@stop
