@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to {{$title}}</h1>
    <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
</div>

@endsection