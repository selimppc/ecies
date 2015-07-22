@extends('layouts.dashboard')
@section('content')
<div>
    <a href="{{URL::route('index-post', ['type'=>$model->type])}}" class="btn pull-right" style="color: green; font-weight: bold"> << Back to Post</a>
</div>

<div class="row">
    <h4 class="modal-title">Update: {{ $model->title }}</h4>
</div>


<div class="modal-body" >

    {{Form::model($model, ['route'=> ['store-post', $model->id], 'role' => 'form', 'files' => true,])}}
        @include('admin.post._from')
    {{ Form::close() }}

</div>

<div>
    <a href="{{URL::route('index-post', ['type'=>$model->type])}}" class="btn" style="color: green; font-weight: bold"> << Back to Post</a>
</div>

<p>&nbsp;</p>

@stop