@extends('layouts.app')

@section('content')

    <h1 align="center"> Messages </h1>
    <hr/>
    @foreach($user->messages as $message)
        <article>
            <h2>
               <a href="{{action('MessagesController@show', [$message->id])}}"> {{$message->topic}}
               </a>
            </h2>
        </article>
    @endforeach
@stop


