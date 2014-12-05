@extends("layout.master")

            <!--Title section -->
            @section('section-title')
              Employees
            @stop
            <!--End Title section  -->
             <!--Dashboard Section -->
              @section('contents')
            
                <div class="row" style="margin-bottom:10px;">
                    <div class="col-sm-2">
             
    <a href="{{url('users/create')}}" role="button" class="btn btn-large btn-primary">Add new Employee</a>

                    </div>
                </div>

                @include('users.list')



    <!-- Button HTML (to Trigger Modal) -->



   


    <!-- Modal HTML -->

    <div id="myModal" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">


                <!-- Content will be loaded here from "remote.php" file -->

            </div>

        </div>

    </div>

<div id="myModaledit" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">


                <!-- Content will be loaded here from "remote.php" file -->

            </div>

        </div>

    </div>


<div id="myModalview" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">


                <!-- Content will be loaded here from "remote.php" file -->

            </div>

        </div>

    </div>

    <!-- Modal HTML -->

    <div id="myModalemp" class="modal fade">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    <h4 class="modal-title">Remove Employee</h4>

                </div>

                <div class="modal-body">



                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="button" class="btn btn-primary">Save changes</button>

                </div>

            </div>

        </div>

    </div>



       @stop