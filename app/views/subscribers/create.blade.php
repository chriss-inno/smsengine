@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Register New Subscribers
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">

               {{ Form::open(array('url' => 'subscribers','role'=>'form')) }}
                  <div class="form-group">

                       {{Form::label('fname','First Name')}}
                       {{Form::text('fname',null,array('class'=>'form-control','id'=>'fname'))}}
                         <h4 class="text-danger"> {{$errors->first('fname')}}</h4>

                  </div>
                  <div class="form-group">

                       {{Form::label('lname','Last Name')}}
                       {{Form::text('lname',null,array('class'=>'form-control','id'=>'lname'))}}
                        <h4 class="text-danger"> {{$errors->first('lname')}}</h4>

                  </div>
                  <div class="form-group">

                       {{Form::label('phone','Phone Number')}}
                       {{Form::text('phone',null,array('class'=>'form-control','id'=>'phone','required'=>'required'))}}
                        <h4 class="text-danger"> {{$errors->first('phone')}}</h4>

                  </div>
                  <div class="form-group">

                       {{Form::label('email','Email')}}
                       {{Form::text('email',null,array('class'=>'form-control','id'=>'email'))}}
                        <h4 class="text-danger"> {{$errors->first('email')}}</h4>

                  </div>
                  <div class="form-group">

                       {{Form::label('sex','Sex')}}
                       {{Form::select('sex',array('Male','Female'),null,array('class'=>'form-control','id'=>'sex'))}}
                        <h4 class="text-danger"> {{$errors->first('sex')}}</h4>

                  </div>
                  <div class="form-group">


                       {{Form::submit('Save',array('class'=>'btn btn-primary','id'=>'save'))}}

                  </div>


               {{ Form::close() }}

            </div>

       @stop