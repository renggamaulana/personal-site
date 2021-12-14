@extends('layouts.main')

@section('content')
<section>
@foreach ($blogs as $blog )
<div class="col-lg-8 mx-auto">
    <h1 class="post-title my-5">{{ $blog->title }}</h1>
   <div class="post-body">
       <p>{{ $blog->body }}</p>
    </div>
    </div>
@endforeach
<div id="progress-bar"></div>
</section>
@endsection