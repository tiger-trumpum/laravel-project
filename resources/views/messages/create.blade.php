@extends('layouts.app')


@section('content')

    <div class="col-md-6"><h2>Leave a message</h2></div>
    <div class="col-md-6" align="right"> <img width="120" height="120" src="../images/{{$name}}.jpg" alt="{{$name}}"> </div>
    <hr />
    {!!Form::open(array('id' => 'popupfrmcallorder', 'url' => 'messages', 'files' => true)) !!}
        @include('messages.form', ['submitButtonText' => 'Add Message'])
    {!! Form::close() !!}
    @include('errors.list')

@stop