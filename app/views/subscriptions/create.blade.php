@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Create  New Message Category<small>subscriber will subscribe to this category</small>
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'subscriptions','role'=>'form')) }}
                  <div class="form-group">
                     
                       {{Form::label('category_name','Category Name')}}
                       {{Form::text('category_name',null,array('class'=>'form-control','id'=>'category_name','required'=>'required'))}}
                   
                  </div>
                  <div class="form-group">
                     
                       {{Form::label('category_descriptions','Category introductory text (These text will be received by subscriber)')}}
                       {{Form::textarea('category_descriptions',null,array('class'=>'form-control','id'=>'category_descriptions','required'=>'required'))}}
                   
                  </div>
                 
                  <div class="form-group">
                   
                       
                       {{Form::submit('Save',array('class'=>'btn btn-primary','id'=>'save'))}}
                      
                  </div>

               {{ Form::close() }}

            </div>

       @stop