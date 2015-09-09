@extends('layouts.dashboard')
@section('content')
    <!--=== Page Header ===-->
    <div class="page-header">
        <div class="page-title">
            <h3> {{ $pageTitle }}</h3>
            <span> </span>
        </div>
        <!-- Page Stats -->
        <ul class="page-stats">
            <li>
                <button type="button" class="pull-right btn btn-sm btn-info" data-toggle="modal" data-target="#modal-form">
                    + New
                </button>
            </li>

        </ul>
        <!-- /Page Stats -->
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
                                <th> Title </th>
                                <th> Description </th>
                                <th> Image </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $values)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td> {{ $values->title }} </td>
                                <td> {{ $values->description }} </td>
                                <td> {{ HTML::image($values->thumb, $values->title  ) }}</td>
                                <td>
                                    <a href="{{ URL::route('view-slider', ['id'=>$values->id ]) }}" class="btn" title="view FAQ" data-toggle="modal" data-target="#modal-pc"><i class="icon-eye-open"></i></a>
                                    <a href="{{ URL::route('edit-slider',['id'=>$values->id])  }}" class="btn"><i class="icon-edit-sign"></i></a>
                                    <a data-href="{{ URL::route('destroy-slider', ['id'=>$values->id ]) }}" class="btn" data-toggle="modal" data-target="#confirm-delete" href="" ><i class="icon-trash" style="color: orangered"></i></a>
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

    <!-- + New FAQ -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New FAQ </h4>
                </div>
                <div class="modal-body">
                    {{Form::open(['route'=>'store-slider', 'files'=>true])}}
                        @include('admin.slider._from')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop