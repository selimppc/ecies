@extends('layouts.dashboard')
@section('content')
    <div class="module">
        <div class="module-head">
            <div class="row">
                <span style="padding: 20px; font-size: 18px; font-weight: bold;">
                    ICT Support
                </span>

                <button type="button" class="pull-right btn btn-sm btn-info" data-toggle="modal" data-target="#modal-form">
                    + New ICT Support
                </button>
            </div>

        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> title </th>
                        <th> description </th>
                        <th> image </th>
                        <th> status </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $values)
                    <tr>
                        <td> {{ $values->id }} </td>
                        <td> {{ $values->title }} </td>
                        <td> {{ $values->description }} </td>
                        <td> {{ $values->image }} </td>
                        <td> X </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!--/.module-->


    <!-- + New ICT Support -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New ICT Support </h4>
                </div>
                <div class="modal-body">
                    {{Form::open(['route'=>'solution/ict-support', 'files'=>true])}}
                        @include('admin.post._from')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@stop