<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">{{ $data->full_name }}</h4>
</div>

<div class="modal-body">

    <div class="row">
        <table class="table table-striped  table-bordered">
            <tr>
                <td><strong> Full Name </strong></td>
                <td>{{ $data->full_name }}</td>
            </tr>

            <tr>
                <td><strong> Personal Details </strong></td>
                <td>{{ $data->personal_detail }}</td>
            </tr>

            <tr>
                <td><strong> Company </strong></td>
                <td> {{ $data->company }} </td>
            </tr>

            <tr>
                <td><strong> Company Detail </strong></td>
                <td>{{ $data->company_detail }}</td>
            </tr>

            <tr>
                <td><strong> Job Title </strong></td>
                <td>{{ $data->job_title }}</td>
            </tr>

            <tr>
                <td><strong> City </strong></td>
                <td>{{ $data->city }}</td>
            </tr>

            <tr>
                <td><strong> Country </strong></td>
                <td>{{ $data->country }}</td>
            </tr>

            <tr>
                <td><strong> Address </strong></td>
                <td>{{ $data->address }}</td>
            </tr>

            <tr>
                <td><strong> Mobile Number </strong></td>
                <td>{{ $data->mobile }}</td>
            </tr>

            <tr>
                <td><strong> Phone Number </strong></td>
                <td>{{ $data->phone }}</td>
            </tr>

            <tr>
                <td><strong> Industry </strong></td>
                <td>{{ $data->industry }}</td>
            </tr>

            <tr>
                <td><strong> Course </strong></td>
                <td>{{ $data->course }}</td>
            </tr>

            <tr>
                <td><strong> Course Detail </strong></td>
                <td>{{ $data->course_detail }}</td>
            </tr>

            <tr>
                <td><strong> Subject </strong></td>
                <td>{{ $data->subject }}</td>
            </tr>

            <tr>
                <td><strong> Note </strong></td>
                <td>{{ $data->note }}</td>
            </tr>

            <tr>
                <td><strong> Payment Detail </strong></td>
                <td>{{ $data->payment_detail }}</td>
            </tr>

            <tr>
                <td><strong> Stay Detail </strong></td>
                <td>{{ $data->stay_detail }}</td>
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