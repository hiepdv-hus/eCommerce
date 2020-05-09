@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')

    <div id="content" class="site-content">
            <div class="elementor-trade">
                <div class="row">
                    <div class="col-md-9 elementor-left">
                        <div class="topic">
                            <h3 data-spm-anchor-id="a2700.8073602.0.i4.383c37adOHDS5j">
                                <span>{{$product->title}}</span>
                                <div class="topic-flag-info">
                                    <div class="item tp-count">
                                        <label class="label">Quantity Required:</label>
                                        <span>
												<strong>1000</strong>
												<span>Pieces</span>
											</span>
                                    </div>
                                    <div class="item ">
                                        <label class="label">Destination Country: </label>
                                        <img class="img" src="http://u.alicdn.com/simg/single/flag/za.gif">
                                        <span>South Africa</span>
                                        <!-- <div class="border">

                                        </div> -->
                                    </div>
                                    <div class="item tp-time">
                                        <label class="label">Date Posted:</label>
                                        <span>2020-03-10
												<span>(U.S. PST)</span>
											</span>
                                        <!-- <div class="border">

                                        </div> -->
                                    </div>
                                </div>
                            </h3>
                            <div class="tp-buyer">
                                <div class="row">
                                    <span class="round">J</span>
                                    <span class="text bold">Joshua Hattingh</span>
                                </div>
                                <div class="buyer-tag-con">
                                    <div class="bc-brh-rfq-flag bc-brh-rfq-flag--buyer info-tag">
                                        <div class="next-tag next-tag-readonly next-tag-level-normal next-tag-small next-tag-zoom-appear next-tag-zoom-appear-active">
                                            <div class="next-tag-body">Email Confirmed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub clearfix">
                                <div class="left">
										<span>Availability
											<strong>10</strong>
										</span>
                                    <span>Time Left
											<label>29D 23H</label>
										</span>
                                </div>
                                <div class="brh-rfq-quote-now">
                                    <a href="" target="_blank" type="primary" class="next-btn next-btn-primary next-btn-large">Quote Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="topic">
                            <div class="topic-title">
                                <ul class="topic-menu-content">
                                    <li class="menuitem">
                                        <a href="">
                                            <i class="fas fa-table"></i>
                                            RFQ Information
                                        </a>
                                    </li>
                                    <li class="menuitem">
                                        <a href="">
                                            <i class="far fa-user"></i>
                                            Buyer Profile
                                        </a>
                                    </li>
                                    <li class="menuitem">
                                        <a href="">
                                            <i class="far fa-comment-dots"></i>
                                            Quotes Record (0)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="infomation switch-skin">
                                <div class="info-body">
                                    <div class="rfq-detail-info-body undefined">
                                        <div class="item">
                                            <div class="title" data-spm-anchor-id="a2700.8073602.0.i11.383c37adOHDS5j">
                                                Product Basic Information</div>
                                            <div class="row ">
                                                <span class="label">Product Name: </span>
                                                <div class="value">{{$product->title}}</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Category: </span>
                                                <div class="value">
                                                    Plugs &amp;amp; Sockets</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Sourcing Type: </span>
                                                <div class="value">
                                                    Non-customized Product</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Sourcing Purpose: </span>
                                                <div class="value">
                                                    Production Equipment</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Quantity: </span>
                                                <div class="value">
                                                    1000 Pieces</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Trade Terms: </span>
                                                <div class="value">
                                                    FOB</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Type: </span>
                                                <div class="value">
                                                    Electrical Plug</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Grounding: </span>
                                                <div class="value">
                                                    Non-Grounding</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Rated Voltage: </span>
                                                <div class="value">
                                                    other</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Rated Current: </span>
                                                <div class="value">
                                                    other</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Application: </span>
                                                <div class="value">
                                                    Industrial</div>
                                            </div>
                                            <div class="row ">
                                                <span class="label">Details: </span>
                                                <pre class="value">B22 Plug (male) with cap to go into B22 socket.  Plug is wired by ourselves with 1.5mm2 to 2.5mm2 twin core wire. Plug should have screw terminals and a cap with a hole in the middle for the wire/cable to exit. See picture. </pre>
                                            </div>
                                            <div class="row ">
                                                <div class="label">Attachments</div>
                                                <div class="bd-attach">
                                                    <div class="bc-brh-attachment">
                                                        <div class="brh-at-item" data-index="0">
                                                            <div class="brh-at-item-pic-wrap">
                                                                <img data-index="0" class="brh-at-item-pic" src="http://sc01.alicdn.com/kf/Uce96c4aa7e7c4dba81ec00bcd7b9b1123.jpg_80x80.jpg">
                                                                <div class="brh-at-item-control">
                                                                    <div class="brh-at-view">
                                                                        <i data-index="0" class="next-icon next-icon-browse next-icon-small brh-at-icon"></i>
                                                                    </div>
                                                                    <div class="brh-at-download">
                                                                        <i data-index="0" class="next-icon next-icon-download next-icon-small brh-at-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="brh-at-item-title" title="BC B22 Plug.jpg">
                                                                BC B22 Plug.jpg</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item ">
                                                <div class="title">Shipping and Payment</div>
                                                <div class="row">
                                                    <span class="label">Destination Country: </span>
                                                    <span class="value">
															<span class="countryIcon">
																<img src="http://u.alicdn.com/simg/single/flag/za.gif">
															</span>South Africa
														</span>
                                                </div>
                                                <div class="row">
                                                    <span class="label">Payment Term: </span>
                                                    <span class="value">T/T</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hide">
                                            <span>Show Less</span>
                                            <i class="next-icon next-icon-arrow-up actionIcon next-icon-small"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="brh-detail-buyer-profile">
                            <div>
                                <div class="privacyTip util-clearfix">
                                    <div class="tip-title">
											<span class="lightIcon">
												<i class="fas fa-lightbulb"></i>
											</span>
                                        <span class="txt" data-spm-anchor-id="a2700.8073602.0.i5.383c37adc8IsPY">
											PLEASE PROTECT BUYERS' PRIVACY!</span>
                                        <div class="next-icon next-icon-arrow-down next-icon-small showToggle">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="tip hide">Alibaba.com realizes the need to protect the personal information of our members. To do so, we prohibit suppliers from disclosing any information about inquiries, quotations and users that are obtained through AliSourcePro. Gold Suppliers found to be in violation of our rules will immediately be barred from submitting quotations for the next six months.
                                    </div>
                                </div>
                                <div class="buyer-profile-info">
                                    <div class="header util-clearfix">
                                        <div class="lt">
                                            <div class="title">BUYER PROFILE</div>
                                            <div class="base-info">
                                                <div class="base-info">
                                                    <span class="username">Joshua Hattingh</span>
                                                    <span>
															<span class="sex"> ( Male )</span>
														</span>
                                                    <div class="bc-brh-rfq-flag bc-brh-rfq-flag--buyer">
                                                        <div class="next-tag next-tag-readonly next-tag-level-normal next-tag-small next-tag-zoom-appear next-tag-zoom-appear-active">
                                                            <div class="next-tag-body">Email Confirmed</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rt">
                                            <div class="title">LAST VISITED</div>
                                            <div class="username lastLogin">29-07-1999</div>
                                        </div>
                                        <div>
                                            <div class="next-notice next-notice-warning next-notice-addon next-notice-large next-notice-only-content bp-tip" style="">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                <div class="next-notice-content">
														<span>Want to view now?
															<a href="" target="_blank">
															Contact us</a>
														</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="brh-detail-quotes-record">
                            <div class="record-container">
                                <div class="common-title-info" data-spm-anchor-id="a2700.8073602.0.i8.383c37adc8IsPY">
                                    Quotes Record
                                    <span class="num"> ( 0 ) </span>
                                </div>
                                <div class="nodata-tip">
                                    <i class="fas fa-info-circle"></i>
                                    <span>No quotation record</span>
                                </div>
                            </div>
                        </div>

                        <div class="brh-detail-safe-trade-guide">
                            <div class="common-title-info">
                                <span class="title">Safe Trading Guide</span>
                            </div>
                            <div class="common-info-container safe-content">
                                <div class="safe-text">Being smart is NOT enough to protect yourself against cunning scammers,view more tips here.
                                </div>
                                <div class="safe-link">
										<span>
											<a href="" target="_blank">Services &amp; Products</a>
										</span>
                                    <span>
											<a href="" target="_blank">Safe Trading Class</a>
										</span>
                                    <span>
											<a href="" target="_blank">Policies &amp; Rules</a>
										</span>
                                    <a href="" class="more" target="_blank">View more>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 elementor-right">
                        <div class="rfq-relate">
                            <h3 class="rfq-relate">
                                Recommend RFQs
                                <span> ( U.S. PST )</span>
                            </h3>
                        </div>
                        <div class="rfq-relate-right">
                            <div class="brh-rfq-item__container">
                                <div class="brh-rfq-item__subject-wrapper">
                                    <a class="brh-rfq-item__image-link" target="_blank" href="">
                                        <img src="http://sc01.alicdn.com/kf/U520257f6d58a4fa3b71b135874ae19c1M.jpg_50x50.jpg">
                                    </a>
                                    <h1 class="brh-rfq-item__subject">
                                        <a class="brh-rfq-item__subject-link" href="" target="_blank" title="CATV 5KA DC Surge Protector">
                                            CATV 5KA DC Surge Protector</a>
                                    </h1>
                                </div>
                                <div class="brh-rfq-item__other-info">
                                    <div class="brh-rfq-item__quantity" data-spm-anchor-id="a2700.8073602.0.i14.383c37adc8IsPY">
                                        <span class="brh-rfq-item__label">Quantity Required</span>
                                        <span class="brh-rfq-item__quantity-num">50</span>
                                        <span>Piece/Pieces</span>
                                    </div>
                                    <div class="brh-rfq-item__country">
                                        <span class="brh-rfq-item__label">Posted in</span>
                                        <img class="brh-rfq-item__country-flag" src="http://u.alicdn.com/simg/single/flag/ng.gif" title="Nigeria" alt="Nigeria">
                                        Nigeria
                                    </div>
                                </div>
                                <div class="brh-rfq-item__open-time">2 days before</div>
                            </div>
                            <div class="brh-rfq-item__container">
                                <div class="brh-rfq-item__subject-wrapper">
                                    <a class="brh-rfq-item__image-link" target="_blank" href="">
                                        <img src="http://sc01.alicdn.com/kf/U520257f6d58a4fa3b71b135874ae19c1M.jpg_50x50.jpg">
                                    </a>
                                    <h1 class="brh-rfq-item__subject">
                                        <a class="brh-rfq-item__subject-link" href="" target="_blank" title="CATV 5KA DC Surge Protector">
                                            CATV 5KA DC Surge Protector</a>
                                    </h1>
                                </div>
                                <div class="brh-rfq-item__other-info">
                                    <div class="brh-rfq-item__quantity" data-spm-anchor-id="a2700.8073602.0.i14.383c37adc8IsPY">
                                        <span class="brh-rfq-item__label">Quantity Required</span>
                                        <span class="brh-rfq-item__quantity-num">50</span>
                                        <span>Piece/Pieces</span>
                                    </div>
                                    <div class="brh-rfq-item__country">
                                        <span class="brh-rfq-item__label">Posted in</span>
                                        <img class="brh-rfq-item__country-flag" src="http://u.alicdn.com/simg/single/flag/ng.gif" title="Nigeria" alt="Nigeria">
                                        Nigeria
                                    </div>
                                </div>
                                <div class="brh-rfq-item__open-time">2 days before</div>
                            </div>
                            <div class="brh-rfq-item__container">
                                <div class="brh-rfq-item__subject-wrapper">
                                    <a class="brh-rfq-item__image-link" target="_blank" href="">
                                        <img src="http://sc01.alicdn.com/kf/U520257f6d58a4fa3b71b135874ae19c1M.jpg_50x50.jpg">
                                    </a>
                                    <h1 class="brh-rfq-item__subject">
                                        <a class="brh-rfq-item__subject-link" href="" target="_blank" title="CATV 5KA DC Surge Protector">
                                            CATV 5KA DC Surge Protector</a>
                                    </h1>
                                </div>
                                <div class="brh-rfq-item__other-info">
                                    <div class="brh-rfq-item__quantity" data-spm-anchor-id="a2700.8073602.0.i14.383c37adc8IsPY">
                                        <span class="brh-rfq-item__label">Quantity Required</span>
                                        <span class="brh-rfq-item__quantity-num">50</span>
                                        <span>Piece/Pieces</span>
                                    </div>
                                    <div class="brh-rfq-item__country">
                                        <span class="brh-rfq-item__label">Posted in</span>
                                        <img class="brh-rfq-item__country-flag" src="http://u.alicdn.com/simg/single/flag/ng.gif" title="Nigeria" alt="Nigeria">
                                        Nigeria
                                    </div>
                                </div>
                                <div class="brh-rfq-item__open-time">2 days before</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
