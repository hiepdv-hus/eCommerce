<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <category-list_news></category-list_news>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'category'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>