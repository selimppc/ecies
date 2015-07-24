<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">{{ $data->title }}</h4>
</div>

<div class="modal-body">

    <div class="row">
        <table class="table table-striped  table-bordered">
            <tr>
                <td><strong> Title </strong></td>
                <td>{{ $data->title }}</td>
            </tr>

            <tr>
                <td><strong> Short  Description </strong></td>
                <td>{{ $data->short_description }}</td>
            </tr>

            <tr>
                <td><strong> Long Description </strong></td>
                <td> {{ $data->long_description }} </td>
            </tr>
            <tr>
                <td><strong> image </strong></td>
                <td> {{ HTML::image($data->image, $data->title, ['width'=>'50px']  ) }} </td>
            </tr>

            <tr>
                <td><strong> Status </strong></td>
                <td>{{ $data->status }}</td>
            </tr>
        </table>
    </div>
</div>

<div class="modal-footer">
    <a href="" class="pull-right btn btn-default" style="margin-right: 5px">Close</a>
</div>