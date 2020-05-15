<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <h1>Thêm sản phẩm</h1>
    <form action="<?php echo e(route('post-add-product')); ?>" method="post" enctype="multipart/form-data">
        <table class="table table-bordered themsanpham">
            <tr>
                <th>Product name</th>
                <th><input type="text" class="form-control" name="product_name"></th>
            </tr>
            <tr>
                <th>Product image intro</th>
                <th>
                    <input type="file" class="form-control" name="product_image_intro">
                </th>
            </tr>
            <tr>
                <th>Category</th>
                <th>
                   
                    <select name="category_name">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->category_name); ?>"><?php echo e($category->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </th>
            </tr>
            <tr>
                <th>Publish</th>
                <th>
                    <select name="publish">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                </th>
            </tr>
            <tr>
                <th>price</th>
                <th>
                    <input type="text" name="price" class="form-control">
                </th>
            </tr>
            <tr>
                <th>Sale price</th>
                <th>
                    <input type="text" name="sale_price" class="form-control">
                </th>
            </tr>
            
            <tr>
                <th>Description</th>
                <th>
                    <textarea class="form-control" name="description"></textarea>
                </th>
            </tr>
            
            <tr>
                <td colspan="2">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger">Save</button>
                        
                        <a type="submit" class="btn btn-primary" href="<?php echo e(route('danh-sach-san-pham')); ?>">Cancel</a>
                    </div>
                </td>
            </tr>
        </table>
        <?php echo e(csrf_field()); ?>

    </form>
    <script type="text/javascript">
        //CKEDITOR.replace( 'full_description' );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>