<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <event-edit :id="<?php echo e($id); ?>"></event-edit>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($THEME, ['PAGE' => 'event'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>