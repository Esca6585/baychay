<!-- footer-area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- single-footer-info start -->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Contact Us') }}</h3>
                        <ul class="footer-address">
                            <li>
                                <i class="flaticon2-pin"></i>
                                <p class="desc_call mb-0">Türkmenistan, Aşgabat şäheri, Büzmeýin etraby, Gurtly
                                    ýaşaýyş toplumy, jaý 41</p>
                            </li>
                            <li>
                                <i class="flaticon2-black-back-closed-envelope-shape"></i>
                                <a class="mail" href="#mail">bayteastup@gmail.com</a>
                            </li>
                            <li>
                                <i class="flaticon2-phone"></i>
                                <!-- <p class="desc_call"></p> -->
                                <p class="desc_call mb-0">+993 65 693199</p>
                            </li>
                            <li>
                                <i class="flaticon2-phone"></i>
                                <p class="desc_call mb-0">+993 61 321020</p>
                            </li>
                        </ul>
                    </div>
                    <!-- single-footer-info end -->
                </div>

                
                <div class="col">
                    <!-- single-footer-info start -->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Pages') }}</h3>
                        <ul>
                            <li><a href="{{ route('main-page', app()->getlocale() ) }}">{{ __('Main Page') }}</a></li>
                            <li><a href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a></li>
                            <li><a href="{{ route('login', app()->getlocale() ) }}">{{ __('Login') }}</a></li>
                        </ul>
                    </div>
                    <!-- single-footer-info end -->
                </div>
                
                <div class="col">
                    <!-- single-footer-info start-->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ config('app.name') }}</h3>
                        <ul class="sidebar-post">
                            <li>
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/baychay/original/photo_2021-08-28_09-37-38 (2).jpg') }}"
                                            alt="{{ asset('baychay-template/img/blog/s-1.jpg') }}"></a>
                                </div>
                                <div class="post-text">
                                    <h4><a href="#">ertirlik naharyndaky çaýyňyzdan lezzet alyň</a></h4>
                                    <span>{{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(2)->subDay(29))->format('M d, Y') }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/baychay/original/photo_2021-08-28_09-37-39 (2).jpg') }}"
                                            alt="{{ asset('baychay-template/img/blog/s-2.jpg') }}"></a>
                                </div>
                                <div class="post-text">
                                    <h4><a href="#">bir käse çaý rahatlyk çeşmesi</a></h4>
                                    <span>{{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(7)->subDay(7))->format('M d, Y') }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- single-footer-info end-->
                </div>

                <div class="col">
                    <!-- single-footer-info start-->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Tea') }}</h3>
                        <ul class="sidebar-post">
                            <li>
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/baychay/original/photo_2021-08-28_09-37-40.jpg') }}"
                                            alt="{{ asset('baychay-template/img/blog/s-1.jpg') }}"></a>
                                </div>
                                <div class="post-text">
                                    <h4><a href="#">{{ __('a high-quality product without a fragrance') }}</a></h4>
                                    <span>{{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(8)->subDay(16))->format('M d, Y') }}</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="#"><img src="{{ asset('assets/baychay/original/baychay-tea-original-1-650x770.jpg') }}"
                                            alt="{{ asset('baychay-template/img/blog/s-2.jpg') }}"></a>
                                </div>
                                <div class="post-text">
                                    <h4><a href="#">ylham bermek çaý söýgüsi</a></h4>
                                    <span>{{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(5)->subDay(14))->format('M d, Y') }}</span>
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
                        <p>{{ __('Copyright') }} © {{ date('Y') }} <a
                                href="{{ route('main-page', app()->getlocale() ) }}">BaýÇaý</a>.
                            {{ __('All Rights Reserved') }}. </p>
                    </div>
                    <!-- copy-right end -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end -->
