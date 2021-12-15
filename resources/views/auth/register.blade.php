@extends('layouts.main')

@section('content')
<h1 class="text-center mt-5 mb-3">Register</h1>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-lg-4">
<form action="{{ route('register')}}">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
  <p class="text-center mt-4">Already have an account?<small><a href="{{ route('login') }}">Login</a></small> </p>
</div>
</div>
@endsection