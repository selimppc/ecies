<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <h4> Update:  <b>{{$model->title}}</b> </h4>
</div>


<div class="modal-body" >

    {{Form::model($model, ['route'=> ['store-course', $model->id], 'role' => 'form', 'files' => true,])}}
        {{Form::hidden('id', Input::old('code') )}}
        @include('admin.course._from')
    {{ Form::close() }}

</div>

<p>&nbsp;</p>

