@extends('layouts.main')

@section('content')
@foreach($blogs as $blog)
<article class="mb-5">
    <h2><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
    <div class="col-lg-8 col-xs-12 mt-4">
    <p>{{ $blog->excerpt}}</p>
    <a href="/blog" class="btn btn-primary">Read more...</a>
    </div>
</article>
@endforeach

@endsection

