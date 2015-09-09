@extends('layouts.master')
@section('content')

<style>
    tbody
    {
        counter-reset: Serial;
    }

    tr td:first-child:before
    {
        counter-increment: Serial;
        content: counter(Serial);
    }
</style>

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Course </h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Course</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">

                {{--<div class="span12">
                    {{ HTML::image( '/images/communication_it/answer_phone.png', 'web design' ) }}
                </div>--}}

                <div class="span12">
                    <div class="row-fluid">
                        <div class="span12">
                            <table class="table">
                                <thead>
                                <tr class="warning">
                                    <th> NO </th>
                                    <th> TITLE </th>
                                    <th> CODE </th>
                                    <th> LENGTH </th>
                                    <th> ATTEND </th>
                                    <th> INFORMATION </th>
                                    <th> CONTACT </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $values)
                                <tr class="success">
                                    <td>  </td>
                                    <td> {{$values->title}} </td>
                                    <td> {{$values->code}} </td>
                                    <td> {{$values->length}} </td>
                                    <td> {{$values->attend}} </td>
                                    <td> <a href="{{ URL::route('registrations') }}" style="color: blue">
                                            {{$values->information }}
                                        </a>
                                    </td>
                                    <td> <a href="{{ URL::route('contact') }}" style="color: blue">
                                            {{$values->contact}}
                                         </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div><!--/row-fluid-->
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop