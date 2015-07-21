@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Student</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Student</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="headline"><h3>Lady Special</h3></div>

                <div class="span4">
                    {{ HTML::image( '/images/client_student/arab_woman.png', 'Lady Special' ) }}
                </div>

                <div class="span6">
                    <p>WE OFFER SPECIAL CARE AND ARRANGEMENTS FOR YOUR SECURITY AND COMFORT FOR FEMALE CLIENTS AND PROVIDE ASSISTANCE NEEDED DURING YOUR STAY. WE PROVIDE THE FOLLOWING FACILITIES FOR YOUR SAFETY AND CONVENIENCE</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop