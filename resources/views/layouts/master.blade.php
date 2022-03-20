@include('layouts.header')

<div role="main" class="main">
    
    @yield('content')

    {{-- Testimonials --}}
    @include('widgets.testimonials')

    {{-- CTA --}}
    @include('widgets.cta')
    
</div>


@include('layouts.footer')


			
