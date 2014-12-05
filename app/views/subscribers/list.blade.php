
  <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List of Subscribers
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                @if(count(Subscriber::all()) == 0)
                                    <h3>There are no Registered Subscriber</h3>
                                    @else
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $c=1;?>
                                        @foreach(Subscriber::all() as $us)
                                        <tr class="odd gradeX">
                                            <td> {{$c++}}</td>
                                            <td>{{$us->fname." ".$us->sname}}</td>
                                            <td>{{$us->phone}}</td>
                                            <td><span class="label-success label label-default">{{$us->status}}</span></td>
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