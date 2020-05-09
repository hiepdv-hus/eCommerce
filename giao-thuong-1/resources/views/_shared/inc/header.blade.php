
<header id="site-header" class="site-header">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid header">
            <div class="title-image">
                <a class="navbar-branch" href="{{route('home')}}">
                    <img class=" preload-me" src="https://hotro.gen.vn/wp-content/uploads/2019/11/logo_large.png">
                </a>
            </div>
            <div class="input-search row">
                <input class="" type="" name="" placeholder="Bạn cần gì...">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>
                                <i class="fas fa-chart-bar icon"></i>
                                <div class="icon-bottom">0</div>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span>
                                <i class="far fa-heart icon"></i>
                                <div class="icon-bottom">0</div>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="far fa-user icon"></i>
                            <span class="title" style="font-size: 16px">
                                Đăng Nhập
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-menu">
        <div class="container-fluid mart">
            <div class="row header-row">
                <div class="col-md-3 col-sm-3">
                    <i class="fa fa-bars"></i>
{{--                    <span>☰ </span>--}}
                    <span>Danh bạ</span>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="col-header-menu">
                        <div class="primary-nav nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li>
                                    <a href="{{route('news')}}">Tin tức</a>
                                </li>
                                <li>
                                    <a href="{{route('event')}}">Sự kiện</a>
                                </li>
                                <li>
                                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                                        Giao thương
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('tradeList')}}">Danh sách giao thương</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </li>
                                <li>XNK </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="build">
                        <span class="write">
                            Tract your order
                        </span>
                        <span>
                            English <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
