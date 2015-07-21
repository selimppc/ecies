@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Web Design</h1>
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

                <div class="span6">
                    {{ HTML::image( '/images/web_design/web_design.png', 'web design' ) }}
                </div>

                <div class="span6">
                    <p>Having a professional, user-friendly website is one of the keys to keeping your visitors browsing longer and getting them interested in your products/services rather than your competitors. A positive first impression is credited to creating a lasting impact spreading to the content of the site. At ECIES, we have talented graphics designers and codes who can create great custom web design at very competitive prices. We can deliver you in no time a bespoke website design, a personal or business blog or any other kind of custom applications. We offer free consultation to get the clear idea of your business needs.</p>
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop