<?php $__env->startSection('content'); ?>
    <div class="view-edit-product">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger" align="center">
                <h1 style="color: red">Vui Lòng Nhập Thông Tin</h1>
            </div>
        <?php endif; ?>
        <h1>Sửa Danh Mục</h1>
        <form action="<?php echo e(route('post-sua-danh-muc',$category->id)); ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered themsanpham">
                <tr>
                    <th>Category name</th>
                    <th><input type="text" class="form-control" value="<?php echo e($category->category_name); ?>" name="category_name"></th>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger">Save</button>
                            <a href="<?php echo e(route('list-danh-muc')); ?>" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            <?php echo e(csrf_field()); ?>

        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>