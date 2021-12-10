@extends('layouts.main')

@section('content')
<section id="hello">
<div class="row text-center mt-5">
    <div class="col">
        <h2 class="mt-5">Hello!</h2>
        <h3>My name is <strong>Réngga!</strong></h3>
        <h4>I'm a self taught programmers!</h4>
    </div>
    <div class="col-lg-8">
       <img src="{{ asset('img/hello.png') }}" alt="hello" width="700">
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