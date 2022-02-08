@extends('layouts.main')

@section('content')

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 mx-auto">
            <article class="my-5">
                <h3 class="post-title my-5">{{ $blog->title }}</h3>
                <div class="mb-5">
                     <p>Published :{{ $blog->updated_at->format('l, d F Y') }} <a href="/categories/{{ $blog->category->slug}}">#{{ $blog->category->name }}</a></p>
                     <p style="font-size: 2rem; color: rgb(48, 48, 48)">---</p>
                    </div>
                <img src="https://source.unsplash.com/700x400?/{{ $blog->category->name }}" alt="img">
            <div class="post-body mt-5">
                <p>{!! $blog->body !!}</p> 
            </div>
                <a href="/blogs">Back to blogs</a>
            </article>
            
        </div>
    </div>
    

</div>
<div id="progress-bar"></div>

</section>



@endsection