@extends('layouts.master')
@section('title', 'Brand Details | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">{{ $singleBrand->title }} in {{ $singleService->title }}</h2>
        </div>
    </div>
    <div class="row py-4">
            @foreach ($categories as $key => $category)
                <div class="col-4 col-md-3 col-lg-3 pb-5">
                    <a href="{{ url('/products/service/') }}/{{ $singleService->slug }}/brand/{{ $singleBrand->slug }}/category/{{ $category->slug }}">
                        <h4 class="mt-2 text-6">{{ $category->key + 1 }}. {{ $category->title }}</h4>
                    </a>
                </div>
            @endforeach
    </div>

</div>
@endsection