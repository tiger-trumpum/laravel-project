@extends('layouts.app')

@section('content')

    <h1 align="center"> Edit {!! $message->title !!} </h1>

    <hr/>
    {!!Form::model($message, (['method' => 'PATCH', 'action' => ['MessagesController@update', $message->id]])) !!}

    @include('messages.form', ['submitButtonText' => 'Update Message'])

    {!! Form::close() !!}

    @include('errors.list')

    @endsection