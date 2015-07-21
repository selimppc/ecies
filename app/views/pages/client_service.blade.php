@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Service</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Service</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="headline"><h3>HOSPITALITY</h3></div>

                <div class="span4">
                    {{ HTML::image( '/images/client_service/hospitality.png', 'Hospitality' ) }}
                </div>

                <div class="span6">
                    <p>Great selection of cheap hostels and and cheap accommodation in Europe cities and United Kingdom practically, we can find you the best hostel deals, whether you are professional, student or a new visitor in Europe. ECIES offers affordable accomodation for professional and student.</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop