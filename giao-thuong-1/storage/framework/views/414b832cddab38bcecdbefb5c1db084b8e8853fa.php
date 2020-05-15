<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <event-list></event-list>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($THEME, ['PAGE' => 'event'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>