<?php $__env->startSection('content'); ?>

    <div id="content" class="site-content">
            <div class="elementor-trade">
                <div class="row">
                    <div class="col-md-9 elementor-left">
                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>TIN GIAO THƯƠNG</h6>
                            </div>
                            <div class="trade">
                                <?php $__currentLoopData = $discount_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="<?php echo e(route('tradeDetail',$product->id)); ?>">
                                                    <img src="https://sc01.alicdn.com/kf/Ub3629495847e485984ce2c9a03cbef95b.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="<?php echo e(route('tradeDetail',$product->id)); ?>" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        <?php echo e($product->title); ?>

                                                    </a>
                                                </h1>

                                                <div class="topic-flag-info">
                                                    <div class="item tp-count">
                                                        <label class="label">Quantity Required:</label>
                                                        <span>
																<strong>1000</strong>
																<span>Piece/Pieces</span>
															</span>
                                                    </div>
                                                    <div class="item ">
                                                        <label class="label">Posted in: </label>
                                                        <img class="img" src="http://u.alicdn.com/simg/single/flag/za.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    <?php echo e($product->description); ?>

                                                </div>
                                                <div class="brh-rfq-item__open-time">
                                                    Date Posted: 1 days before
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 trade-content-right">
                                            <div class="next-col next-col-fixed-11 brh-rfq-item__action" data-spm-anchor-id="a2700.8073605.0.i8.679837adoOSqHz">
                                                <div class="text-center">
                                                    <div class="brh-rfq-quote-now">
                                                        <a href="" target="_blank" type="primary" class="next-btn next-btn-primary next-btn-medium" data-spm-anchor-id="a2700.8073605.0.0">
                                                            Báo giá
                                                        </a>
                                                        <div class="quote-left">
                                                            Còn nhận được
                                                            <span>10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 elementor-right">
                        <img src="https://webce.co.in/wp-content/uploads/2018/09/rfq.png" width="100%">
                    </div>
                </div>
            </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>