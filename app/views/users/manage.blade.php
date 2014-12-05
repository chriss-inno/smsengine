@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Employees
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2 col-sm-offset-10 ">
                       <a data-toggle="modal" href="{{url('user/create')}}" class="btn btn-primary"> Add Employee</a>
                    </div>
                </div>

                @include('users.list')

{{ HTML::script("assets/bootstrap.min.js") }}
{{ HTML::script("assets/jquery.min.js") }}

       @stop