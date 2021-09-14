<!-- our-blog-area-1 start -->
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
                        <img src="{{ asset('baychay-template/img/blog/s-1.jpg') }}" alt="">
                        <div class="blog-button">
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="aritcles-content text-center">
                        <div class="articles-date">
                            <span>BaýÇaý</span> - {{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(7)->subDay(7))->format('M d, Y') }}
                        </div>
                        <a href="blog-details.html">bir käse çaý rahatlyk çeşmesi</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-our-blog">
                    <div class="blog-thum">
                        <img src="{{ asset('baychay-template/img/blog/s-2.jpg') }}" alt="">
                        <div class="blog-button">
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="aritcles-content text-center">
                        <div class="articles-date">
                            <span>BaýÇaý</span> - {{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(4)->subDay(13))->format('M d, Y') }}
                        </div>
                        <a href="blog-details.html">ylham bermek çaý söýgüsi</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="singel-our-blog">
                    <div class="blog-thum">
                        <img src="{{ asset('baychay-template/img/blog/s-1.jpg') }}" alt="">
                        <div class="blog-button">
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="aritcles-content text-center">
                        <div class="articles-date">
                            <span>BaýÇaý</span> - {{ \Carbon\Carbon::parse(\Carbon\Carbon::today()->subMonth(2)->subDay(29))->format('M d, Y') }}
                        </div>
                        <a href="blog-details.html">ertirlik naharyndaky çaýyňyzdan lezzet alyň</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- our-blog-area-1 end -->