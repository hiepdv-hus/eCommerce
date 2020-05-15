<?php $__env->startSection('layout'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('stylesheet'); ?>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/general.css?v=1.0.0" rel="stylesheet" type="text/css" />
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>

    
        
    

    
        
    

    
        
        
    

    
        
        
        
    

    
        
        
        
        
    

    
        
    

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin._shared.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>