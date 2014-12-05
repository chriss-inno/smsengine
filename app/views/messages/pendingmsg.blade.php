@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              All Pending Messages
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                @include('messages.listpending')

           
       @stop