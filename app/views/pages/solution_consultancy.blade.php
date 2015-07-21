@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Consultancy</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Consultancy</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">

                <div class="span6">
                    {{ HTML::image( '/images/solution_consultancy/book_pen.png', 'Consultancy' ) }}
                </div>

                <div class="span6">
                    <p>ECIES helps customers to improve the way they do business by optimizing processes, aligning ICT and Security with business needs, We work with our client to define organization business goals, accordingly we design a strategy, prepare implementation plan, develop a solution, deliver solution and deploy across your organization.</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop