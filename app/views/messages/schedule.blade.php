@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Schedule Message for broadcast
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
            
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'msgschedule','role'=>'form')) }}
                  <div class="form-group">
                     
                       {{Form::label('mtitle','Message Title')}}
                       {{Form::text('mtitle',null,array('class'=>'form-control','id'=>'mtitle','placeholder'=>'Enter Message title','required'=>'required'))}}
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
                           <h4 class="text-danger"> {{$errors->first('categoryid')}}</h4>
                           </div>
                           <div class="col-sm-6"> 
                           {{ Form::checkbox('senttocategory', 1) }} Send to category 
                           </div>
                       
                      </div>
                  </div>
                   <div class="form-group">
                      <h3 class="text-info">Schedule parameters</h3>
                  </div>
                  <div class="row">
                      <div class="form-group">
                          <div class="col-sm-4"> 
                          {{Form::label('startdate','Start Date')}}
                          {{Form::text('startdate',null,array('class'=>'form-control sdate','id'=>'startdate','placeholder'=>'Start Date (Year-Month-Day Hour:Minitues)'))}}
                          <h4 class="text-danger"> {{$errors->first('startdate')}}</h4>
                          </div>
                           <div class="col-sm-4"> 
                          {{Form::label('enddate','Finish Date')}}
                          {{Form::text('enddate',null,array('class'=>'form-control edate','id'=>'enddate','placeholder'=>'End date (Year-Month-Day Hour:Minitues)'))}}
                          <h4 class="text-danger"> {{$errors->first('enddate')}}</h4>
                          </div>
                           <div class="col-sm-4"> 
                          {{Form::label('repeat','Repeat?')}}
                          {{Form::select('repeat',array('0'=>'Select','1'=>'Yes','2'=>'No'),null,array('class'=>'form-control','id'=>'startdate'))}}
                          <h4 class="text-danger"> {{$errors->first('categoryid')}}</h4>
                          </div>
                      </div>
                  </div>
                  <div class="row" style="margin-top:10px; margin-bottom:10px;">
                      <div class="form-group">
                          
                          <div class="col-sm-12"> 
                            <table class="table table-bordered"> 
                            <thead><th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                            </thead>
                                <tbody>
                                  <td>{{ Form::checkbox('mon', 1) }}</td>
                                  <td>{{ Form::checkbox('tue', 1) }}</td>
                                  <td>{{ Form::checkbox('wed', 1) }}</td>
                                  <td>{{ Form::checkbox('thu', 1) }}</td>
                                  <td>{{ Form::checkbox('fri', 1) }}</td>
                                  <td>{{ Form::checkbox('sat', 1) }}</td>
                                  <td>{{ Form::checkbox('sun', 1) }}</td>

                                </tbody>
                            </table>
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