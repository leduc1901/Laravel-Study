<div class="colorlib-loader"></div>
<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="/">Fashion</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Trang chủ</a></li>
                            <li class="has-dropdown">
                                <a href="{{ route('client.products.index')}}">Cửa hàng</a>
                                <ul class="dropdown">
                                    <li><a href="cart">Giỏ hàng</a></li>
                                    <li><a href="#">Thanh toán</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ route('client.home.about')}}">Giới thiệu</a></li>
                            <li><a href="{{ route('client.home.contact')}}">Liên hệ</a></li>
                            <li>
                                <a href="{{ route('client.cart.index')}}">
                                    <i class="icon-shopping-cart"></i> 
                                        Giỏ hàng [<span class="cart-quantity">{{\Cart::getTotalQuantity()>9?"9+":\Cart::getTotalQuantity()}}</span>]
                                    </a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(/assets/client/images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Sale</h1>
                                        <h2 class="head-3">45%</h2>
                                        <p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
                                        <p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(/assets/client/images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Sale</h1>
                                        <h2 class="head-3">45%</h2>
                                        <p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
                                        <p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(/assets/client/images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">Sale</h1>
                                        <h2 class="head-3">45%</h2>
                                        <p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
                                        <p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>