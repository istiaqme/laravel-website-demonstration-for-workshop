<section class="section section-height-3 bg-success border-0 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="font-weight-bold text-color-light text-6 mb-2">What's New</h2>
                <a href="{{ url('/news') }}">
                    <h4 class="text-color-light text-3 mb-4">See All News Page</h4>
                </a>
            </div>
        </div> 
        <div class="row recent-posts appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            @foreach ($news as $newsItem)
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 pl-4">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="{{ asset('assets/images/uploads/') }}/{{ $newsItem->image }}" class="img-fluid hover-effect-2 mb-3" alt="{{ $newsItem->title }}" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col ps-1">
                                <h4 class="line-height-3 text-4"><a href="{{ url('/news/details/') }}/{{ $newsItem->slug }}" class="text-light">{{ \Illuminate\Support\Str::limit($newsItem->title, 50, '...') }}</a></h4>
                                <p class="text-color-light line-height-5 opacity-6 pe-4 mb-1">{{!! html_entity_decode(\Illuminate\Support\Str::limit($newsItem->details, 150, '...'))  !!}}</p>
                                <a href="{{ url('/news/details/') }}/{{ $newsItem->slug }}" class="read-more text-color-light font-weight-semibold text-2">Read more <i class="fas fa-chevron-right text-1 ms-1"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach


            



            
        </div>
    </div>
</section>