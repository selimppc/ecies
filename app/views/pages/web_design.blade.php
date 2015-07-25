@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left"> {{$data->title }}</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Web Design</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">

                <div class="span12">
                    {{ HTML::image( $data->image, $data->title ) }}
                </div>
                <p>&nbsp;</p>

                <div class="span12">
                    <p> {{$data->description }}</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop