<!-- slider-main-area start-->
<div class="slider-main-area">
    <div class="slider-active owl-carousel">
        <!-- slider-wrapper start -->
        @foreach (Config::get('languages') as $lang => $language)
            @if(app()->getlocale() == $lang)
                <div class="slider-wrapper" 
                style="background-image:url({{ asset($language['slider']) }})"></div>
            @endif
        @endforeach

        @foreach (Config::get('languages') as $lang => $language)
            @if(app()->getlocale() != $lang)
                <div class="slider-wrapper" 
                style="background-image:url({{ asset($language['slider']) }})"></div>
            @endif
        @endforeach
        <!-- slider-wrapper end -->
    </div>
</div>
<!-- slider-main-area end-->
