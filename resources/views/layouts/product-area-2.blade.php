<div id="products">
    <!-- product-area-2 start -->
    <div class="product-area section-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center">
                        <h2 class="titel-2">{{ config('app.name') }}</h2>
                    </div>
                </div>
            </div>
            <!-- tab-content start -->
            <div class="tab-content">
                <div id="black-coffee" class="tab-pane active show" role="tabpanel">
                    <div class="row">
                        <!-- single-product-wrap start -->
                        @foreach($teas as $tea)
                        <div class="col-lg-3">
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="{{ route('single.product', [ app()->getlocale(), $tea->id, \Str::slug($tea->{ 'name_' . app()->getlocale() }) ]) }}"
                                        id="product-link">
                                        @foreach($tea->images as $image)
                                        <img class="primary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach

                                        @foreach(array_reverse($tea->images) as $image)
                                        <img class="secondary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach
                                    </a>
                                    @if($tea->discount)
                                    <span class="discount">-{{ $tea->discount }}%</span>
                                    @endif
                                    @if($tea->sale_type)
                                    <span class="sale_type">{{ __($tea->sale_type) }}</span>
                                    @endif
                                    <div class="product-action">
                                        <a class="add-to-cart-btn" id="add-to-cart" data-tea-id="{{ $tea->id }}"><i
                                                class="flaticon2-shopping-cart-1"></i></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html">
                                        <h3>{{ $tea->{ 'name_' . app()->getlocale() } }}</h3>
                                    </a>
                                    <div class="price-box">
                                        @if($tea->sale_price)
                                        <span class="old-price">{{ $tea->price }} {{ __('manat') }}</span>
                                        @endif
                                        <span class="new-price">
                                            {{ $tea->sale_price ? $tea->sale_price : $tea->price }}
                                            {{ __('manat') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- single-product-wrap end -->
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $teas->links('layouts.front-pagination') }}
            </div>
            <!-- tab-content end -->
        </div>
    </div>
    <!-- product-area-2 end -->

</div>
