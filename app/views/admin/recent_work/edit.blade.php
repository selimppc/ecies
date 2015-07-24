@extends('layouts.dashboard')
@section('content')

<div class="modal-header">
    <h4> Update:  <b>{{$model->title}}</b> </h4>
    <a href="{{URL::route('recent-work')}}" class="btn pull-right" style="color: green; font-weight: bold"> << Back to Recent Work</a>

</div>


<div class="modal-body" >

    {{Form::model($model, ['route'=> ['store-recent-work', $model->id], 'role' => 'form', 'files' => true,])}}
        {{Form::hidden('id', Input::old('code') )}}
        @include('admin.recent_work._from')
    {{ Form::close() }}

</div>

<div>
    <a href="{{URL::route('recent-work')}}" class="btn pull-left" style="color: green; font-weight: bold"> << Back to Recent Work</a>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

@stop
