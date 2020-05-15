<?php $__env->startSection('layout'); ?>
    <!-- Top Bar-->
    <?php echo $__env->make('admin._shared.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End Top Bar-->

    <!-- Navigation Bar-->
    <?php echo $__env->make('admin._shared.inc.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

        <!-- Footer Start -->
        <?php echo $__env->make('admin._shared.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- end Footer -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Setting sidebar -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin._shared.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>