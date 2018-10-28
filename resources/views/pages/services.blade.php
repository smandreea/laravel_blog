@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<h2>{{$subtitle}}</h2>

    @if(count($services)>0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('cont2')
<h2>content 2</h2>
@endsection