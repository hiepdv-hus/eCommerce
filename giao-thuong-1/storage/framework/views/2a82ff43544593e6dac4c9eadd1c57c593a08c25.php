<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <news-add></news-add>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'news'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>