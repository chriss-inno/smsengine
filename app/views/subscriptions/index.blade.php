@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Message Categories
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2 col-sm-offset-10 ">
                       <a data-toggle="modal" href="{{url('subscriptions/create')}}" class="btn btn-primary"> Add Category</a>
                    </div>
                </div>

                @include('subscriptions.list')

{{ HTML::script("assets/bootstrap.min.js") }}
{{ HTML::script("assets/jquery.min.js") }}

       @stop