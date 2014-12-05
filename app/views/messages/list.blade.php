
    <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List of Messages
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                @if(count(Message::all()) == 0)
                                    <h3 class="text-danger">There are no message sent,received or pending </h3>
                                    @else
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>SN</th>
        <th>Title</th>
        <th>Descriptions</th>
        <th>Date Created</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $c=1;?>
    @foreach(Message::all() as $message)
    <tr>
        <td>{{$c++}}</td>
        <td>{{$message->title}}</td>
        <td>{{$message->descriptions}}</td>
        <td class="center">{{$message->status}}</td>
        <td class="center">{{$message->created_at}}</td>
       
        <td class="center">
            <span class="label-success label label-default">{{$message->status}}</span>
        </td>
        <td class="center">
           
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
    @endif
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    
    