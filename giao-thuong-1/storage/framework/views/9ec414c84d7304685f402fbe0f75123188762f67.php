<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <system-user-list></system-user-list>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>