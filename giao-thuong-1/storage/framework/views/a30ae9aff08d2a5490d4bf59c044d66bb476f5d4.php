<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo e($SITE_TITLE ?? ""); ?></title>
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
    <!-- Basic Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/icons.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('images/logo.png')); ?>">


    <?php if(getenv('APP_ENV') === 'local'): ?>
        
    <?php else: ?>
        
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('stylesheet'); ?>
    <!-- CSS -->
    <?php echo $__env->yieldPushContent('css'); ?>
    <!-- JS TOP -->
    <?php echo $__env->yieldPushContent('js_top'); ?>
</head>
<body class="fixed-left">
    <div id="app">
        <div id="wrapper">
            <!-- CONTENT LAYOUT -->
            <?php echo $__env->yieldContent('layout'); ?>
        </div>
    </div>

    <div id="page-loading" style="display: none">
        <div class="loader no-select">
            <div class="spinner spinner--plane" style="width: 40px; height: 40px; left: 10px"></div>
        </div>
    </div>

    <script type="text/javascript">var ENTRY = '<?php echo e($ENTRY); ?>';</script>

    <!-- APP SCRIPT -->
    <?php if(getenv('APP_ENV') === 'local'): ?>
        <!-- Main -->
        <script src="/admin/dev/js/app.js"></script>
    <?php else: ?>
        <!-- Main -->
        <script src="/admin/dist/js/app.js?v=100"></script>
    <?php endif; ?>

    <script src="/js/vendor.min.js"></script>
    <script src="/js/app.min.js"></script>

    <!-- JS BOTTOM -->
    <?php echo $__env->yieldPushContent('js_bottom'); ?>
</body>
</html>
