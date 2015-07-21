@extends('layouts.master')

@section('content')
<!--=== Breadcrumbs ===-->
<div class="row-fluid breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left"> Partner </h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="#">ECIES</a> <span class="divider">/</span></li>
            <li class="active">Partner</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid margin-bottom-30">

        <div class="span12">
        </div>

        <div class="span12">
            <p> There is a light at the end of the tunnel. Our certified Security Support team have experience in: </p>
            <ul class="unstyled">
                <li><i class="icon-ok color-green"></i> Understand where the Company's assets reside</li>
                <li><i class="icon-ok color-green"></i> Reduce the number of vulnerability and exposure issues</li>
                <li><i class="icon-ok color-green"></i> Secure systems and infrastructure resources</li>
                <li><i class="icon-ok color-green"></i> Develop, deploy, enforce policies and standardized OS configuration</li>
                <li><i class="icon-ok color-green"></i> Documentation and train Staff on relevant areas of information security</li>
                <li><i class="icon-ok color-green"></i> Implement an incident-response program</li>
                <li><i class="icon-ok color-green"></i> Implement a threat-identification effort & self-audit mechanism</li>
            </ul><br />
        </div>


        <div class="span12">
            <p> The solutions offered are in the following areas </p>
            <ul class="unstyled">
                <li><i class="icon-ok color-green"></i>Servers </li>
                <li><i class="icon-ok color-green"></i>Identity Management Solutions </li>
                <li><i class="icon-ok color-green"></i>Unified Communications </li>
                <li><i class="icon-ok color-green"></i>Access Control, Permission and Password Management </li>
                <li><i class="icon-ok color-green"></i>Storage & Backup </li>
                <li><i class="icon-ok color-green"></i>Data recovery/protection & Data Leakage </li>
                <li><i class="icon-ok color-green"></i>Cloud </li>
                <li><i class="icon-ok color-green"></i>Mobile/Email/People securities </li>
                <li><i class="icon-ok color-green"></i>Inventorying and licensing </li>
                <li><i class="icon-ok color-green"></i>ICT assets management </li>
                <li><i class="icon-ok color-green"></i>Bandwidth Management & Optimization Solutions </li>
                <li><i class="icon-ok color-green"></i>Firewall, IDS/IPS </li>
                <li><i class="icon-ok color-green"></i>Web Security </li>
                <li><i class="icon-ok color-green"></i>Two Factor Authentication Solutions </li>
                <li><i class="icon-ok color-green"></i>Structure Cabling, Switching & Routing </li>
                <li><i class="icon-ok color-green"></i>Security Information & Event Monitoring (SIEM) </li>
                <li><i class="icon-ok color-green"></i>Countering viruses and spyware </li>
                <li><i class="icon-ok color-green"></i>Encryption </li>
            </ul><br />
        </div>

    </div><!--/row-fluid-->



</div><!--/container-->
<!--=== End Content Part ===-->


@stop