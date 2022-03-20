@extends('layouts.master')
@section('title', 'Clients | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">Clients</h2>
            <p>We have served {{ count($clients)}} clients and still counting....</p>
        </div>
    </div>
    <div class="row py-4">
            @foreach ($clients as $client)
                <div class="col-4 col-md-3 col-lg-2 pb-5">
                    <div class="thumb-info thumb-info-floating-caption thumb-info-hide-wrapper-bg thumb-info-floating-element-wrapper" data-title="{{ $client->title }}">
                        <div class="thumb-info-wrapper">
                            <img src="{{ asset('assets/images/uploads/') }}/{{ $client->image }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
    </div>

</div>
@endsection