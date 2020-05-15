<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <title>GEN - Giao thương Online</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="vi"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-title" content="<?php echo e($SITE_NAME ?? ''); ?>"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldPushContent('meta'); ?>

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Basic Styles -->

    <link href="/css/font-end/home.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/news.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/event.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/tradeList.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/tradeDetail.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-end/enterpriseDetail.css" rel="stylesheet" type="text/css" />

    <?php echo $__env->yieldPushContent('stylesheet'); ?>
    <!-- CSS -->
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- JS TOP -->
    <?php echo $__env->yieldPushContent('js_top'); ?>
</head>
<body class="fixed-left">
    <div id="app" style="background-color: #dcdee34f ">
        <!-- CONTENT LAYOUT -->
        <?php echo $__env->yieldContent('layout'); ?>
    </div>

    <!-- APP SCRIPT -->
    <?php if(getenv('APP_ENV') === 'local'): ?>
        <!-- Main -->
        <script src="/dev/js/app.js"></script>
    <?php else: ?>
        <!-- Main -->
        <script src="/dist/js/app.js?v=100"></script>
    <?php endif; ?>

    <!-- JS BOTTOM -->
    <?php echo $__env->yieldPushContent('js_bottom'); ?>
</body>
</html>
