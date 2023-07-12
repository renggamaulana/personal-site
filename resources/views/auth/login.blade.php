@extends('layouts.main')

@section('content')
@if($errors->has('message'))
    <div class="alert alert-danger">
        {{ $errors->first('message') }}
    </div>
@endif


<h1 class="text-center my-5">Login</h1>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-lg-4">
<form action="{{ route('login') }}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <p class="text-center mt-3">Not registered yet? <small><a href="{{ route('register') }}">register</a> Now!</small> </p>
</div>
</div>
<br>
<br>
<br>
<br>
@endsection

