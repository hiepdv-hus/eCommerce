@extends($THEME, ['PAGE' => 'dashboard'])

@section('content')
    <div id="content" class="site-content">
        <div class="banner-home">
            <div class="row">
                <div class="col-md-9 col-sm-9 bannerleft">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://web.techmaster.vn/Project/img/5.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="https://web.techmaster.vn/Project/img/1.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="https://web.techmaster.vn/Project/img1/jesper-aggergaard-539127-unsplash.jpg">
                            </div>
                            <div class="carousel-item">
                                <img src="https://web.techmaster.vn/Project/img/3.jpg">
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
                <div class="col-md-3 col-sm-3 bannerright">
                    <a href="#" class="text-center">
                        <img class="image" style="cursor:pointer" src="https://cdn.pixabay.com/photo/2019/03/23/13/53/carousel-4075420_960_720.jpg" width="100%">
                    </a>
                    <a href="#" class="text-center">
                        <img style="cursor:pointer" src="https://cdn.pixabay.com/photo/2019/03/23/13/53/carousel-4075420_960_720.jpg" width="100%">
                    </a>
                </div>
            </div>
        </div>

        <div class="elementor-home">

            <div class="tabs-home">
                <div class="tabs-header row">
                    <h4 class="main-title">
                        <a class="cat-title" target="_blank" rel="nofollow" href="#">Giao Thương</a>
                    </h4>
                    <div class="tabs-header-nav">
                        <ul class="tabs-nav">
                            <li>
                                <a href="#" data-href="recent" class="active">New Arrivals</a>
                            </li>
                            <li>
                                <a href="#" data-href="best_selling" class="">Best Seller</a>
                            </li>
                            <li>
                                <a href="#" data-href="sale" class="">Most Popular</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tabs-content">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tabs-purport">
                                        <a href="#">
                                            <div class="tabs-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rfq">
                <div class="util-clearfix">
                    <h4 class="main-title util-left">
                        <a href="#" target="_blank">
                            <i class="fas fa-ad" style="color: red"></i>
                            Yêu cầu báo giá</a>
                    </h4>
                    <div class="sub-title util-left">Customization Service</div>
                    <div class="label"></div>
                </div>
                <div class="util-clearfix clearbottom">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <img src="https://cdn.pixabay.com/photo/2018/11/03/14/29/carousel-3792103_960_720.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="rfq-form">
                                <form>
                                    <div class="rfq-title">
                                        <label data-spm-anchor-id="a2700.8293689.201709-3.i1.19c967afynklu9">
                                            Một lần gửi, hàng ngàn nhà cung cấp
                                        </label>
                                    </div>
                                    <div class="rfq-row">
                                        <input type="text" id="fname1" name="firstname" placeholder="Bạn đang cần gì..">
                                    </div>
                                    <div class="rfq-row">
                                        <input type="text" id="fname2" name="firstname" placeholder="Số lượng">
                                        <div class="col-75">
                                            <select id="country" name="country">
                                                <option value="australia">Australia</option>
                                                <option value="canada">Canada</option>
                                                <option value="usa">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="rfq-request">
                                        <p>Báo giá mẫu:</p>
                                        <div class="request">
                                            <span>Request price</span>
                                            <span>Request a sample</span>
                                            <span>Request quotation detail</span>
                                        </div>
                                    </div>
                                    <button class="btn btn-warning"><b>Gửi yêu cầu</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="event">
                <div class="event-title">
                    <h4 class="main-title">Sự kiện trong nước</h4>
                </div>
                <div class="event-content">
                    <div class="row">
                        <div class="col-md-8 event-table">
                            <div class="event-item row">
                                <div class="event-image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-1j0QQEH83manvUsaNM2ghx7g8d7V0dfXZbpDRywdncfAPkgp">
                                </div>
                                <div class="information">
                                    <div class="organized">
                                        <h5 style="color: #ffc107">Taylor Swift Tour</h5>
                                        <p><b>Nữ diễn viên xinh đẹp thế giới</b></p>
                                        <p>Organized by Sound productions</p>
                                        <p>22-08-15 to 22-12-17</p>
                                    </div>
                                    <div class="price">
                                        <p><b>From</b></p>
                                        <p>$30</p>
                                        <button class="btn btn-warning">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="event-item row">
                                <div class="event-image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-1j0QQEH83manvUsaNM2ghx7g8d7V0dfXZbpDRywdncfAPkgp">
                                </div>
                                <div class="information">
                                    <div class="organized">
                                        <h5 style="color: #ffc107">Taylor Swift Tour</h5>
                                        <p><b>Nữ diễn viên xinh đẹp thế giới</b></p>
                                        <p>Organized by Sound productions</p>
                                        <p>22-08-15 to 22-12-17</p>
                                    </div>
                                    <div class="price">
                                        <p><b>From</b></p>
                                        <p>$30</p>
                                        <button class="btn btn-warning">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="event-item row">
                                <div class="event-image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-1j0QQEH83manvUsaNM2ghx7g8d7V0dfXZbpDRywdncfAPkgp">
                                </div>
                                <div class="information">
                                    <div class="organized">
                                        <h5 style="color: #ffc107">Taylor Swift Tour</h5>
                                        <p><b>Nữ diễn viên xinh đẹp thế giới</b></p>
                                        <p>Organized by Sound productions</p>
                                        <p>22-08-15 to 22-12-17</p>
                                    </div>
                                    <div class="price">
                                        <p><b>From</b></p>
                                        <p>$30</p>
                                        <button class="btn btn-warning">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="event-item row">
                                <div class="event-image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-1j0QQEH83manvUsaNM2ghx7g8d7V0dfXZbpDRywdncfAPkgp">
                                </div>
                                <div class="information">
                                    <div class="organized">
                                        <h5 style="color: #ffc107">Taylor Swift Tour</h5>
                                        <p><b>Nữ diễn viên xinh đẹp thế giới</b></p>
                                        <p>Organized by Sound productions</p>
                                        <p>22-08-15 to 22-12-17</p>
                                    </div>
                                    <div class="price">
                                        <p><b>From</b></p>
                                        <p>$30</p>
                                        <button class="btn btn-warning">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="event-item row">
                                <div class="event-image">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-1j0QQEH83manvUsaNM2ghx7g8d7V0dfXZbpDRywdncfAPkgp">
                                </div>
                                <div class="information">
                                    <div class="organized">
                                        <h5 style="color: #ffc107">Taylor Swift Tour</h5>
                                        <p><b>Nữ diễn viên xinh đẹp thế giới</b></p>
                                        <p>Organized by Sound productions</p>
                                        <p>22-08-15 to 22-12-17</p>
                                    </div>
                                    <div class="price">
                                        <p><b>From</b></p>
                                        <p>$30</p>
                                        <button class="btn btn-warning">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-weather">
                                <div class="icon-table">
                                    <div class="row">
                                        <div class="icon-table-item-top" style="background-color: #17a2b8">
                                            <div class="icon">
                                                <i class="fas fa-cloud-sun"></i>
                                            </div>
                                            <h5>Hôm nay</h5>
                                        </div>
                                        <div class="icon-table-item-top" style="background-color: #ffc107ad">
                                            <div class="icon">
                                                <i class="fas fa-moon"></i>
                                            </div>
                                            <h5>Ngày mai</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="icon-table-item-bottom" style="background-color: #ed172bab">
                                            <div class="icon">
                                                <img src="https://image.flaticon.com/icons/png/512/42/42446.png">
                                            </div>
                                            <h5>Tuần này</h5>
                                        </div>
                                        <div class="icon-table-item-bottom" style="background-color: #2e789d; border: 2px solid #17a2b863">
                                            <div class="icon">
                                                <img src="https://image.flaticon.com/icons/png/512/42/42446.png">
                                            </div>
                                            <h5>Thời gian</h5>
                                        </div>
                                    </div>
                                </div>

                                <hr style="margin-left: -7px;
												   margin-top: 1rem;
												   margin-bottom: 1rem;
	    										   border: 0;
												   border-top: 1px solid rgba(0, 0, 0, 0.19);
												   width: 19rem">

                                <div class="show">
                                    <div class="show-item">
                                        <a href="#">
                                            <div class="show-icon">
                                                <i class="fas fa-campground"></i>
                                            </div>
                                            <h6>Hội chợ</h6>
                                        </a>
                                    </div>
                                    <div class="show-item">
                                        <a href="#">
                                            <div class="show-icon">
                                                <i class="fas fa-forward"></i>
                                            </div>
                                            <h6>Triển lãm</h6>
                                        </a>
                                    </div>
                                    <div class="show-item">
                                        <a href="#">
                                            <div class="show-icon">
                                                <i class="fas fa-moon"></i>
                                            </div>
                                            <h6>Hội thảo</h6>
                                        </a>
                                    </div>
                                    <div class="show-item">
                                        <a href="#">
                                            <div class="show-icon">
                                                <i class="fas fa-cut"></i>
                                            </div>
                                            <h6>Giao thương</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-three row">
                        <div class="col-md-4">
                            <img src="https://web.techmaster.vn/Project/img/5.jpg"
                                 style="width: 100%">
                        </div>
                        <div class="col-md-4">
                            <img src="https://web.techmaster.vn/Project/img/1.jpg"
                                 style="width: 100%">
                        </div>
                        <div class="col-md-4">
                            <img src="https://web.techmaster.vn/Project/img/3.jpg"
                                 style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="tables">
                <div class="event-title">
                    <h4 class="main-title">Xuất nhập khẩu</h4>
                </div>

                <div class="tables-content">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="https://icdn.dantri.com.vn/zoom/188_158//2020/03/04/882365234966839378791052415613070400290816-n-1583313011944.jpg">
                                    </a>
                                    <div class="tables-purport">
                                        <a href="#">
                                            <div class="tables-icon">
                                                <i class="fas fa-rss-square"></i>
                                                <span> Gỗ và nội thất</span>
                                            </div>
                                            <p>
                                                Thống báo hoàn trả tiền đặt cọc cho các doanh nghiệp tham gia chương trình tiếp xúc thương mại quốc gia.
                                            </p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="tables-date">
                                            <h4>11/11</h4>
                                            <b>2019</b>
                                        </div>
                                        <div class="tables-icon">
                                            <i class="fas fa-rss-square"></i>
                                            <span> Xúc tiến thương mại quốc gia / Hoạt động sự kiện 2019</span>
                                        </div>
                                        <p>
                                            Mời doanh nghiệp tham gia Chương trình XTTM quốc gia tại Ấn Độ.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="enterprise">
                <div class="util-clearfix">
                    <h4 class="main-title util-left">
                        Tin từ doanh nghiệp
                    </h4>
                    <div class="row lab">
                        <div class="label1"></div>
                        <div class="straight"></div>
                    </div>
                </div>
                <div class="news-image row">
                    <div class="col-md-4">
                        <img src="https://web.techmaster.vn/Project/img/5.jpg" alt="Los Angeles">
                    </div>
                    <div class="col-md-4">
                        <img src="https://web.techmaster.vn/Project/img/1.jpg" alt="Los Angeles">
                    </div>
                    <div class="col-md-4">
                        <img src="https://web.techmaster.vn/Project/img/3.jpg" alt="Los Angeles">
                    </div>
                </div>
            </div>

            <div class="partner">
                <div class="event-title">
                    <h4 class="main-title">Đối tác</h4>
                </div>
                <div class="partner-logo">
                    <a href="#">
							<span>
								<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/diet-virus.jpg" src="http://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2017/12/p2.jpg" style="display: inline; opacity: 1;">
							</span>
                    </a>

                    <a href="#">
							<span>
								<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/office-365.jpg" src="http://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2017/12/p3.jpg" style="display: inline; opacity: 1;">
							</span>
                    </a>

                    <a href="#">
							<span>
								<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/windows.jpg" src="http://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2017/12/p4.jpg" style="display: inline; opacity: 1;">
							</span>
                    </a>

                    <a href="#">
							<span>
								<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/chuot-ban-phim.jpg" src="http://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2017/12/p5.jpg" style="display: inline; opacity: 1;">
							</span>
                    </a>

                    <a href="#">
								<span>
									<img class="lazy lazydone" data-original="https://cdn.tgdd.vn/v2015/Content/desktop/images/laptop/tai-nghe.jpg" src="http://demo2.drfuri.com/martfury12/wp-content/uploads/sites/53/2017/12/p6.jpg" style="display: inline; opacity: 1;">
								</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('meta')
    <meta name="title" property="og:title" content="GEN - Cổng giao thương Online uy tín số một Việt Nam" />
    <meta name="description" property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta name="image" property="og:image" content="" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="450" />
@endpush

@push('css')
    <style>

    </style>
@endpush
