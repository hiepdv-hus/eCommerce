<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>GEN - Giao thương Online</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="vi"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    {{--<meta http-equiv="REFRESH" content="{{ $REFRESH_TIME ?? 3000 }}"/>--}}
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="{{ $SITE_NAME ?? '' }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Basic Styles -->
{{--    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}
    <link href="/css/font-end/home.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/news.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/event.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/tradeList.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/tradeDetail.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/enterpriseDetail.css" rel="stylesheet" type="text/css" />

    @stack('stylesheet')
    <!-- CSS -->
    @stack('css')
    <!-- JS TOP -->
    @stack('js_top')
</head>
<body class="fixed-left">
    <div id="app" style="background-color: #dcdee34f ">
        <!-- CONTENT LAYOUT -->
        @yield('layout')
    </div>

    <!-- APP SCRIPT -->
    @if (getenv('APP_ENV') === 'local')
        <!-- Main -->
        <script src="/dev/js/app.js"></script>
    @else
        <!-- Main -->
        <script src="/dist/js/app.js?v=100"></script>
    @endif

    <!-- JS BOTTOM -->
    @stack('js_bottom')
</body>
</html>
