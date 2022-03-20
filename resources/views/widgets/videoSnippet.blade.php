<div class="container">
    <div class="row py-5 my-5">
        <div class="col-md-8 order-2 order-md-1 text-center text-md-start appear-animation mt-2 pt-1" data-appear-animation="fadeInRightShorter">
            <div class="owl-carousel owl-theme nav-style-1 mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 15, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 2000}">
                
                @foreach($videos as $video)
                
                    <div>
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/{{ $video->link }}" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    </div>

                @endforeach

                

        
                
            </div>
        </div>
        <div class="col-md-4 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
            <h2 class="text-color-dark font-weight-normal text-6 mb-2">Watch our <strong class="font-weight-extra-bold">Videos</strong></h2>
            <p class="lead">You will learn about our projects, works and office life. Also you can stay connected to us by subscribing.</p>
            <a href="https://www.youtube.com/channel/UCFM-9H3pAq-FT7BRcMLJRUg" class="btn btn-danger font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">Subscribe To Our Youtube Channel</a>
        </div>
    </div>
</div>