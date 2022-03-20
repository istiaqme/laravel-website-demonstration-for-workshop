@extends('layouts.master')
@section('title', 'News | Ixony Engineering Limited') 
@section('content')
    

<div class="container">
    <div class="row pt-5 mt-5 mb-4">
        <div class="col text-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">
            <h2 class="font-weight-bold mb-1">All Recent News</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="blog-posts">

                <div class="row">
                    @foreach ($news as $newsItem)
                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="{{ asset('assets/images/uploads/') }}/{{ $newsItem->image }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" 
                                            alt="{{ $newsItem->title }}">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2">
                                        <a href="{{ url('/news/details/') }}/{{ $newsItem->slug }}">{{ \Illuminate\Support\Str::limit($newsItem->title, 50, '...') }}</a>
                                    </h2>
                                    <p>
                                        {{!! \Illuminate\Support\Str::limit($newsItem->details, 510, '...') !!}}
                                    </p>

                                    

                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>

    </div>

</div>
@endsection