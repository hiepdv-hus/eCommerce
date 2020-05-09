<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>{{ $SITE_TITLE ?? "" }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="vi"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="{{ $SITE_NAME ?? '' }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <!-- Basic Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/icons.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
{{--    <script src="https://kit.fontawesome.com/yourcode.js"></script>--}}

    @if (getenv('APP_ENV') === 'local')
        {{--<link href="/cms/dev/css/style.css" rel="stylesheet" type="text/css" />--}}
    @else
        {{--<link href="/cms/dev/css/style.css" rel="stylesheet" type="text/css" />--}}
    @endif

    @stack('stylesheet')
    <!-- CSS -->
    @stack('css')
    <!-- JS TOP -->
    @stack('js_top')
</head>
<body class="fixed-left">
    <div id="app">
        <div id="wrapper">
            <!-- CONTENT LAYOUT -->
            @yield('layout')
        </div>
    </div>

    <div id="page-loading" style="display: none">
        <div class="loader no-select">
            <div class="spinner spinner--plane" style="width: 40px; height: 40px; left: 10px"></div>
        </div>
    </div>

    <script type="text/javascript">var ENTRY = '{{$ENTRY}}';</script>

    <!-- APP SCRIPT -->
    @if (getenv('APP_ENV') === 'local')
        <!-- Main -->
        <script src="/admin/dev/js/app.js"></script>
    @else
        <!-- Main -->
        <script src="/admin/dist/js/app.js?v=100"></script>
    @endif

    <script src="/js/vendor.min.js"></script>
    <script src="/js/app.min.js"></script>

    <!-- JS BOTTOM -->
    @stack('js_bottom')
</body>
</html>
