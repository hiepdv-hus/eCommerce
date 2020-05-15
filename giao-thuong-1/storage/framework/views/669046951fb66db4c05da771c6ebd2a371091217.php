<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <media-list></media-list>
    </div>
    <!-- container -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


    <script type="text/javascript">
        jQuery(document).ready(function($){


        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('stylesheet'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
<style>
    html{
        /*background: #343a40;*/
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'media'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>