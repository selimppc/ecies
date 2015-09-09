@extends('layouts.dashboard')
@section('content')
<div>
    <a href="{{URL::route('index-slider')}}" class="btn pull-right" style="color: green; font-weight: bold"> << Back to Slider</a>
</div>

<div class="row">
    <h4 class="modal-title">Update: {{ $model->title }}</h4>
</div>


<div class="modal-body" >

    {{Form::model($model, ['route'=> ['store-slider', $model->id], 'role' => 'form', 'files' => true,])}}
        {{Form::hidden('id', Input::old('id') )}}
        @include('admin.slider._from')
    {{ Form::close() }}

</div>

<div>
    <a href="{{URL::route('index-slider')}}" class="btn" style="color: green; font-weight: bold"> << Back to Slider </a>
</div>

<p>&nbsp;</p>

@stop