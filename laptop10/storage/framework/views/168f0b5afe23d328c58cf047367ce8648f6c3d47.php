<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo e(asset('js/ckeditor/ckeditor.js')); ?>" defer></script>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="<?php echo e(asset('css/admin/admin.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<?php if(Session::has('username')): ?>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                   

                    <a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Logout</a>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="row">
            <div class="col-md-3">

                <input class="form-control" placeholder="Hello...">
                <div class="buttonadmin">
                    <div class="col-md-12">
                        <a href="<?php echo e(route('homeadmin')); ?>">
                            <button>
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php echo e(route('danh-sach-san-pham')); ?>">
                            <button>
                                <i class="fas fa-list"></i>
                                <span>Danh sách sản phẩm</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php echo e(route('them-san-pham')); ?>">
                            <button>
                                <i class="fas fa-plus"></i>
                                <span>Thêm sản phẩm</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php echo e(route('list-danh-muc')); ?>">
                        
                            <button>
                                <i class="fas fa-text-width"></i>
                                <span>Thể loại</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php echo e(route('them-danh-muc')); ?>">
                            <button>
                                <i class="fas fa-plus"></i>
                                <span>Thêm Thể loại</span>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="<?php echo e(route('customer')); ?>">
                            <button>
                                <i class="fas fa-users"></i>
                                <span>Khách hàng</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9"><?php echo $__env->yieldContent('content'); ?></div>
        </div>

    </main>





</div>

<?php else: ?>
    <div align="center" style="color: white">
        <h1>Bạn Không Truy Cập Được Trang Web</h1>
        <h2>Vui Lòng Đăng Nhập Với Tư Cách Admin</h2>
    </div>
<?php endif; ?>
</body>
</html>
