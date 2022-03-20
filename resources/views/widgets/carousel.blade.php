<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 4000}" data-dynamic-height="['490px','490px','490px','390px','390px']" style="height: 490px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            @foreach ($sliderItems as $key => $sliderItem)
                @php
                    $image = $sliderItem->image;
                @endphp
                @if ($key === 0)
                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative" 
                        style="background-image: url({{ asset("assets/images/uploads/$image") }}); background-size: cover; background-position: center;">
                    </div>
                @else
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="13s" data-plugin-options="{'minWindowWidth': 0}" 
                        data-carousel-onchange-show style="background-image: url({{ asset("assets/images/uploads/$image") }}); background-size: cover; background-position: center;"></div>
                    </div>
                @endif
            @endforeach

            

            {{-- if not index 0 --}}
            <!-- Carousel Slide 2 -->
            

        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"></button>
        <button type="button" role="presentation" class="owl-next"></button>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>