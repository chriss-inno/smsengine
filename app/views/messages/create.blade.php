@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Compose Message
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'sendmsg','role'=>'form')) }}
                  <div class="form-group">
                     
                       {{Form::label('mtitle','Message Title')}}
                       {{Form::text('mtitle',null,array('class'=>'form-control','id'=>'fname','placeholder'=>'Enter Message title','required'=>'required'))}}
                   <h4 class="text-danger"> {{$errors->first('mtitle')}}</h4>
                  </div>
                <div class="form-group">
                     
                       {{Form::label('mtitle','Subscription Category')}}
                       {{Form::select('categoryid',Subscription::lists('category_name', 'id'),null,array('class'=>'form-control','id'=>'categoryid'))}}
                   <h4 class="text-danger"> {{$errors->first('categoryid')}}</h4>
                  </div>
                  <div class="row">
                      <div class="form-group">
                          <div class="col-sm-2"> 
                           {{Form::label('mtitle','Send To')}}
                    
                           </div>
                           <div class="col-sm-3"> 
                           {{Form::text('phone',null,array('class'=>'form-control','id'=>'phone','placeholder'=>'Enter Phone Number'))}}
                           </div>
                           <div class="col-sm-6"> 
                           {{ Form::checkbox('senttocategory', 1) }} Send to category 
                           </div>
                       
                      </div>
                  </div>
                  <div class="form-group">
                       
                       {{Form::label('msg','Message Text')}}
                       {{Form::textarea('msg',null,array('class'=>'form-control','id'=>'msg','required'=>'required'))}}
                       
                        <h4 class="text-danger"> {{$errors->first('msg')}}</h4>
                  </div>
                 
                  <div class="form-group">
                   
                       
                       {{Form::submit('Send',array('class'=>'btn btn-primary','id'=>'Send'))}}
                      
                  </div>
                  

               {{ Form::close() }}

            </div>

       @stop