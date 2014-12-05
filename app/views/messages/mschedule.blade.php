@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              All Messages under Bloadcast Schedule
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                 <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2 col-sm-offset-8 ">
                       <a data-toggle="modal" href="{{url('msgschedule')}}" class="btn btn-primary"> Create Schedule</a>
                    </div>
                    <div class="col-sm-2 ">
                       <a data-toggle="modal" href="{{url('msgschedule')}}" class="btn btn-info"> Export to Ms Excell</a>
                    </div>
                </div>
                @include('messages.listmschedule')

           
       @stop