@extends('layouts.main')

@section('content')
<section id="hello">
<div class="row text-center mt-5">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
        <h2 class="mt-5">Hello!</h2>
        <h3>My name is <strong>Réngga!</strong></h3>
        <h4>I'm a self taught programmers!</h4>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
       <img src="{{ asset('img/hello.png') }}" alt="hello" class="hello" width="600">
    </div>
</div>
<div class="row justify-content-center align-items-center">
    <div class="col offset-5 mt-4">
        <button class="btn btn-primary">Let's Collab!</button>
    </div>
</div>
</section>

<section id="contact">
    <a href="www.instagram.com/renggaamln"></a>
</section>
@endsection