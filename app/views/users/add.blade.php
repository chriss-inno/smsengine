@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Register New Employee
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            <div class="row">
                
               {{ Form::open(array('url' => 'useradd','role'=>'form','id'=>'frmdata')) }}
                  <div class="form-group">
                        <div id="output" class="col-sm-12">
                          @if(Session::has('error'))
                         {{ Session::get('error') }}
                          @endif
                        </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                       <div class="col-sm-6"> 
                       {{Form::label('fname','First Name')}}
                       {{Form::text('fname',null,array('class'=>'form-control','id'=>'fname','required'=>'required'))}}
                       </div>
                       <div class="col-sm-6"> 

                       {{Form::label('lname','Last Name')}}
                       {{Form::text('lname',null,array('class'=>'form-control','id'=>'lname','required'=>'required'))}}
                   
                       </div>
                  </div>
                 
                  <div class="form-group">
                   <div class="row">
                       <div class="col-sm-6"> 
                         {{Form::label('phone','Phone Number')}}
                         {{Form::text('phone',null,array('class'=>'form-control','id'=>'phone'))}}
                       </div>
                       <div class="col-sm-6">
                         {{Form::label('email','Email')}}
                         {{Form::text('email',null,array('class'=>'form-control','id'=>'email'))}}
                       </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="row">
                    <div class="col-sm-4"> 
                       {{Form::label('sex','Sex')}}
                       {{Form::select('sex',array(null=>'--Select--','male'=>'Male','femail'=>'Female'),null,array('class'=>'form-control','id'=>'sex'))}}
                      </div>
                      </div>
                  </div>
                  <div class="form-group">
                   
                       {{Form::label('role','System role')}}
                       {{Form::select('role',array(null=>'--Select Role--','admin'=>'Administrator','normal'=>'normal'),null,array('class'=>'form-control','id'=>'sex'))}}
                      
                  </div>
                  <div class="form-group">
                     
                       {{Form::label('username','Username')}}
                       {{Form::text('username',null,array('class'=>'form-control','id'=>'username','required'=>'required'))}}
                   
                  </div>
                  
                  <div class="form-group">
                     <div class="row">
                    <div class="col-sm-6"> 
                       {{Form::label('pass','Password')}}
                       {{Form::password('pass',array('class'=>'form-control','id'=>'pass','required'=>'required'))}}
                    </div>
                    <div class="col-sm-6"> 
                       {{Form::label('passc','Confirm Password')}}
                       {{Form::password('passc',array('class'=>'form-control','id'=>'pass','required'=>'required'))}}
                    </div>
                  </div>
                  <div class="form-group" style="margin-top:10px;">
                  {{Form::submit('Save',array('class'=>'btn btn-primary','id'=>'save'))}}
                  </div>
                  
                  </div>


               {{ Form::close() }}
    </div>
<script>
    //callback handler for form submit
$("#frmdata").submit(function(e)
{
    $("#output").html("<h4><i class='fa fa-spin fa-spinner text-info'></i><span>please wait...</span><h4>");
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("{{url('users')}}");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR)
        {
            //data: return data from server
            $("#output").html(data);
            setTimeout(function() {
                $("#myModal").modal("hide");
            }, 3000);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            //if fails  
          
        }
    });
    e.preventDefault(); //STOP default action
    e.unbind(); //unbind. to stop multiple form submit.
});
 
$("#ajaxform").submit(); //Submit  the FORM
</script>

           
       @stop