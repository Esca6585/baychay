<header>
    <div class="header-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="logo">
                        <a href="{{ route('main-page', app()->getlocale() ) }}"><img src="{{ asset('baychay-template/img/logo/baychay-logo.png') }}"
                                alt="baychay-template/img/logo/baychay-logo.png" width="100px"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="header-main-content">
                        <div class="main-menu-area  d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('main-page', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="right-blok-box">
                            <div class="mr-3 mt-1">
                                <select name="" id="changeLanguage">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        <option value="{{ $lang }}" {{ app()->getlocale() == $lang ? 'selected' : '' }} >{{ $language['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="serch-container hidden-xs">
                                <a href="#"><i class="flaticon2-magnifier-tool"></i></a>
                                <div class="blog-search">
                                    <form action="#" id="search">
                                        <input type="text" placeholder="Search Here" name="s">
                                        <button type="submit"><i class="flaticon2-magnifier-tool"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="mine-cart-box">
                                <a href="#"><i class="flaticon2-shopping-cart-1"></i><span id="cart-total">2</span></a>
                                <ul class="mini-cart">

                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('baychay-template/img/product/1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html">
                                                <h4>popular drinks Tea</h4>
                                            </a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">£ 130.00</span></div>
                                            <a href="#" class="remove_from_cart"><i class="flaticon2-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('baychay-template/img/product/6.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="single-product.html">
                                                <h4>Fruit Tea green caven</h4>
                                            </a>
                                            <span class="quantity">1 ×</span>
                                            <div class="price-box"><span class="new-price">£ 100.99</span></div>
                                            <a href="#" class="remove_from_cart"><i class="flaticon2-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-titles">
                                        <div class="subtotal-titles">
                                            <h3>Sub-Total :</h3><span>£ 230.99</span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="#cart.html">View cart</a>
                                            <a href="#checkout.html">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-login-menu">
                                <div class="top-login-inner">
                                    <a href="{{ route('login', app()->getlocale()) }}">
                                        <i class="flaticon2-user"></i>
                                        <span class="user-login">{{ __('Login') }}</span>
                                    </a>
                                </div>
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
                                    <li><a href="{{ url('/') }}">{{ __('Main Page') }}</a></li>
                                    <li><a
                                            href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a>
                                    </li>
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