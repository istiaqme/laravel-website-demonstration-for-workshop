


    <div class="container">
        @foreach ($services as $key => $service)
            <div class="row py-2 my-2">
                <div class="col-md-4 order-1 order-md-1 text-center text-md-start mb-5 mb-md-0 appear-animation px-5" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2"><strong class="font-weight-extra-bold">{{ $service->title }}</strong></h2>
                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                        <span class="thumb-info-caption">
                        <br>
                        <span class="thumb-info-wrapper">
                            <a href="{{ url("/products/services/") }}/{{ $service->slug }}">
                                <img src="{{ asset('assets/images/uploads/') }}/{{ $service->image }}" class="img-fluid" alt="Ixony Engineering Limited">
                            </a>
                        </span>
                    </span>
                    <a href="{{ url("/products/services/") }}/{{ $service->slug }}" class="read-more font-weight-semibold text-2">View Details <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                </div>

                <div class="col-md-8 order-2 order-md-2 text-center text-md-start appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
                    @if (count($services[$key]->brands) === 0)
                        <div class=" alert alert-default mt-4">
                            <strong>No Items Yet!</strong>
                        </div>
                    @else
                        <div class="owl-carousel owl-theme nav-style-1 mb-0" 
                            data-plugin-options="
                                {'responsive': {'320': {'items': 2}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 4}}, 'margin': 15, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 2000}
                            ">
            
                                
                                @foreach ($services[$key]->brands as $brand)
                                    <div class="mt-5">
                                        <img class="img-fluid rounded-0 mb-4" src="{{ asset('assets/images/uploads/') }}/{{ $brand->brand->image }}" alt="$brand->brand->title">
                                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{ $brand->brand->title }}</h3>
                                        <a href="{{ url("/products/services/") }}/{{ $brand->brand->slug }}" class="read-more font-weight-semibold text-2">See Products <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                                    </div>
                                @endforeach
                        </div>
                    @endif
                    
                    


                </div>
            </div>
        @endforeach
    </div>
