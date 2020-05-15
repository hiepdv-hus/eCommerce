<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($item->price); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
