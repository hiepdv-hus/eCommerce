@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')

    <div id="content" class="site-content">
            <div class="elementor-trade">
                <div class="row">
                    <div class="col-md-9 elementor-left">
                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>TIN GIAO THƯƠNG</h6>
                            </div>
                            <div class="trade">
                                @foreach($discount_products as $product)
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="{{route('tradeDetail',$product->id)}}">
                                                    <img src="https://sc01.alicdn.com/kf/Ub3629495847e485984ce2c9a03cbef95b.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="{{route('tradeDetail',$product->id)}}" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        {{$product->title}}
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
                                                    {{$product->description}}
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
                                @endforeach
                                {{--<div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc02.alicdn.com/kf/Uc3cd768072e84980a24b4fb9170cf04cs.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="https://u.alicdn.com/simg/single/flag/sg.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc02.alicdn.com/kf/Ub179d308b3f94983a3caddc7edbb19fan.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="http://u.alicdn.com/simg/single/flag/us.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc01.alicdn.com/kf/U21c8fb3f89f24960a1721be41d7a9a0dc.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="https://u.alicdn.com/simg/single/flag/au.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc01.alicdn.com/kf/U42a547e6d371450592c07ea5e86767f6n.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="https://u.alicdn.com/simg/single/flag/in.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc01.alicdn.com/kf/U07d840a7248d4b3bb0b4711e62e213b0u.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="https://u.alicdn.com/simg/single/flag/bd.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                <div class="trade-item">
                                    <div class="row">
                                        <div class="col-md-9 trade-content">
                                            <div class="next-col next-col-fixed-8 brh-rfq-item__prod-img">
                                                <a class="brh-rfq-item__image-link" target="_blank" href="">
                                                    <img src="https://sc01.alicdn.com/kf/Udf3c36adbdd647f5b8305ccbf09a251fa.jpg_140x140.jpg" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.i5.679837adoOSqHz">
                                                </a>
                                            </div>
                                            <div class="next-col brh-rfq-item__main-info">
                                                <h1 class="brh-rfq-item__subject">
                                                    <a class="brh-rfq-item__subject-link" href="" target="_blank" title="Redmi note 8 pro Global version 128GB/64GB" data-spm-anchor-id="a2700.8073605.0.0">
                                                        Redmi note 8 pro Global version 128GB/64GB
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
                                                        <img class="img" src="https://u.alicdn.com/simg/single/flag/co.gif">
                                                        <span>South Africa</span>
                                                    </div>
                                                </div>

                                                <div class="brh-rfq-item__detail">
                                                    white or Blue,and the shipping is ti the United states
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
                                </div>--}}

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 elementor-right">
                        <img src="https://webce.co.in/wp-content/uploads/2018/09/rfq.png" width="100%">
                    </div>
                </div>
            </div>
    </div>

@endsection
