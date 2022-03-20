<section class="section bg-color-light border-0 m-0">
    <div class="container-fluid">
        <div class="row text-center text-md-start">

            @foreach ($brands as $brand)
                <div class="col-md-1 col-sm-2 col-4 mb-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('assets/images/uploads/') }}/{{ $brand->image }}" alt="Ixony Engineering Limited">
                </div>
            @endforeach

    
        </div>
    </div>
</section>