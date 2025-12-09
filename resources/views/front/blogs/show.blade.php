@extends('front.layout')

@section('title', $blog->title)

@section('description', truncatePostAndRemoveImages($blog->description))

@section('display_image', $blog->display_image)

@section('content')
    <div class="container blog-container mt-5 pt-5">
        <div class="row mt-5">
            <div class="blog-header my-2 mb-3">
                <h2 class="text-center">{{ $blog->title }}</h2>
                <span class="date d-flex justify-content-center"><bdi class="fs-6">{{ $blog->created_at->format('y M D, H:i') }}</bdi></span>
            </div>
            <div class="blog-image col-lg-6 mx-auto">
                <img loading="lazy" src="{{ $blog->display_image }}">
            </div>
            <div class="blog-body mt-3">
                {!! $blog->description !!}
            </div>
        </div>
    </div>

@endsection