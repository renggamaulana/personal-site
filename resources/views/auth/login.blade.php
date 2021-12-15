@extends('layouts.main')

@section('content')
<h1 class="text-center my-5">Login</h1>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-lg-4">
<form action="{{ route('login')}}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <p class="text-center mt-4">Not registered yet? <small><a href="{{ route('register') }}">register</a> Now!</small> </p>
</div>
</div>
@endsection