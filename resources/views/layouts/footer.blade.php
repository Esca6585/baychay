<!-- footer-area start -->
<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <!-- single-footer-info start -->
                    <div class="single-footer-info singel-corporat-wrap">
                        <h3 class="footer-info-title">{{ __('Information') }}</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">{{ __('Main Page') }}</a></li>
                            <li><a href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a></li>
                        </ul>
                    </div>
                    <!-- single-footer-info end -->
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
