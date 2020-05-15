<?php $__env->startSection('content'); ?>
    <div class="view-checkout">
        <div class="container">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" align="center">
                    <h3 style="color: red">Bạn Hãy Điền Đầy Đủ Thông Tin Cá Nhân</h3>
                    <h4 style="color: red">Cảm Ơn Bạn !</h4>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('thanh-toan')); ?>" method="post">
                <div class="row justify-content-center">
                    <div class="mx-auto col-sm-12 col-md-10 col-lg-8 col-xl-6">
                        <div class="cart">
                            <div class="row">
                                <div class="col-md-12">

                                    <?php if(!Session::has('username')): ?>
                                        <p class="row-input">* Bạn nên đăng nhập để <b>genCRM</b> có thể theo dõi và quản lí đơn hàng một cách tốt
                                            hơn</p>
                                        <div class="align-center row-input">
                                            <a class="btn btn-primary" href="<?php echo e(route('dangnhap')); ?>">Đăng nhập</a>
                                        </div>
                                    <?php endif; ?>

                                    <div class="row row-input">
                                        <div class="col-md-12">
                                            <label class="label">Thông tin khách hàng</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="row row-input">
                                        <div class="col-6 col-md-6">
                                            <input type="text" class="form-control" name="first_name" placeholder="Họ">
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <input type="text" class="form-control" name="last_name" placeholder="Tên">
                                        </div>
                                    </div>
                                    <div class="row row-input">
                                        <div class="col-4 col-md-4">
                                            <select class="form-control" name="gioi_tinh">
                                                <option value="">Chọn...</option>
                                                <option value="nam">Nam</option>
                                                <option value="nu">Nữ</option>
                                            </select>
                                        </div>
                                        <div class="col-8 col-md-8">
                                            <input type="text" class="form-control" name="phone_number" placeholder="Số điện thoái">
                                        </div>
                                    </div>
                                    <div class="row row-input">
                                        <div class="col-md-12">
                                            <textarea name="address" class="form-control" placeholder="Địa chỉ"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 button-total">
                                        <div class="pull-right">
                                            <button class="btn btn-primary">Thanh toán</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo e(csrf_field()); ?>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>