@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              All sent  Messages
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                 
                @include('messages.listsentmessages')

           
       @stop