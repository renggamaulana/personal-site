@extends('layouts.main')

@section('content')
<section>

<article class="my-5">
<div class="col-lg-8 col-md-12 mx-auto">
    <h1 class="post-title my-5">{{ $blog->title }}</h1>
   <div class="post-body">
       <p>{{ $blog->body }}</p> 
    </div>
    <a href="/blog">Back to blogs</a>
    </div>
</article>

<div id="progress-bar"></div>
</section>
@endsection