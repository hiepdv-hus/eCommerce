<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <customer-add></customer-add>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'customer'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>