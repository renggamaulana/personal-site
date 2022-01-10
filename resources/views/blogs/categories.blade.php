@extends('layouts.main')

@section('content')

<div class="container d-flex justify-content-center align-items-center my-5">
    <div class="col-lg-10">
        <h1 class="mb-5">Categories</h1>
        @foreach($categories as $category)
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}" class="blog-link posts">{{ $category->name }}</a></h2>
            </li>
        </ul>
        @endforeach
    </div>
    </div>
</div>

@endsection

