@extends('layouts.master')
@section('title', 'Products') 
@section('content')
    

<div class="container">
    <div class="row pt-2 mt-2 mb-2">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">All Products</h2>
        </div>
    </div>
    <div class="row py-4">
            @foreach ($products as $product)
                <div class="col-6 col-sm-3 col-lg-3">
                    <div style="margin-bottom: 100px">
                        <img class="img-fluid rounded-0 mb-2" src="{{ asset('assets/images/uploads/') }}/{{ $product->image }}" alt="{{$product->title}}">
                        <hr style="border: 1px solid black; margin-bottom: 30px;">
                        <h3 style="color: #198754; font-family: 'Roboto'; font-size: 20px; margin-bottom: 20px; line-height: 28px; font-weight: 500; text-transform: none;">{{ $product->title }}</h3>
                        <p style="font-family: 'Roboto'; font-size: 16px; margin-bottom: 20px; line-height: 22px; text-transform: none;">
                            {{ $product->details }}
                        </p>
                        @if ($product->outer_link !== null)
                            
                            <a href="{{$product->outer_link }}">Details</a>
                            
                        @endif
                    </div>
                </div>
            @endforeach
    </div>

</div>
@endsection