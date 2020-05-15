<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <dashboard></dashboard>
    </div> <!-- container -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>