@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Subscribers
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                 <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2 col-sm-offset-10 ">
                       <a data-toggle="modal" href="{{url('subscribers/create')}}" class="btn btn-primary"> Add New</a>
                    </div>
                </div>
                @include('subscribers.list')

           

       @stop