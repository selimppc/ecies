{{--<div class='form-group'>
    {{ Form::label('code', 'Product Code') }}
    {{ Form::text('code', Input::old('code'),['class'=>'form-control', 'style'=>'text-transform: uppercase;', 'required']) }}
</div>--}}

<div class='form-group'>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('short_description', 'Short Description') }}
    {{ Form::textarea('short_description', Input::old('short_description'),[ 'class'=>'form-control wysiwyg', 'onkeyup'=>"javascript:this.value=this.value.replace(/[<,>]/g,'');"]) }}
</div>

<div class='form-group'>
    {{ Form::label('long_description', 'Long Description') }}
    {{ Form::textarea('long_description', Input::old('long_description'),[ 'class'=>'form-control wysiwyg', 'onkeyup'=>"javascript:this.value=this.value.replace(/[<,>]/g,'');"]) }}
</div>

<div class='form-group'>
    {{ Form::label('image', 'Image') }}
    @if(isset($model->image)){{ HTML::image($model->image, $model->title, ['width'=>'50px']  ) }}@endif
    {{ Form::file('image',['class'=>'form-control', 'data-style'=>'fileinput']) }}
</div>

<div class='form-group'>
    {{ Form::label('status', 'status') }}
    {{ Form::select('status',['active'=>'Active', 'inactive'=>'Inactive'], Input::old('status'),['class'=>'form-control']) }}
</div>


{{ Form::submit('Save', array('class'=>'pull-right btn btn-info')) }}
<a href="" class="pull-right btn btn-default" style="margin-right: 5px">Close</a>

<p>&nbsp;</p>


