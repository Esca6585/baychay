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
            @foreach($teaLasts as $teaLast)
            <div class="col-lg-3 col-md-6">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-thum">
                        <a href="#single-product">
                            @foreach($teaLast->images as $image)
                            <img class="primary-image" src="{{ asset($image->original) }}"
                                alt="{{ asset($image->original) }}">
                            @break
                            @endforeach

                            @foreach(array_reverse($teaLast->images) as $image)
                            <img class="secondary-image" src="{{ asset($image->original) }}"
                                alt="{{ asset($image->original) }}">
                            @break
                            @endforeach
                        </a>
                        @if($teaLast->discount)
                        <span class="discount">-{{ $teaLast->discount }}%</span>
                        @endif
                        @if($teaLast->sale_type)
                        <span class="sale_type">{{ __($teaLast->sale_type) }}</span>
                        @endif
                        
                        <div class="product-action">
                            <a href="#add-to-cart" class="add-to-cart-btn"><i class="flaticon2-shopping-cart-1"></i></a>
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <a href="single-product.html">
                            <h3>{{ $teaLast->{ 'name_' . app()->getlocale() } }}</h3>
                        </a>
                        <div class="price-box">
                            @if($teaLast->sale_price)
                            <span class="old-price">{{ $teaLast->price }} {{ __('manat') }}</span>
                            @endif
                            <span class="new-price"> {{ $teaLast->sale_price ? $teaLast->sale_price : $teaLast->price }}
                                {{ __('manat') }}</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>
        
    </div>
</div>
<!-- product-area end -->
