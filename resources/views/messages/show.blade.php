@extends('layouts.app')


@section('content')
    <br>
    <div class="col-md-6"><h1> {{$message->topic}} </h1> </div>
    <div class="col-md-6" align="right"> <img width="120" height="120" src="../images/{{$name}}.jpg" alt="{{$name}}"> </div>

    <article>
            {{$message->content}}
        </article>

    <div class="panel-footer">

        <a href="{{ route('messages.edit', ['id' => $message->id]) }}" class="btn btn-default">Edit</a>

        {!! Form::open(['url' => route('messages.destroy', $message->id), 'method' => 'delete', 'class' => 'pull-right']) !!}
        <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
    </div>
@endsection


