<?php $__env->startSection('content'); ?>
    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Thông tin cá nhân</h1>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                
                <th>Gender</th>
                
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($customer->id); ?></td>
                    <td><?php echo e($customer->first_name); ?></td>
                    <td><?php echo e($customer->last_name); ?></td>
                    
                    <td><?php echo e($customer->gender); ?></td>
                    
                    <td><?php echo e($customer->email); ?></td>
                    <td><?php echo e($customer->address); ?></td>
                    <td><?php echo e($customer->phone); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="view-list-product">

            <table class="table table-bordered">
                <thead>
                <h1>Đơn đặt hàng</h1>
                <tr>
                    <th>Id</th>
                    <th>Customer Id</th>
                    <th>Total</th>
                    
                    <th>Status</th>
                    <th></th>
                    


                </tr>
                </thead>
                <tbody>


                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->customer_id); ?></td>
                        <td><?php echo e($order->total); ?></td>
                        
                        
                        <td>
                            <?php echo e($order->status); ?>

                        </td>

                        <td><a href="<?php echo e(route('sua-status',$order->id)); ?>" class="btn btn-primary">Edit</a></td>

                        

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                </tbody>

            </table>







    </div>

    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
            <h1>Chi tiết các đơn đặt hàng</h1>
            <tr>
                <th>Id</th>
                <th>Order Id</th>
                <th>Product Id</th>
                
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quatity</th>
                <th>Product Sale Price</th>
                


            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $order_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order_product->id); ?></td>
                    <td><?php echo e($order_product->order_id); ?></td>
                    <td><?php echo e($order_product->product_id); ?></td>
                    
                    <td><?php echo e($order_product->product_name); ?></td>
                    <td><?php echo e($order_product->product_price); ?></td>
                    <td><?php echo e($order_product->product_qty); ?></td>
                    <td><?php echo e($order_product->product_sale_price); ?></td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>