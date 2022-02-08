@extends('layouts.main')

@section('content')
@if ($categories->count())
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="col-lg-10">
        <h1 class="mb-5">{{ $title }}</h1>
        @foreach($categories as $category)
            <h3><a href="/categories/{{ $category->slug }}" class="blog-link posts">{{ $category->name }}</a></h3>
            <img src="https://source.unsplash.com/300x200?/{{ $category->name }}" alt="img" class="my-2">
        @endforeach
    </div>
</div>
@else
<div class="container">
    <div class="row" style="margin-top:">
        <div class="col">
            <p class="text-center mt-5 mb-5 fs-1">No category found.</p>
        </div>
    </div>
</div>
@endif

@endsection

