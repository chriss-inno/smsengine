@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Subscribe user to category
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'subscribe','role'=>'form')) }}
                 <div class="form-group">
                     
                       {{Form::label('fname','First Name')}}
                       {{Form::text('fname',null,array('class'=>'form-control','id'=>'fname'))}}
                   
                  </div>
                  <div class="form-group">
                     
                       {{Form::label('lname','Last Name')}}
                       {{Form::text('lname',null,array('class'=>'form-control','id'=>'lname'))}}
                   
                  </div>
                  <div class="form-group">
                       
                       {{Form::label('phone','Phone Number')}}
                       {{Form::text('phone',null,array('class'=>'form-control','id'=>'phone','required'=>'required'))}}
                       
                   
                  </div>
                  <div class="form-group">
                     
                       {{Form::label('email','Email')}}
                       {{Form::text('email',null,array('class'=>'form-control','id'=>'email'))}}
                   
                  </div>
                  <div class="form-group">
                   
                       {{Form::label('sex','Sex')}}
                       {{Form::select('sex',array('Male','Female'),null,array('class'=>'form-control','id'=>'sex'))}}
                      
                  </div>
                  <div class="form-group">
                   
                       {{Form::label('categoryid','Subscription Category')}}
                       {{Form::select('categoryid',Subscription::lists('category_name', 'id'),null,array('class'=>'form-control','id'=>'categoryid'))}}
                      
                  </div>
                  <div class="form-group">
                   
                       
                       {{Form::submit('Save',array('class'=>'btn btn-primary','id'=>'save'))}}
                      
                  </div>
                  

               {{ Form::close() }}

            </div>

       @stop