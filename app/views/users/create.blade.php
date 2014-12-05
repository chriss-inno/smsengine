@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Register New Employee
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'users','role'=>'form','id'=>'frmdata')) }}

                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-6"> 
                       {{Form::label('fname','First Name')}}
                       {{Form::text('fname',Input::old('fname'),array('class'=>'form-control','id'=>'fname','required'=>'required'))}}
                       <h4 class="text-danger"> {{$errors->first('fname')}}</h4>
                       </div>
                       <div class="col-sm-6"> 

                       {{Form::label('lname','Last Name')}}
                       {{Form::text('lname',Input::old('lname'),array('class'=>'form-control','id'=>'lname','required'=>'required'))}}
                       <h4 class="text-danger"> {{$errors->first('lname')}}</h4>
                   
                       </div>
                  </div>
                 
                  <div class="form-group">
                   <div class="row">
                       <div class="col-sm-6"> 
                         {{Form::label('phone','Phone Number')}}
                         {{Form::text('phone',Input::old('phone'),array('class'=>'form-control','id'=>'phone'))}}
                         <h4 class="text-danger"> {{$errors->first('phone')}}</h4>
                       </div>
                       <div class="col-sm-6">
                         {{Form::label('email','Email')}}
                         {{Form::text('email',Input::old('email'),array('class'=>'form-control','id'=>'email'))}}
                         <h4 class="text-danger"> {{$errors->first('email')}}</h4>
                       </div>
                  </div>
                  
                  <div class="form-group">
                   <div class="row">
                       <div class="col-sm-4"> 
                       {{Form::label('sex','Sex')}}
                       {{Form::select('sex',array(null=>'--Select--','male'=>'Male','femail'=>'Female'),Input::old('sex'),array('class'=>'form-control','id'=>'sex'))}}
                       <h4 class="text-danger"> {{$errors->first('sex')}}</h4>
                       </div>

                    </div>
                  </div>
                  <div class="form-group">
                   
                       {{Form::label('role','System role')}}
                       {{Form::select('role',array(null=>'--Select Role--','admin'=>'Administrator','normal'=>'normal'),Input::old('role'),array('class'=>'form-control','id'=>'sex'))}}
                      <h4 class="text-danger"> {{$errors->first('role')}}</h4>
                 
                  <div class="form-group">
                     <div class="row">
                    <div class="col-sm-6"> 
                        {{Form::label('username','Username')}}
                       {{Form::text('username',Input::old('username'),array('class'=>'form-control','id'=>'username','required'=>'required'))}}
                       <h4 class="text-danger"> {{$errors->first('username')}}</h4>
                    </div>
                    <div class="col-sm-6"> 
                       {{Form::label('password','Password')}}
                       {{Form::password('password',array('class'=>'form-control','id'=>'pass','required'=>'required'))}}
                       <h4 class="text-danger"> {{$errors->first('password')}}</h4>
                    </div>
                  </div>
             <div class="form-group" style="margin-top:10px;">

                    {{Form::submit('Confirm Save',array('class'=>'btn btn-primary','id'=>'save'))}}

                </div>

               {{ Form::token() . Form::close() }}



</div>
  @stop
