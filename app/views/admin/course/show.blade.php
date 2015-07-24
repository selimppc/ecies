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
                <td><strong> Code </strong></td>
                <td>{{ $data->code }}</td>
            </tr>

            <tr>
                <td><strong> Length </strong></td>
                <td> {{ $data->length }} </td>
            </tr>
            <tr>
                <td><strong> Information </strong></td>
                <td> {{ $data->information }} </td>
            </tr>
            <tr>
                <td><strong> Information Link </strong></td>
                <td> {{ $data->information_link }} </td>
            </tr>
            <tr>
                <td><strong> Contact </strong></td>
                <td> {{ $data->contact }} </td>
            </tr>
            <tr>
                <td><strong> Contact Link </strong></td>
                <td> {{ $data->contact_link }} </td>
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