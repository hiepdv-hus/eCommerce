<?php $__env->startSection('content'); ?>
    <div class="view-edit-product">
        <h1>Sửa Trạng Thái Đơn Hàng</h1>
        <form action="<?php echo e(route('post-sua-status',$order->id)); ?>" method="post" enctype="multipart/form-data">
            <table class="table table-bordered themsanpham">
                <tr>
                    <th>Id</th>
                    <th><input type="text" class="form-control" value="<?php echo e($order->id); ?>" name="id"></th>
                </tr>
                <tr>
                    <th>Customer Id</th>
                    <th><input type="text" class="form-control" value="<?php echo e($order->customer_id); ?>" name="customer_id"></th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th><input type="text" class="form-control" value="<?php echo e($order->total); ?>" name="total"></th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>

                        <select name="status">
                                    <option  <?php echo $order->status=='Pending'?' selected ':'' ?> value="Pending">Pending</option>
                                    <option  <?php echo $order->status=='Completed'?' selected ':'' ?> value="Completed">Completed</option>
                                    <option  <?php echo $order->status=='Cancel'?' selected ':'' ?> value="Cancel">Cancel</option>
                        </select>

                    </th>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger">Save</button>
                            <a href="<?php echo e(route('customer')); ?>" class="btn btn-primary">Cancel</a>
                        </div>
                    </td>
                </tr>
            </table>
            <?php echo e(csrf_field()); ?>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>