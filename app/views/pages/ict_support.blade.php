@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">ICT Support</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">ICT Support</li>
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
                    {{ HTML::image( '/images/ict_support/phone.png', 'ICT Support' ) }}
                </div>

                <div class="span6">
                    <p>ECIES supports number of software applications, hardware and network related requirements. We provide maintenance plan for your organization with cost effective manner. We provide installation and upgrade service for your Servers, Desktop Computer, Laptop, and network. ECIES provides consultation services for all your computer related requirements. We have expertise in providing support services for your hardware, software and networking related activities. Our offering for Hardware, Software and Network:</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop