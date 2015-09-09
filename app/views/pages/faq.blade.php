@extends('layouts.master')

@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-30">
    <div class="container">
        <h1 class="color-green pull-left">Frequently Asked Questions</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Pages</a> <span class="divider">/</span></li>
            <li class="active">FAQs</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid">
        <div class="span9">
            <!-- Other Questions -->
            <div class="headline"><h3>General Questions</h3></div>
            <!-- Accardion -->
            <div class="accordion acc-home margin-bottom-40" id="accordion2">
                @foreach($data as $values)
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$values->id}}">
                           {{ $values->title }}
                        </a>
                    </div>
                    <div id="collapse{{$values->id}}" class="accordion-body in collapse" style="height: auto;">
                        <div class="accordion-inner">
                            <p>{{ $values->description }}</p>
                        </div>
                    </div>



                </div><!--/accordion-group-->
                @endforeach

            </div><!--/accardion-->


        </div><!--/span8-->

        <div class="span3">

            <!-- Business Hours -->
            <div class="headline"><h3>Business Hours</h3></div>
            <ul class="unstyled">
                <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
                <li><strong>Saturday:</strong> Closed</li>
                <li><strong>Sunday:</strong> Closed</li>
            </ul>

            <!-- Why we are? -->
            <div class="headline"><h3>Why we are?</h3></div>
            <p>Ecies is private limited company, it is based in London United Kingdom. It provides Training and Consultancy services for not-for-profit organizations, small and medium-sized enterprises, Started it operations in 2011.</p>

        </div><!--/span4-->
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->


@stop