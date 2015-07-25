@extends('layouts.master')
@section('content')

    <div style="margin-left: 25%; padding: 5%;">
        <h1 style="color: red;"> Oops! You missed something.</b> ! </h1>
        {{ HTML::image('images/404/404.jpg', '404 error') }}
    </div>

@stop