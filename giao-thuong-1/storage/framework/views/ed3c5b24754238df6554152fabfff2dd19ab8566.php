<?php $__env->startSection('content'); ?>

    <div id="content" class="site-content">
            <div class="bannerhome-event">
                <div class="row">
                    <div class="col-md-9 banner-left">
                        <img src="https://cdn.pixabay.com/photo/2018/11/03/14/29/carousel-3792103_960_720.jpg" style="width: 100%; height: 420px">
                        <div class="elementor">
                            <div class="browse__location eds-l-pad-top-8">
                                <div class="browse__location-text">Popular in </div>
                                <div class="location-autocomplete" data-spec="location-autocomplete">
                                    <document-fragment tabindex="-1">
                                        <div class="eds-autocomplete-field" data-spec="autocompletefield-field">
                                            <div class="eds-autocomplete-field__dropdown-holder">
                                                <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--basic eds-field-styled--borderless"
                                                     data-automation="input-field-wrapper" data-spec="input-field">
                                                    <div class="eds-field-styled__border-simulation eds-field-styled__border-simulation--empty">
                                                        <div class="eds-field-styled__internal">
                                                            <div class="eds-field-styled__input-container">
                                                                <input data-spec="input-field-input-element"
                                                                       class="eds-field-styled__input"
                                                                       id="locationPicker"
                                                                       name="locationPicker"
                                                                       role="combobox"
                                                                       type="text"
                                                                       aria-expanded="false"
                                                                       aria-autocomplete="list"
                                                                       autocomplete="off"
                                                                       tabindex="0"
                                                                       value="Hà Nội">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </document-fragment>
                                </div>
                            </div>
                            <div class="feed-builder">
                                <div class="event-link">
                                    <ul>
                                        <li>
                                            <a href="#">Tất cả</a>
                                        </li>
                                        <li>
                                            <a href="#">Đang theo dõi</a>
                                        </li>
                                        <li>
                                            <a href="#">Tuần này</a>
                                        </li>
                                        <li>
                                            <a href="#">Tết 2020</a>
                                        </li>
                                        <li>
                                            <a href="#">Miễn phí</a>
                                        </li>
                                        <li>
                                            <a href="#">Hội chợ</a>
                                        </li>
                                        <li>
                                            <a href="#">Triển lãm</a>
                                        </li>
                                        <li>
                                            <a href="#">Giao thương</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="feed-events-bucket">
                                    <div class="row">
                                        <?php $__currentLoopData = $discount_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-4">
                                                <div class="gal-box">
                                                    <a href="#">
                                                        <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F53598642%2F268242185801%2F1%2Foriginal.jpg?w=510&auto=format%2Ccompress&q=75&sharp=10&rect=5%2C0%2C510%2C255&s=bd80081ee21b47ec28e4ea7624c3fdf1">
                                                    </a>
                                                    <div class="gall-info">
                                                        <h6><?php echo e($product->title); ?></h6>
                                                        <h5><?php echo e($product->description); ?></h5>
                                                        <p><?php echo e($product->detail); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
























                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 banner-right">
                        <div class="mart-right">
                            <div class="mart-item">
                                <p>Thời gian diễn ra</p>
                                <h5>Any date</h5>
                            </div>
                            <div class="mart-item">
                                <p>Địa điểm</p>
                                <h5>Ha Tay</h5>
                            </div>
                            <div class="mart-item">
                                <p>Loại sự kiện</p>
                                <h5>Anything</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($THEME, ['PAGE' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>