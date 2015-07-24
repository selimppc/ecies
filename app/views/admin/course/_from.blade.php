{{--<div class='form-group'>
    {{ Form::label('code', 'Product Code') }}
    {{ Form::text('code', Input::old('code'),['class'=>'form-control', 'style'=>'text-transform: uppercase;', 'required']) }}
</div>--}}

<div class='form-group'>
    {{ Form::label('type', 'Type') }}
    {{ Form::select('type', $course_type, Input::old('type'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('code', 'Code') }}
    {{ Form::text('code', Input::old('code'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('length', 'Length') }}
    {{ Form::text('length', Input::old('length'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('attend', 'Attend') }}
    {{ Form::text('attend', Input::old('attend'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('information', 'Information') }}
    {{ Form::text('information', Input::old('information'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('information_link', 'Information Link') }}
    {{ Form::text('information_link', Input::old('information_link'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('contact', 'Contact') }}
    {{ Form::text('contact', Input::old('contact'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('contact_link', 'Contact Link') }}
    {{ Form::text('contact_link', Input::old('contact_link'),['class'=>'form-control', 'required']) }}
</div>


<div class='form-group'>
    {{ Form::label('status', 'status') }}
    {{ Form::select('status',['active'=>'Active', 'inactive'=>'Inactive'], Input::old('status'),['class'=>'form-control']) }}
</div>


{{ Form::submit('Save', array('class'=>'pull-right btn btn-info')) }}
<a href="" class="pull-right btn btn-default" style="margin-right: 5px">Close</a>

<p>&nbsp;</p>


