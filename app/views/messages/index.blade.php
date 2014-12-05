@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              All Messages
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                 <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2 col-sm-offset-9 ">
                       <a data-toggle="modal" href="{{url('compose')}}" class="btn btn-primary"> Compose Message</a>
                    </div>
                </div>
                @include('messages.list')

           
       @stop