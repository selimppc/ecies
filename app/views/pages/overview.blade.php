@extends('layouts.master')

@section('content')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left"> {{$data->title}} </h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Ecies</a> <span class="divider">/</span></li>
            <li class="active">About Us</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid margin-bottom-30">
        <div class="span6">
            {{$data->description}}
        </div>
        <div class="span6">
            <iframe src="http://player.vimeo.com/video/9679622" width="100%" height="327" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        </div>
    </div><!--/row-fluid-->



</div><!--/container-->
<!--=== End Content Part ===-->


@stop