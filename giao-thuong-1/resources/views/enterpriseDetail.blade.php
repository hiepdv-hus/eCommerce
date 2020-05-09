@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')

    <div id="content" class="site-content">
            <div class="bannerhome">
                <div class="top-card-layout">
                    <div class="lazy-loaded">
                        <img class="cover-img__image onload lazy-loaded" data-embed-id="cover-image" alt="" src="https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/s960x960/89299839_3069930076350617_8266477353647996928_o.jpg?_nc_cat=106&_nc_sid=dd9801&_nc_ohc=2cCX-1MXGbQAX_ia9ef&_nc_ht=scontent.fhan5-3.fna&_nc_tp=7&oh=fcf3074357e3b1013c4ad23d51af4e37&oe=5E8D6DF7" style="width: 100%; height: 250px">
                    </div>
                    <div class="layout-card">
                        <div class="avatar">
                            <img class="artdeco-entity-image artdeco-entity-image--company artdeco-entity-image--square-8 top-card-layout__entity-image lazy-loaded" data-ghost-classes="artdeco-entity-image--ghost artdeco-entity-image--ghost-company" data-ghost-url="https://static-exp1.licdn.com/sc/h/ck48xrmh3ctwna0w2y1hos0ln" alt="Hapag-Lloyd AG" src="https://scontent.fhan5-5.fna.fbcdn.net/v/t1.0-9/78539535_2843136222363338_6358427871723126784_n.jpg?_nc_cat=108&_nc_sid=85a577&_nc_ohc=Z2JS6_euoskAX_0Y50M&_nc_ht=scontent.fhan5-5.fna&oh=a4f7f815bdfe3f0167dfbe80e224c4ea&oe=5E98314E">
                            <div class="name-followers">
{{--                                <h4>Information Technology Industry Developme...</h4>--}}
                                <h4>{{$product->name}}</h4>
                                <p>Information Technology & Services Cairo 15,005 followers</p>
                            </div>
                        </div>
                        <div class="layout-info">
                            <div class="row">
                                <div class="col-md-9 layout-info-left">
                                    <div class="top-card-layout__cta-container">
                                        <a class="top-card-layout__cta top-card-layout__cta--primary" href="#" data-tracking-control-name="top-card_top-card-primary-button-top-card-primary-cta" data-tracking-will-navigate="">
                                            Follow</a>
                                        <a class="top-card-layout__cta top-card-layout__cta--secondary" href="#" data-tracking-control-name="top-card_top-card-secondary-button-top-card-secondary-cta" data-tracking-will-navigate="">Visit website</a>
                                        <div class="layout-icon">
                                            <a href="#" class="share-social">
                                                <i class="fab fa-facebook-f" style="color: #369"></i>
                                            </a>
                                            <a href="#" class="share-social">
                                                <i class="fab fa-twitter" style="color: #0cf"></i>
                                            </a>
                                            <a href="#" class="share-social">
                                                <i class="fab fa-google-plus-g" style="color: #c00"></i>
                                            </a>
                                            <a href="#" class="share-social">
                                                <i class="fab fa-youtube" style="color: #c33"></i>
                                            </a>
                                            <a href="#" class="share-social">
                                                <i class="fab fa-instagram" style="color: #c33"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 layout-info-right">
                                    <a href="#">
                                        Thông tin
                                    </a>
                                    <a href="#" class="border-between">
                                        Giới thiệu
                                    </a>
                                    <a href="#">
                                        Đánh giá
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ellipsis-menu">
                            <div class="collapsible-dropdown">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="ellipsis-horizontal-large" data-supported-dps="24x24" fill="currentColor" focusable="false" class="ellipsis-menu__trigger-icon lazy-loaded">
                                    <path d="M2 10h4v4H2v-4zm8 4h4v-4h-4v4zm8-4v4h4v-4h-4z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="elementors">
                <div class="row">
                    <div class="col-md-8 elementor-left">
                        <div class="information">
                            <div class="information-title">
                                <h6>THÔNG TIN</h6>
                            </div>
                            <div class="information-content">
                                <div class="information-item">
                                    <div class="link-icon">
                                        <a href="#" style="background-color: #369">
                                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                            <span>Share On Facebook</span>
                                        </a>
                                        <a href="#" style="background-color: #0cf">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span>Share On Twitter</span>
                                        </a>
                                        <a href="#" style="background-color: #c00">
                                            <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                                            <span>Share On Google Plus</span>
                                        </a>
                                    </div>
                                    <div class="link-content">
                                        <p>
                                            {{$product->description}}
{{--                                            Ô nhiễm không khí là sự thay đổi lớn trong thành phần của không khí, chủ yếu do khói, bụi, hơi hoặc các khí lạ được đưa vào không khí, có sự tỏa mùi, làm giảm tầm nhìn xa, gây biến đổi khí hậu, gây bệnh cho con người và cũng có thể gây hại cho sinh vật khác như động vật và cây lương thực, nó có thể làm hỏng môi trường ..--}}
                                        </p>
                                    </div>
                                    <div class="information-detail">
                                        <h5>MORE DETAILS</h5>
                                        <div class="detail-content">
                                            <div class="row">
                                                <div class="bathroom col-md-6">
                                                    <h6>Bathrooms: <span>4+</span>
                                                    </h6>
                                                    <h6>Furnished: <span>No</span>
                                                    </h6>
                                                    <h6>Bedrooms: <span>4+</span>
                                                    </h6>
                                                </div>
                                                <div class="property col-md-6">
                                                    <h6>Property Type: <span>House</span>
                                                    </h6>
                                                    <h6>Condition: <span>Used</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>GIỚI THIỆU</h6>
                            </div>
                            <div class="introduce-content">
                                <div class="link-content">
                                    <p>
                                        {{$product->detail}}
{{--                                        Ô nhiễm không khí là sự thay đổi lớn trong thành phần của không khí, chủ yếu do khói, bụi, hơi hoặc các khí lạ được đưa vào không khí, có sự tỏa mùi, làm giảm tầm nhìn xa, gây biến đổi khí hậu ...--}}
                                    </p>
                                </div>
                                <div class="itroduce-image">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxn5D_FED6d7xblYl3hBR-rPeTW3L8dQss8CB-fslFIVkSuPVQ" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>PHOTO GALLERY</h6>
                            </div>
                            <div class="photo-content">
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://images.unsplash.com/photo-1518998053901-5348d3961a04?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80" alt="Los Angeles" width="100%">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images.unsplash.com/photo-1514195037031-83d60ed3b448?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80" alt="Chicago" width="100%">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images.unsplash.com/photo-1515169974372-0a322886d279?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=688&q=80" alt="New York" width="100%">
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>ĐÁNH GIÁ</h6>
                            </div>
                            <div class="evaluate-content">
                                <p>Đánh giá của bạn giúp cộng đồng doanh nghiệp Việt Nam hoạt động hiệu quả và chuyên nghiệp hơn</p>
                                <div class="evaluate-star">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="far fa-star"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <form class="evaluate-pan">
                                    <textarea>Nội dung đánh giá</textarea>
                                </form>
                                <button class="btn btn-danger" style="width: 100%">GỬI</button>
                            </div>
                        </div>

                        <div class="introduce">
                            <div class="introduce-title">
                                <h6>THỐNG KÊ</h6>
                            </div>
                            <div class="statistical-content">
                                <div class="result">
                                    <div class="statistical row">
                                        <div class="col-md-5 statistical-tables">
                                            <div class="statistical-progress">
                                                <div class="statistical-progress-item">
                                                    <p>Excellent</p>
                                                    <div class="w3-light-grey">
                                                        <div class="w3-container w3-green w3-center" style="height: 7px ;width:100%">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="statistical-progress-item">
                                                    <p>Good</p>
                                                    <div class="w3-light-grey">
                                                        <div class="w3-container w3-red w3-center" style="height: 7px ;width:50%">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="statistical-progress-item">
                                                    <p>Satisfactory</p>
                                                    <div class="w3-light-grey">
                                                        <div class="w3-container w3-blue w3-center" style="height: 7px ;width:25%">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="statistical-progress-item">
                                                    <p>Below Average</p>
                                                    <div class="w3-light-grey">
                                                        <div class="w3-container w3-pink w3-center" style="height: 7px ;width:30%">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="statistical-progress-item">
                                                    <p>Below Average</p>
                                                    <div class="w3-light-grey">
                                                        <div class="w3-container w3-red w3-center" style="height: 7px ;width:5%">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 statistical-tables-right">
                                            <h5>Kết quả chung</h5>
                                            <div class="progress-star">
                                                <span>4.5</span>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>dựa trên 242 đánh giá</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="comment-item">
                                        <div class="comment-people row">
                                            <div class="col-md-1 col-sm-2 col-2 comment-image">
                                                <img src="https://image.giaoducthoidai.vn/650/uploaded/ngandk/2020-02-02/jennie950944_badc.jpg">
                                            </div>
                                            <div class="col-md-11 col-sm-10 col-10 author">
                                                <h4>
                                                    Jacob Michael
                                                    <span class="author-star">
															<span>4.5</span>
															<i class="fas fa-star"></i>
														</span>
                                                </h4>
                                                <p class="date">19th January, 2017</p>
                                                <p style="font-size: 14px">Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart of city and easy to reach any places in a short distance</p>
                                                <div class="list-like">
                                                    <ul>
                                                        <li>
                                                            <a href="">
                                                                <span>Like</span>
                                                                <i class="far fa-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Dis-like</span>
                                                                <i class="far fa-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Repost</span>
                                                                <i class="far fa-flag"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Comment</span>
                                                                <i class="far fa-comments"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Share Now</span>
                                                                <i class="fab fa-facebook-f"></i>
                                                                <i class="fab fa-twitter"></i>
                                                                <i class="fab fa-google-plus-g"></i>
                                                                <i class="fab fa-youtube"></i>
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-people row">
                                            <div class="col-md-1 col-sm-2 col-2 comment-image">
                                                <img src="https://image.giaoducthoidai.vn/650/uploaded/ngandk/2020-02-02/jennie950944_badc.jpg">
                                            </div>
                                            <div class="col-md-11 col-sm-10 col-10 author">
                                                <h4>
                                                    Jacob Michael
                                                    <span class="author-star">
															<span>5.0</span>
															<i class="fas fa-star"></i>
														</span>
                                                </h4>
                                                <p class="date">19th January, 2017</p>
                                                <p style="font-size: 14px">Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart of city and easy to reach any places in a short distance</p>
                                                <div class="list-like">
                                                    <ul>
                                                        <li>
                                                            <a href="">
                                                                <span>Like</span>
                                                                <i class="far fa-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Dis-like</span>
                                                                <i class="far fa-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Repost</span>
                                                                <i class="far fa-flag"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Comment</span>
                                                                <i class="far fa-comments"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Share Now</span>
                                                                <i class="fab fa-facebook-f"></i>
                                                                <i class="fab fa-twitter"></i>
                                                                <i class="fab fa-google-plus-g"></i>
                                                                <i class="fab fa-youtube"></i>
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-people row">
                                            <div class="col-md-1 col-sm-2 col-2 comment-image">
                                                <img src="https://image.giaoducthoidai.vn/650/uploaded/ngandk/2020-02-02/jennie950944_badc.jpg">
                                            </div>
                                            <div class="col-md-11 col-sm-10 col-10 author">
                                                <h4>
                                                    Jacob Michael
                                                    <span class="author-star">
															<span>4.2</span>
															<i class="fas fa-star"></i>
														</span>
                                                </h4>
                                                <p class="date">19th January, 2017</p>
                                                <p style="font-size: 14px">Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart of city and easy to reach any places in a short distance</p>
                                                <div class="list-like">
                                                    <ul>
                                                        <li>
                                                            <a href="">
                                                                <span>Like</span>
                                                                <i class="far fa-thumbs-up"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Dis-like</span>
                                                                <i class="far fa-thumbs-down"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Repost</span>
                                                                <i class="far fa-flag"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Comment</span>
                                                                <i class="far fa-comments"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="">
                                                                <span>Share Now</span>
                                                                <i class="fab fa-facebook-f"></i>
                                                                <i class="fab fa-twitter"></i>
                                                                <i class="fab fa-google-plus-g"></i>
                                                                <i class="fab fa-youtube"></i>
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 elementor-right">
                        <div class="manager">
                            <div class="lazy-loaded">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbGcpyKgU4s3nuhY83WDMhXDBHSn_hpoXG6bI87UKUeeD2UNDE" width="100%" height="120px">
                            </div>
                            <div class="layout-loaded">
                                <div class="avatar text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXQHoC-A1MhDFHpXcre-e_NIN8fq_s9byD_utpcvCPlIkVnw9Y">
                                </div>
                                <div class="layout-infomation text-center">
                                    <h4>Ngô Thị Chính</h4>
                                    <p style="color: #6c757d">Giám đốc kinh doanh</p>
                                    <div class="link-manager">
                                        <a href="">
                                            Liên hệ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manager">
                            <div class="lazy-loaded">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbGcpyKgU4s3nuhY83WDMhXDBHSn_hpoXG6bI87UKUeeD2UNDE" width="100%" height="120px">
                            </div>
                            <div class="layout-loaded">
                                <div class="avatar text-center">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRXQHoC-A1MhDFHpXcre-e_NIN8fq_s9byD_utpcvCPlIkVnw9Y">
                                </div>
                                <div class="layout-infomation text-center">
                                    <h4>Ngô Thị Chính</h4>
                                    <p style="color: #6c757d">Giám đốc kinh doanh</p>
                                    <div class="link-manager">
                                        <a href="">
                                            Liên hệ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="manager-enterprise">
                            <h5>Tin từ doanh nghiệp</h5>
                            <div class="enterprise-list">
                                <div class="enterprise-item">
                                    <a href="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBHo_ulDODAfI_Rv6pEQFsQE_0390kejZu4Eonyz1fPC9KQhua">
                                    </a>
                                    <div class="enterprise-content">
                                        <a href="">
                                            <p>Sofa in the stock Genuine leather highquality</p>
                                            <p>$200.00 -$730.00 /Sets
                                            </p>
                                            <p><b>Tin tức</b></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="enterprise-item">
                                    <a href="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBHo_ulDODAfI_Rv6pEQFsQE_0390kejZu4Eonyz1fPC9KQhua">
                                    </a>
                                    <div class="enterprise-content">
                                        <a href="">
                                            <p>Sofa in the stock Genuine leather highquality</p>
                                            <p>$200.00 -$730.00 /Sets
                                            </p>
                                            <p><b>Tin tức</b></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="enterprise-item">
                                    <a href="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBHo_ulDODAfI_Rv6pEQFsQE_0390kejZu4Eonyz1fPC9KQhua">
                                    </a>
                                    <div class="enterprise-content">
                                        <a href="">
                                            <p>Sofa in the stock Genuine leather highquality</p>
                                            <p>$200.00 -$730.00 /Sets
                                            </p>
                                            <p><b>Tin tức</b></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="enterprise-item">
                                    <a href="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBHo_ulDODAfI_Rv6pEQFsQE_0390kejZu4Eonyz1fPC9KQhua">
                                    </a>
                                    <div class="enterprise-content">
                                        <a href="">
                                            <p>Sofa in the stock Genuine leather highquality</p>
                                            <p>$200.00 -$730.00 /Sets
                                            </p>
                                            <p><b>Tin tức</b></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
