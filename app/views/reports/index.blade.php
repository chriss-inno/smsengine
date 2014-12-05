@extends("layout.master")

@section('breadcrumb')
       <li><a href="{{url("home")}}">Home</a></li>
       <li><a href="{{url("subscribers")}}">General Reports</a></li>
@stop
@section('contents')

     <div id="listuser">
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Manage Subscriptions Categories</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-user"></i>New Category</a>
            
        </div>
    </div>
    <div class="box-content">
   

    </div>
    </div>
    </div>
    <!--/span-->

    </div>
     </div>
    
   @stop