@extends('layouts.main')


@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-8">
            <h2 class="mb-3">Create a new post</h2>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <form method="post" action="/blogs">
                @csrf 
                <div class="form-group mb-3">
                  <label for="title">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title here" value="{{ old('title') }}">
                  @error('title')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug here" value="{{ old('slug') }}">
                    @error('slug')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group mb-3">
                  <label for="body">Body</label>
                  <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="4" cols="200" placeholder="Content here..." value="{{ old('body') }}"></textarea>
                  @error('body')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="excerpt">Excerpt</label>
                  <textarea disabled class="form-control" id="excerpt" name="excerpt" rows="4" cols="200" placeholder="Content here..."></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Choose a Category</label>
                    <select class="form-control mt-2" id="category_id" name="category_id">
                      @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                </div>
                  <button type="submit" class="btn btn-primary my-3">Create Post</button>
              </form>
        </div>
    </div>
</div>
<br>
<br>
@endsection

