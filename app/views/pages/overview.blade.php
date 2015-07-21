@extends('layouts.master')

@section('content')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">About Us</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Pages</a> <span class="divider">/</span></li>
            <li class="active">About Us</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid margin-bottom-30">
        <div class="span6">
            <p>Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone. Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Unify is an incredibly beautiful responsive Bootstrap Template for It works on all major web.</p>
            <ul class="unstyled">
                <li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida</li>
                <li><i class="icon-ok color-green"></i> Corporate and Creative</li>
                <li><i class="icon-ok color-green"></i> Responsive Bootstrap Template</li>
                <li><i class="icon-ok color-green"></i> Elit non mi porta gravida</li>
                <li><i class="icon-ok color-green"></i> Award winning digital agency</li>
            </ul><br />

            <!-- Blockquotes -->
            <blockquote>
                <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why.</p>
                <small>CEO Jack Bour</small>
            </blockquote>
        </div>
        <div class="span6">
            <iframe src="http://player.vimeo.com/video/9679622" width="100%" height="327" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        </div>
    </div><!--/row-fluid-->



</div><!--/container-->
<!--=== End Content Part ===-->


@stop