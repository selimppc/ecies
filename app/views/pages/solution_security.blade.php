@extends('layouts.master')

@section('content')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left"> {{$data->title}} </h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="#">SOLUTION</a> <span class="divider">/</span></li>
            <li class="active">Security</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid margin-bottom-30">

        {{--<div class="span12">
            {{ HTML::image( $data->image, $data->title ) }}
        </div>--}}

        <div class="span12">
            {{ HTML::image( $data->image, $data->title, ['class'=>'img-size', 'align'=>'right'] ) }}
            {{$data->description}}
        </div>

    </div><!--/row-fluid-->



</div><!--/container-->
<!--=== End Content Part ===-->


@stop