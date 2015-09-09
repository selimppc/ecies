@extends('layouts.dashboard')
@section('content')
<div>
    <a href="{{URL::route('index-faq')}}" class="btn pull-right" style="color: green; font-weight: bold"> << Back to Help</a>
</div>

<div class="row">
    <h4 class="modal-title">Update: {{ $model->title }}</h4>
</div>


<div class="modal-body" >

    {{Form::model($model, ['route'=> ['store-faq', $model->id], 'role' => 'form', 'files' => true,])}}
        {{Form::hidden('id', Input::old('id') )}}
        @include('admin.faq._from')
    {{ Form::close() }}

</div>

<div>
    <a href="{{URL::route('index-faq')}}" class="btn" style="color: green; font-weight: bold"> << Back to Help </a>
</div>

<p>&nbsp;</p>

@stop