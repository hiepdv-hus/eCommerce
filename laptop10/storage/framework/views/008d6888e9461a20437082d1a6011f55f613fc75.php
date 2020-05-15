<?php $__env->startSection('content'); ?>
    <div class="view-cart">



        <div class="container">
            <div class="row justify-content-center">
                <div class="mx-auto col-sm-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="titlepay">
                        <span>
                            <a href="<?php echo e(route('home')); ?>"> <i style="font-size: 20px"><</i> Mua thêm sản phẩm khác </a>
                        </span>
                        <span class="rightcart">Giỏ hàng của bạn</span>
                    </div>
                    <div class="cart">
                        <div class="row">
                           <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-2">
                                    <img width="50" height="50" src="<?php echo e(url('/')); ?>/<?php echo e($item->options->image); ?>">
                                    <form action="<?php echo e(route('remove-item-cart',$item->rowId)); ?>" method="post">
                                        <button class="del">
                                            <i class="fas fa-times-circle"></i>Xóa
                                        </button>
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-9 pricename">
                                            <a href="<?php echo e(route('product-detail',$item->id)); ?>">
                                                <?php echo e($item->name); ?>

                                            </a>
                                            <p>Mua <?php echo e($item->qty); ?> sản phẩm</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><?php echo e(number_format ($item->price,0,'',',')); ?>₫</p>
                                        </div>
                                    </div>
                                    <div class="discountpromotion">
                                        <span>Giảm
                                            <strong class="discountbox">(<?php echo e(number_format ($item->options->product_sale_price,0,'',',')); ?>₫)</strong>
                                            còn
                                            <strong class="discountbox"><?php echo e(number_format ($item->price,0,'',',')); ?>₫</strong>
                                        </span>
                                    </div>
                                    <div class="total-1">
                                        <span>Tổng: </span>
                                        <span><?php echo e($item->price*$item->qty); ?>₫</span>
                                    </div>

                                    <hr>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                <div class="payend">
                                    <div class="price">
                                        <b>Tổng tiền (sản phẩm):</b>
                                        <strong><?php echo e(Cart::Subtotal()); ?>₫</strong>
                                    </div>
                                    <div class="price">
                                        <span>Giảm:</span>
                                        <span class="sale-price">₫</span>
                                    </div>
                                    <div class="price">
                                        <b>Cần thanh toán:</b>
                                        <strong><?php echo e(Cart::Subtotal()); ?>₫</strong>
                                    </div>
                                </div>
                                <div class="freeship">
                                    <i class="fas fa-check-circle"></i>
                                    Đơn hàng được <b>miễn phí</b> giao hàng
                                </div>
                            </div>
                        </div>

                            <div class="col-md-12">
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="<?php echo e(route('thanh-toan')); ?>">Thông tin cơ bản</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>