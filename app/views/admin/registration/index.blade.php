@extends('layouts.dashboard')
@section('content')
    <style>
        table tbody{
            counter-reset: Serial;
        }
        table tbody tr td:first-child:before{
            counter-increment: Serial;
            content: counter(Serial);
        }
    </style>
    <!--=== Page Header ===-->
    <div class="page-header">
        <div class="page-title">
            <h3> {{ $pageTitle }}</h3>
            <span> </span>
        </div>

    </div>
    <!-- /Page Header -->

    <!--=== Page Content ===-->
    <!--=== Normal ===-->
    <div class="row">
        <div class="col-md-12">
            <div class="widget box">
                <div class="widget-header">
                    <h4><i class="icon-reorder"></i> {{ $pageTitle }}</h4>
                    <div class="toolbar no-padding">
                        <div class="btn-group">
                            <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="widget-content">
                    <table class="table table-striped table-bordered table-hover table-checkable datatable">
                        <thead>
                            <tr>
                                <th class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </th>
                                <th> Full Name </th>
                                <th> Company </th>
                                <th> Job Title </th>
                                <th> City </th>
                                <th> Country </th>
                                <th> Email </th>
                                <th> Mobile </th>
                                <th> Course </th>
                                <th> Subject </th>
                                <th> note </th>
                                <th> status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $values)
                            <tr>
                                <td class="checkbox-column">
                                    {{--<input type="checkbox" class="uniform">--}}
                                </td>
                                <td> {{ $values->full_name }} </td>
                                <td> {{ $values->company }} </td>
                                <td> {{ $values->job_title }} </td>
                                <td> {{ $values->city }} </td>
                                <td> {{ $values->country }} </td>
                                <td> {{ $values->email }} </td>
                                <td> {{ $values->mobile }} </td>
                                <td> {{ $values->course }} </td>
                                <td> {{ $values->subject }} </td>
                                <td> {{ $values->note }} </td>
                                <td> {{ $values->status }} </td>
                                <td>
                                    <a href="{{ URL::route('view-registration', ['id'=>$values->id ]) }}" class="btn" data-toggle="modal" data-target="#modal-pc"><i class="icon-eye-open"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Normal -->


@stop