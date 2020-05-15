<?php $__env->startSection('content'); ?>
    <div class="view-list-product" align="center" style="background-color: #a1cbef;">
        <h1>Quản Lý</h1>
        <img src="<?php echo e(url('/')); ?>/upload/HinhNen.jpg" width="1000px">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>