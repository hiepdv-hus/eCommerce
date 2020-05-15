<?php $__env->startSection('content'); ?>

    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Danh Mục</h1>
            <tr>
                <th>Id</th>
                <th>Tên Danh Mục</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><a href="<?php echo e(route('list-chi-tiet-danh-muc',$category->category_name)); ?>"><?php echo e($category->category_name); ?></td>
                    <th><a href="<?php echo e(route('sua-danh-muc',$category->id)); ?>" class="btn btn-danger">
                            <i class="fas fa-pen"></i>Edit</a>
                    </th>
                    <th><a href="<?php echo e(route('xoa-danh-muc',$category->id)); ?>" class="btn btn-primary">
                         <i class="fas fa-trash-alt"></i>Delete</a>
                    </th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>