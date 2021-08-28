<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Baý Çaý</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('baychay-template/img/favicon.ico') }}">
    <!-- All CSS Hear -->
    <link rel="stylesheet" href="{{ asset('baychay-template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/mainmenu.css') }}">
    <!-- Style CSS Hear -->
    <link rel="stylesheet" href="{{ asset('baychay-template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('baychay-template/css/responsive.css') }}">
    <script src="{{ asset('baychay-template/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
    <!-- Add your application content here -->

    <div class="wrapper">
        <header>
            <div class="header-area bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('baychay-template/img/logo/logo.png') }}" alt="baychay-template/img/logo/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="header-main-content">
                                <div class="main-menu-area  d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li><a href="#index.html">Home <i class="icofont icofont-simple-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#home-box.html">Home Box</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#about-us.html">About Us</a></li>
                                            <li><a href="#shop.html">Shop <i class="icofont icofont-simple-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#shop-right.html">Shop Right</a></li>
                                                    <li><a href="#cart.html">Cart</a></li>
                                                    <li><a href="#checkout.html">Checkout</a></li>
                                                    <li><a href="#wishlist.html">Wish List</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#shop.html"> Pages <i class="icofont icofont-simple-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#my-account.html">My account</a></li>
                                                    <li><a href="#single-product.html">Single Product</a></li>
                                                    <li><a href="#blog-details.html">Blog details</a></li>
                                                    <li><a href="#login-register.html">Login Register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#blog.html">Blog</a></li>
                                            <li><a href="#contact-us.html"> Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="right-blok-box">
                                    <div class="serch-container hidden-xs">
                                        <a href="#"><i class="icon-magnifier"></i></a>
                                        <div class="blog-search">
                                            <form action="#" id="search">
                                                <input type="text" placeholder="Search Here" name="s">
                                                <button type="submit"><i class="icofont icofont-search-alt-1"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mine-cart-box">
                                        <a href="#"><i class="icon-handbag"></i><span id="cart-total">2</span></a>
                                        <ul class="mini-cart">
                                            <li class="cart-item">
                                                <div class="cart-image">
                                                    <a href="single-product.html"><img src="{{ asset('baychay-template/img/product/1.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="single-product.html">
                                                        <h4>popular drinks Tea</h4>
                                                    </a>
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">£ 130.00</span></div>
                                                    <a href="#" class="remove_from_cart"><i class="icon-trash icons"></i></a>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="cart-image">
                                                    <a href="single-product.html"><img src="{{ asset('baychay-template/img/product/6.jpg') }}" alt=""></a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="single-product.html">
                                                        <h4>Fruit Tea green caven</h4>
                                                    </a>
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">£ 100.99</span></div>
                                                    <a href="#" class="remove_from_cart"><i class="icon-trash icons"></i></a>
                                                </div>
                                            </li>
                                            <li class="subtotal-titles">
                                                <div class="subtotal-titles">
                                                    <h3>Sub-Total :</h3><span>£ 230.99</span></div>
                                            </li>
                                            <li class="mini-cart-btns">
                                                <div class="cart-btns">
                                                    <a href="cart.html">View cart</a>
                                                    <a href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-login-menu">
                                        <div class="top-login-inner"><a href="#login-register.html"><i class="icon-user"></i> <span class="user-login">Login</span> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <!-- Mobile Menu Area Start -->
                            <div class="mobile-menu-area d-block d-lg-none">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul>
                                            <li><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="home-box.html">Home Box</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="shop.html">Shop</a>
                                                <ul>
                                                    <li><a href="shop-right.html">Shop Right</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wish List</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#"> Pages</a>
                                                <ul>
                                                    <li><a href="my-account.html">My account</a></li>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="blog-details.html">Blog details</a></li>
                                                    <li><a href="login-register.html">Login Register</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact-us.html"> Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu Area End -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- slider-main-area start-->
        <div class="slider-main-area">
            <div class="slider-active owl-carousel">
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url({{ asset('baychay-template/img/slider/slider-1.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class=" col-lg-6 offset-lg-1 col-xl-6 offset-xl-0 col-md-8">
                                <div class="slider-text-info  slider-text-animation">
                                    <h1>Want to Drink <span> Organic </span> <br>take matcha.</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua. </p>
                                    <div class="slier-btn">
                                        <a title="shop now" href="#" class="shop-btn">shop now<i class="icon-handbag"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url({{ asset('baychay-template/img/slider/slider-2.jpg') }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-1 col-md-8">
                                <div class="slider-text-info  slider-text-animation">
                                    <h1>Want to Drink <span> Organic </span> <br>take matcha.</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua. </p>
                                    <div class="slier-btn">
                                        <a title="shop now" href="#" class="shop-btn">shop now<i class="icon-handbag"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
            </div>
        </div>
        <!-- slider-main-area end-->

        <!-- product-area start -->
        <div class="product-area section-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center">
                            <h2 class="titel">Trending PRODUCT</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-thum">
                                <a href="single-product.html">
                                        <img class="primary-image" src="{{ asset('baychay-template/img/product/1.jpg') }}" alt="">
                                        <img class="secondary-image" src="{{ asset('baychay-template/img/product/2.jpg') }}" alt="">
                                    </a>
                                <span>-35%</span>
                                <div class="product-action">
                                    <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                    <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                    <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <a href="single-product.html">
                                    <h3>Green 103we tea.</h3>
                                </a>
                                <div class="price-box">
                                    <span class="old-price">£135.00</span>
                                    <span class="new-price"> £100.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-thum">
                                <a href="single-product.html">
                                        <img class="primary-image" src="{{ asset('baychay-template/img/product/2.jpg') }}" alt="">
                                        <img class="secondary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                    </a>
                                <span>Hot</span>
                                <div class="product-action">
                                    <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                    <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                    <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <a href="single-product.html">
                                    <h3>Dover Gray tea Cover</h3>
                                </a>
                                <div class="price-box">
                                    <span class="old-price">£144.00</span>
                                    <span class="new-price"> £104.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-thum">
                                <a href="single-product.html">
                                        <img class="primary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                        <img class="secondary-image" src="{{ asset('baychay-template/img/product/1.jpg') }}" alt="">
                                    </a>
                                <span>-35%</span>
                                <div class="product-action">
                                    <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                    <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                    <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <a href="single-product.html">
                                    <h3>Fruit Tea green caven</h3>
                                </a>
                                <div class="price-box">
                                    <span class="old-price">£145.00</span>
                                    <span class="new-price"> £99.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-thum">
                                <a href="single-product.html">
                                        <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                        <img class="secondary-image" src="{{ asset('baychay-template/img/product/1.jpg') }}" alt="">
                                    </a>
                                <span>New</span>
                                <div class="product-action">
                                    <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                    <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                    <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <a href="single-product.html">
                                    <h3>popular drinks Tea</h3>
                                </a>
                                <div class="price-box">
                                    <span class="old-price">£15.00</span>
                                    <span class="new-price"> £99.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area end -->

        <!-- provide-section start  -->
        <div class="provide-section section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <h3 class="provide-title">we provide organic <br> green tea for you</h3>
                        <p>Lorem ipsum dolor sit amet, consectetu adipisicing elit sedeiu tempor inci ut labore et dolore magna aliqua.</p>
                        <div class="provide-btn">
                            <a href="#" class="read-button">Read More <i class="icofont icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- provide-section end -->

        <!-- product-area start -->
        <div class="product-area section-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center">
                            <h2 class="titel-2">New Products</h2>
                            <!-- product-tabs-list start -->
                            <div class="product-tabs-list">
                                <ul role="tablist" class="nav">
                                    <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="black-coffee" href="#black-coffee" class="active show" aria-selected="true">Black Coffee <span class="count_products">8</span></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="brown-tea" href="#brown-tea">Brown Tea <span class="count_products">6</span></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="green-tea" href="#green-tea">Green Tea <span class="count_products">7</span></a></li>
                                </ul>
                            </div>
                            <!-- product-tabs-list end -->
                        </div>
                    </div>
                </div>
                <!-- tab-content start -->
                <div class="tab-content">
                    <div id="black-coffee" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/5.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/6.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>London balck 450 tea</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/2.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Billion torage nack bin</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£105.00</span>
                                            <span class="new-price"> £99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/7.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>American black coffee</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£275.00</span>
                                            <span class="new-price"> £120.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>bd black tigarrod 223e</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£145.00</span>
                                            <span class="new-price"> £140.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/8.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/6.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/9.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £160.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                    <div id="brown-tea" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/10.jp') }}g" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>American tea contard</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/6.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/9.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £160.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/8.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                    <div id="green-tea" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>American tea contard</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/6.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/9.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £160.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/8.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/10.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/2.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£185.00</span>
                                            <span class="new-price"> £102.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- single-product-wrap start -->
                                <div class="single-product-wrap">
                                    <div class="product-thum">
                                        <a href="single-product.html">
                                                <img class="primary-image" src="{{ asset('baychay-template/img/product/4.jpg') }}" alt="">
                                                <img class="secondary-image" src="{{ asset('baychay-template/img/product/3.jpg') }}" alt="">
                                            </a>
                                        <span>-35%</span>
                                        <div class="product-action">
                                            <a href="#" class="add-to-cart-btn"><i class="icon-basket icons"></i></a>
                                            <a href="#" class="compare-btn"> <i class="icon-tag icons"></i></a>
                                            <a href="#" class="add-to-wishlist-btn"><i class="icon-heart icons"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <a href="single-product.html">
                                            <h3>Green 104we tea.</h3>
                                        </a>
                                        <div class="price-box">
                                            <span class="old-price">£155.00</span>
                                            <span class="new-price"> £100.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-wrap end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-content end -->
            </div>
        </div>
        <!-- product-area end -->


        <!-- weekly-flash-wrapper start -->
        <div class="weekly-flash-wrapper">
            <div class="weekly-flash-inner">
                <div class="weekly-main-wrap">
                    <div class="main-img">
                        <img src="{{ asset('baychay-template/img/banner/bg-03.jpg') }}" alt="">
                    </div>
                    <div class="main-content">
                        <h4>RONGCHA DISCOUNT CODES AND OFFERS</h4>
                        <h2>WEEKLY FLASH SALE</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue
                            duis dolore te feugait nulla facilisi.</p>
                        <div class="collection-shoing">
                            <a href="#">View Shop</a>
                            <a href="#">View collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- weekly-flash-wrapper end -->



        <!-- our-blog-area start -->
        <div class="our-blog-area section-bg ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-center">
                            <h2 class="titel">Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-our-blog">
                            <div class="blog-thum">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                            <div class="aritcles-content text-center">
                                <div class="articles-date">
                                    By <span>rongcha</span>- May 26,2018
                                </div>
                                <a href="blog-details.html">Lorem ipsum dolorsit abowab amet conse looking at its layout.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-our-blog">
                            <div class="blog-thum">
                                <img src="img/blog/2.jpg" alt="">
                                <div class="blog-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                            <div class="aritcles-content text-center">
                                <div class="articles-date">
                                    By <span>rongcha</span>- May 26,2018
                                </div>
                                <a href="blog-details.html">Green tea is dolor sitantion readable eiusmod ametunat nulla pariatur.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-our-blog">
                            <div class="blog-thum">
                                <img src="img/blog/3.jpg" alt="">
                                <div class="blog-button">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                            <div class="aritcles-content text-center">
                                <div class="articles-date">
                                    By <span>rongcha</span>- May 28,2018
                                </div>
                                <a href="blog-details.html">Lorem ipsum dolor sit amet conse layout nostrud exercitation.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-blog-area end -->



        <!-- our-brand-area start -->
        <div class="our-brand-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="brand-active owl-carousel">
                        <div class="col">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single-brand">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-brand-area end -->

        <!-- footer-area start -->
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- single-footer-info start -->
                            <div class="single-footer-info">
                                <h3 class="footer-info-title">Contact Us</h3>
                                <ul class="footer-address">
                                    <li>
                                        <i class="icon-location-pin "></i>
                                        <p class="desc_call">ur address goes here, streetuour Crossroad your stat road number house number floor no 123.</p>
                                    </li>
                                    <li> <i class="icon-envelope-open"></i> <a class="mail" href="#"> test@example.com</a></li>
                                    <li> <i class="icon-phone "></i>
                                        <p class="desc_call">+99 111 222 333</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- single-footer-info end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-footer-info start -->
                            <div class="single-footer-info">
                                <h3 class="footer-info-title">information</h3>
                                <ul class="footer-list">
                                    <li><a href="about-us.html">Delivery Information</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>

                                </ul>
                            </div>
                            <!-- single-footer-info end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-footer-info start -->
                            <div class="single-footer-info">
                                <h3 class="footer-info-title">My Account</h3>
                                <ul class="footer-list">
                                    <li><a href="my-account.html"> My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html"> Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                            <!-- single-footer-info end -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- single-footer-info start-->
                            <div class="single-footer-info">
                                <h3 class="footer-info-title">Recent News</h3>
                                <ul class="sidebar-post">
                                    <li>
                                        <div class="post-img">
                                            <a href="#"><img src="img/blog/s-1.jpg" alt=""></a>
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="#">Green tea is dolor sitantion readable eiusmod </a></h4>
                                            <span>May 26, 2018</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-img">
                                            <a href="#"><img src="img/blog/s-2.jpg" alt=""></a>
                                        </div>
                                        <div class="post-text">
                                            <h4><a href="#">Itreader tea long established contentfact that.</a></h4>
                                            <span>May 28, 2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- single-footer-info end-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- copy-right start -->
                            <div class="copy-right">
                                <p>Copyright © 2018 <a href="#">Rongcha</a>. All Rights Reserved. </p>
                            </div>
                            <!-- copy-right end -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area end -->


    </div>


    <!-- jquery -->
    <script src="{{ asset('baychay-template/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- all plugins JS hear -->
    <script src="{{ asset('baychay-template/js/popper.min.js') }}"></script>
    <script src="{{ asset('baychay-template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('baychay-template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('baychay-template/js/jquery.mainmenu.js') }}"></script>
    <script src="{{ asset('baychay-template/js/ajax-email.js') }}"></script>
    <script src="{{ asset('baychay-template/js/plugins.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('baychay-template/js/main.js') }}"></script>
</body>

</html>