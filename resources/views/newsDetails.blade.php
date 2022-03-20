@extends('layouts.master')
@section('title', "News Details"  ) 
@section('content')
    

<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts single-post">

                <article class="post post-large blog-single-post border-0 m-0 p-0">
                <div class="post-image ms-0">
                    <a href="{{ url('/news/details/') }}/{{ $singleNews->slug }}">
                        <img src="{{ asset('assets/images/uploads/') }}/{{ $singleNews->image }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $singleNews->title }}">
                    </a>
                </div>

                <div class="post-content ms-0">

                    <h2 class="font-weight-semi-bold">
                        <a href="{{ url('/news/details/') }}/{{ $singleNews->slug }}">{{ $singleNews->title }}</a>
                    </h2>
                    <div>
                        {{ $singleNews->details }}
                    </div>

                    
                    

                </div> 

                                        
                
                </article>

            </div>
        </div>
    </div>

</div>
@endsection