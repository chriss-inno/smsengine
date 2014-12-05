
@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Update New Employee
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
                
               {{ Form::open(array('url' => 'users','role'=>'form','id'=>'frmdata')) }}

               
                   <div class="form-group">
                        <div id="output" class="col-sm-12"></div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-6"> 
                       {{Form::label('fname','First Name')}}
                       {{Form::text('fname',$user->fname,array('class'=>'form-control','id'=>'fname','required'=>'required'))}}
                       </div>
                       <div class="col-sm-6"> 

                       {{Form::label('lname','Last Name')}}
                       {{Form::text('lname',$user->fname,array('class'=>'form-control','id'=>'lname','required'=>'required'))}}
                   
                       </div>
                  </div>
                 
                  <div class="form-group">
                   <div class="row">
                       <div class="col-sm-6"> 
                         {{Form::label('phone','Phone Number')}}
                         {{Form::text('phone',$user->phone,array('class'=>'form-control','id'=>'phone'))}}
                       </div>
                       <div class="col-sm-6">
                         {{Form::label('email','Email')}}
                         {{Form::text('email',$user->email,array('class'=>'form-control','id'=>'email'))}}
                       </div>
                  </div>
                  
                  <div class="form-group">
                   
                       {{Form::label('sex','Sex')}}
                       {{Form::select('sex',array(null=>'--Select--','male'=>'Male','femail'=>'Female'),$user->sex,array('class'=>'form-control','id'=>'sex'))}}
                      
                  </div>
                  <div class="form-group">
                   
                       {{Form::label('role','System role')}}
                       {{Form::select('role',array(null=>'--Select Role--','admin'=>'Administrator','normal'=>'normal'),$user->role,array('class'=>'form-control','id'=>'sex'))}}
                      
                  </div>
                  <div class="form-group">
                     
                       {{Form::label('username','Username')}}
                       {{Form::text('username',$user->username,array('class'=>'form-control','id'=>'username','required'=>'required'))}}
                   
                  </div>
                  
                  <div class="form-group">
                     <div class="row">
                    <div class="col-sm-6"> 
                       {{Form::label('pass','Password')}}
                       {{Form::password('pass',array('class'=>'form-control','id'=>'pass','required'=>'required'))}}
                    </div>
                    <div class="col-sm-6"> 
                       {{Form::label('passc','Confirm Password')}}
                       {{Form::password('passc',array('class'=>'form-control','id'=>'passc','required'=>'required'))}}
                    </div>
                  </div>
                  
                  </div>
                  <div class="form-group">
                  {{Form::submit('Confirm Save',array('class'=>'btn btn-primary','id'=>'save'))}}

                  </div>

               {{ Form::close() }}


</div>
  @stop

           