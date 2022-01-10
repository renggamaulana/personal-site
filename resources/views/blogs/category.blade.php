@extends('layouts.main')

@section('content')

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="col-lg-10">
        <h1 class="mb-5">Category {{ $category }}</h1>
        @foreach($blogs as $blog)
        <article class="mb-5">
            <h2><a href="/blogs/{{ $blog->slug }}" class="blog-link posts">{{ $blog->title }}</a></h2>
            <img src="https://source.unsplash.com/300x200?/{{ $blog->category->name }}" alt="img" class="my-2">
            <div class="col-lg-8 col-xs-12 mt-4">
                <p>{{ $blog->excerpt}}</p>
                <a href="/blogs/{{ $blog->slug }}">Read more...</a>
            </div>
        </article>
        @endforeach
    </div>
    </div>
</div>

@endsection

