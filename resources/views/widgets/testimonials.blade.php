{{-- <section class="section bg-color-white-scale-1 section-height-3 border-0 m-0">
    
</section> --}}

<div class="container pb-2 py-5 my-5">
    <div class="row">
        <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2">Words about us from <strong class="font-weight-extra-bold">Our Clients</strong></h2>
            <p class="lead">
                Our clients love us because we provide high quality as well as long term service & cost effective products & service
                with special emphasis on efficiency, safety, security, social development and conservation of environment.
            </p>
            {{-- <div class="row justify-content-center my-5">
                <div class="col-8 text-center col-md-4">
                    <img src="{{ asset('assets/img/logos/logo-1.png') }}" class="img-fluid hover-effect-3" alt="" />
                </div>
                <div class="col-8 text-center col-md-4 my-3 my-md-0">
                    <img src="{{ asset('assets/img/logos/logo-2.png') }}" class="img-fluid hover-effect-3" alt="" />
                </div>
                <div class="col-8 text-center col-md-4">
                    <img src="{{ asset('assets/img/logos/logo-3.png') }}" class="img-fluid hover-effect-3" alt="" />
                </div>
            </div> --}}
            <a href="#" class="btn btn-primary font-weight-semibold btn-px-4 btn-py-2 text-2">See All Clients</a>
        </div>
        <div class="col-lg-6">
            <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                
                @foreach($commonData['testimonials'] as $key => $testimonial)
                <div>
                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                        
                            <div class="testimonial-author">
                            </div>
                            <blockquote>
                                <p class="text-color-dark text-4 line-height-5 mb-0">{{ $testimonial->testimonial }}</p>
                            </blockquote>
                            <div class="testimonial-author">
                                <p><strong class="font-weight-extra-bold text-2">{{ $testimonial->name }}</strong><span>{{ $testimonial->details }}</span></p>
                            </div>
                        
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>