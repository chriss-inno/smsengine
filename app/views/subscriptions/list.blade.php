
    <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List of Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
  @if(count(Subscription::all()) == 0)
    <h3>There are no Category created</h3>
    @else
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>SN</th>
        <th>Category Name</th>
        <th>Introductory text</th>
        <th>Date created</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php $c=1;?>
    @foreach(Subscription::all() as $cat)
    <tr>
        <td>{{$c++}}</td>
        <td>{{$cat->category_name}}</td>
        <td>{{$cat->category_descriptions   }}</td>
        <td class="center">{{$cat->created_at}}</td>
        
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
    @endif

                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
    
    