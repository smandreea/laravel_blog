@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <a href="/posts" class="btn btn-primary btn-lg" role="button">Go back</a>
</div>
    
    <h1 class="mt-3">{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%"/>
    <div>
        <p>{!!$post->body!!}</p>
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg" role="button">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return ConfirmDelete()'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    <script>
        function ConfirmDelete()
        {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
        }
    </script>
@endsection