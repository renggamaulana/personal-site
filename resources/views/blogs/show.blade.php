@extends('layouts.main')

@section('content')

<section>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12 mx-auto">
            <article class="my-5">
                <h1 class="post-title my-5">{{ $blog->title }}</h1>
                <img src="https://source.unsplash.com/700x400?/{{ $blog->category }}" alt="img">
            <div class="post-body mt-5">
                <p>{{ $blog->body }}</p> 
            </div>
                <a href="/blogs">Back to blogs</a>
            </article>
            <div class="mb-5">
            <p style="font-size: 2rem; color: rgb(48, 48, 48)">---</p>
             <p> {{ $blog->updated_at->format('l, d F Y') }} ,#<a href="">{{ $blog->category }}</a> </p>
            </div>
        </div>
    </div>
    

</div>
<div id="progress-bar"></div>

</section>



@endsection