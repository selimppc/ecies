{{ HTML::script('admin/scripts/ckeditor.js')}}
{{--<div class='form-group'>
    {{ Form::label('code', 'Product Code') }}
    {{ Form::text('code', Input::old('code'),['class'=>'form-control', 'style'=>'text-transform: uppercase;', 'required']) }}
</div>--}}

<div class='form-group'>
    {{ Form::label('type', 'Type') }}
    {{ Form::select('type', $post_type, Input::old('type'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'),['class'=>'form-control', 'required']) }}
</div>

<div class='form-group'>
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', Input::old('description'),['onkeyup'=>"javascript:this.value=this.value.replace(/[<,>]/g,'');", 'size' => '30x5', 'class'=>'form-control']) }}
</div>

<div class='form-group'>
    {{ Form::label('image', 'Image') }}
    {{ Form::file('image',['class'=>'form-control']) }}
</div>

<textarea name="editor1" id="editor1" rows="5" cols="200"> </textarea>
<script>
    $(function() {
        CKEDITOR.replace('editor1');
    });
</script>
<div class='form-group'>
    {{ Form::label('status', 'status') }}
    {{ Form::select('status',['active'=>'Active'], Input::old('status'),['class'=>'form-control']) }}
</div>


{{ Form::submit('Save', array('class'=>'pull-right btn btn-info')) }}
<a href="" class="pull-right btn btn-default" style="margin-right: 5px">Close</a>

<p>&nbsp;</p>


