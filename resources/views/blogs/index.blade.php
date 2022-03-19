@extends('layouts.main')

@section('content')
@if ($blogs->count())
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="col-lg-10">
        <h1 class="mb-5">{{ $title }}</h1>
        @foreach($blogs as $blog)
        <article class="mb-5">
            <h3><a href="/blogs/{{ $blog->slug }}" class="blog-link posts">{{ $blog->title }}</a></h3>
            <img src="https://source.unsplash.com/300x200?/{{ $blog->category->name }}" alt="img" class="my-2">
            <div class="col-lg-8 col-xs-12 mt-4">
                <p>{{ $blog->excerpt}}</p>
                <a href="/blogs/{{ $blog->slug }}">Read more...</a>
            </div>
        </article>
        @endforeach
    </div>
    <aside>
            <h6>Related topics</h6>
            <ul>
                @foreach ($categories as $category )
                    <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>  
                @endforeach
            </ul>
    </aside>
</div>
@else
<div class="container">
    <div class="row" style="margin-top:">
        <div class="col">
            <p class="text-center mt-5 mb-5 fs-1">No post found.</p>
            <div class="d-flex justify-content-center my-5">
                <a class="badge bg-success text-decoration-none" 
                onMouseOver="this.style.color='rgb(226, 231, 231)'"
                onMouseOut="this.style.color='white'"
                href="blogs/create">Create a blog</a>
            </div>
        </div> 
    </div>
</div>
{{-- <br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br> --}}
@endif

@endsection
