@extends('layouts.master')
@section('title', 'Ixony Engineering Limited | Home') 
@section('content')
    {{-- Slider --}}
    @include('widgets.carousel')
    {{-- Brands --}}
    @include('widgets.brandShowcase')
    {{-- Small About --}}
    @include('widgets.aboutSnippet')
    {{-- Services And Brands --}}
    @include('widgets.serviceAndBrandSnippet')


    {{-- What's New --}}
    @include('widgets.videoSnippet')

    

    {{-- What's New --}}
    @include('widgets.blogSnippet')

    

    

    
@endsection