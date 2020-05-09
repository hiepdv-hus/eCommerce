@extends('admin._shared.master')
@section('layout')
    <div class="content">
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="logo-wrap">
                <img src="" alt="" title="" srcset="/images/logo-light.png">
            </div>

            <auth-login></auth-login>

            <div class="row">
                <div class="col-sm-12 text-center text-dark">
                    <p style="font-size: 12px;">
                        <i>GEN Center 1.0.0 - © 2019-2020.</i>
                        <br /><i>Powered by GEN Tech.</i>
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop
@push('stylesheet')
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/general.css?v=1.0.0" rel="stylesheet" type="text/css" />
@endpush
@push('css')
{{--<style>--}}
    {{--.account-pages{--}}
        {{--background: #263237;--}}
    {{--}--}}

    {{--.logo-wrap{--}}
        {{--text-align: center;--}}
    {{--}--}}

    {{--.logo-wrap img {--}}
        {{--max-width: 100%;--}}
        {{--width: 150px;--}}
    {{--}--}}

    {{--.wrapper-page {--}}
        {{--margin: 10% auto 5%;--}}
        {{--position: relative;--}}
        {{--width: 450px;--}}
    {{--}--}}

    {{--.wrapper-page .card-box{--}}
        {{---webkit-box-shadow: none;--}}
        {{---moz-box-shadow: none;--}}
        {{--box-shadow: none;--}}
        {{--border: none;--}}
    {{--}--}}

    {{--#form-login input{--}}
        {{--color: #ddd--}}
    {{--}--}}
{{--</style>--}}
@endpush
