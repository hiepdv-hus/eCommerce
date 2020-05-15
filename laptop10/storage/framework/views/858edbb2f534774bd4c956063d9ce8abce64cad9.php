<?php $__env->startSection('content'); ?>
    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Sản phẩm</h1>
            <tr>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                
                <th>Thể Loại</th>
                
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Mô tả</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->product_name); ?></td>
                    <td><img width="100" height="auto" class="product-image-intro" src="<?php echo e(url('/')); ?>/<?php echo e($product->product_image_intro); ?>"></td>
                    
                    <td><?php echo e($product->category_name); ?></td>
                    
                    <td><?php echo e(number_format ($product->price,0,'',',')); ?></td>
                    <td><?php echo e(number_format ($product->sale_price,0,'',',')); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <th><a href="<?php echo e(route('sua-san-pham',$product->id)); ?>" class="btn btn-danger">
                            <i class="fas fa-pen"></i>Edit</a>
                    </th>
                    <th><a href="<?php echo e(route('xoa-san-pham',$product->id)); ?>" class="btn btn-primary">
                            <i class="fas fa-trash-alt"></i>Delete</a>
                    </th>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>