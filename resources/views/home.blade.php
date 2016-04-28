@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                   <div class="col-md-6"> <h2 align="right">Hello, {{$name}}! </h2></div>
                    <div class="col-md-6" align="right"> <img width="120" height="120" src="../images/{{$name}}.jpg" alt="{{$name}}"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
