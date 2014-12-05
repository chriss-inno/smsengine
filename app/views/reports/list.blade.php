
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Username</th>
        <th>Date registered</th>
        <th>Role</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subscriptions as $subscription)
    <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td class="center"></td>
        <td class="center"></td>
        <td class="center">
            <span class="label-success label label-default"></span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    
    