
    <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List of Employees
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            @if(count(User::all()) == 0)
    <h3>There are no Registered Employee</h3>
    @else
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
    <?php $c=1;?>
    @foreach(User::all() as $user)
    <tr>
        <td>{{$c++}}</td>
        <td>{{$user->fname." ".$user->lname}}</td>
        <td>{{$user->username}}</td>
        <td class="center">{{$user->created_at}}</td>
        <td class="center">{{$user->role}}</td>
        <td class="center">
            <span class="label-success label label-default">{{$user->status}}</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="userview/{{$user->id}}" ole="button"  >
                
                View
            </a>
            <a class="btn btn-info" href="useredit/{{$user->id}}" >
                
                Edit
            </a>
            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#myModalemp">
               
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
    
    