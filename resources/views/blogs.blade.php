@extends('layouts.main')

@section('content')
@foreach($blogs as $blog)
<h2 class="mt-5"><a href="/blog/{{ $blog->excerpt }}">{{ $blog->title }}</a></h2>
<div class="col-lg-8 mt-4"> 
<p>{{ $blog->excerpt}}</p>
<a href="/blog/{{ $blog->excerpt }}">Read more...</a>
</div>
@endforeach

@endsection