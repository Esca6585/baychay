<div class="wrapper single-product-page">
    <!-- main-content-wrapper start -->
    <div class="main-content-wrapper pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <!--product-thumbnail start-->
                    <div class="product-thumbnail">
                        <div class="tab-content">
                            @foreach($tea->images as $key => $image)
                            <div role="tabpanel" class="tab-pane {{ $key == 0 ? 'active' : '' }}"
                                id="Thumb{{ $key+1 }}">
                                <a class="popup-link" href="{{ asset($image->thumb) }}">
                                    <img src="{{ asset($image->thumb) }}" alt="{{ asset($image->thumb) }}"> </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="modal-product-tab">
                            <ul class="nav product-small-thum owl-carousel">
                                @foreach($tea->images as $key => $image)
                                <li role="presentation" class="active"><a href="#Thumb{{ $key+1 }}"
                                        data-toggle="tab"><img src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}"></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--product-thumbnail end-->
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="single-product-page-content">
                        <div class="product-info">
                            <h3>{{ $tea->{ 'name_' . app()->getlocale() } }}</h3>
                            <div class="price-box">
                                @if($tea->sale_price)
                                <span class="old-price">{{ $tea->price }} {{ __('manat') }}</span>
                                @endif
                                <span class="new-price">
                                    {{ $tea->sale_price ? $tea->sale_price : $tea->price }}
                                    {{ __('manat') }}
                                </span>
                            </div>

                            <div class="product-info">
                                @if($tea->discount)
                                <span class="discount">-{{ $tea->discount }}%</span>
                                
                                @endif
                                @if($tea->sale_type)
                                <span class="sale_type">{{ __($tea->sale_type) }}</span>
                                @endif
                            </div>
                            <p>{{ __('a high-quality product without a fragrance') }}</p>

                            <form class="single-cart">
                                <div class="quantity">
                                    <input type="number" class="input-box" step="1" min="0" value="1">
                                </div>
                                <button class="single_add_to_cart_button">
                                    <i class="flaticon2-shopping-cart-1"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrapper end -->

    <div class="related-products pt-100">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="titel">{{ __('New') }} {{ __('Tea') }}</h2>
                        <p>bir k??se ??a?? rahatlyk ??e??mesi</p>
                        <!-- <p>{{ __('a high-quality product without a fragrance') }}</p> -->
                    </div>
                </div>
            </div>
            <hr>

            <div class="related-product-wrappner my-5">
                <div class="row">
                    <div class="related-product-active owl-carousel">
                        @foreach($trendTeas as $trendTea)
                        <div class="col">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-thum">
                                    <a href="{{ route('single.product', [ app()->getlocale(), $trendTea->id, \Str::slug($trendTea->{ 'name_' . app()->getlocale() }) ]) }}"
                                        id="product-link">
                                        @foreach($trendTea->images as $image)
                                        <img class="primary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach

                                        @foreach(array_reverse($trendTea->images) as $image)
                                        <img class="secondary-image" src="{{ asset($image->thumb) }}"
                                            alt="{{ asset($image->thumb) }}">
                                        @break
                                        @endforeach
                                    </a>
                                    @if($trendTea->discount)
                                    <span class="discount">-{{ $trendTea->discount }}%</span>
                                    @endif
                                    @if($trendTea->sale_type)
                                    <span class="sale_type">{{ __($trendTea->sale_type) }}</span>
                                    @endif
                                    <div class="product-action">
                                        <a href="#add-to-cart" class="add-to-cart-btn"><i
                                                class="flaticon2-shopping-cart-1"></i></a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <a href="single-product.html">
                                        <h3>{{ $trendTea->{ 'name_' . app()->getlocale() } }}</h3>
                                    </a>
                                    <div class="price-box">
                                        @if($trendTea->sale_price)
                                        <span class="old-price">{{ $trendTea->price }} {{ __('manat') }}</span>
                                        @endif
                                        <span class="new-price">
                                            {{ $trendTea->sale_price ? $trendTea->sale_price : $trendTea->price }}
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
            <hr>
        </div>
    </div>

</div>
