<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Engine  | Welcome</title>
    <!-- Core CSS - Include with every page -->
    {{ HTML::style("assets/plugins/bootstrap/bootstrap.css" ) }}
    {{ HTML::style("assets/font-awesome/css/font-awesome.css" ) }}
    {{ HTML::style("assets/plugins/pace/pace-theme-big-counter.css" ) }}
    {{ HTML::style("assets/css/style.css" ) }}
    {{ HTML::style("assets/css/main-style.css" ) }}

     <!-- Page-Level CSS -->
    {{ HTML::style("assets/plugins/morris/morris-0.4.3.min.css" ) }}

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('home')}}">
                    {{ HTML::image("assets/img/logo.png","SMS Engine logo") }}
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Mohamed Barut</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Welcome to SMS Engine, the intelligent  messaging portal every found...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Mohamed Barut</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>For real you will love this portal, full with real time monitoring...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">SMS Engine Admin</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>The complete functional system will be amaizing Just need some time...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted Message  sent fail
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('logout')}}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                {{ HTML::image("assets/img/user.jpg","User profile ")}}
                            </div>
                            <div class="user-info">
                                <div>Mohamed <strong>Baruti</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <li class="">
                        <a href="{{url('home')}}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Subscribers<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('subscribers/create')}}">Register</a>
                            </li>
                            <li>
                                <a href="{{url('subscribers')}}">Manage</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask fa-fw"></i> Employees<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('users/create')}}">Register</a>
                            </li>
                            <li>
                                <a href="{{url('users')}}">Manage</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Subscriptions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('subscriptions/create')}}">New Category</a>
                            </li>
                            <li>
                                <a href="{{url('subscriptions')}}">Mange Categories</a>
                            </li>
                            <li>
                                <a href="{{url('subscriptions/add')}}">Subscribe User</a>
                            </li>
                           
                        </ul>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Schedule Message<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('msgschedule')}}">Create Schedule</a>
                            </li>
                            <li>
                                <a href="{{url('mschedule')}}">Manage Schedule</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Messages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('compose')}}">Compose Message</a>
                            </li>
                            <li>
                                <a href="{{url('sent')}}">View sent Messages</a>
                            </li>
                            <li>
                                <a href="{{url('pending')}}">Pending Messages</a>
                            </li>
                             <li>
                                <a href="{{url('messages')}}">All Messages</a>
                            </li>
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i>Phone Book</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Import/Export<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Import Data</a>
                            </li>
                            <li>
                                <a href="#">Export Data</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('section-title')</h1>
                </div>
                <!--End Page Header -->
            </div>

            <!--Contents start make sure each item for contents is contained in div with class row-->
            @yield('contents')
            <!--Contents Ends -->

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
     {{ HTML::script("assets/plugins/jquery-1.10.2.js") }}
     {{ HTML::script("assets/plugins/bootstrap/bootstrap.min.js") }}
     {{ HTML::script("assets/plugins/metisMenu/jquery.metisMenu.js") }}
     {{ HTML::script("assets/plugins/pace/pace.js") }}
     {{ HTML::script("assets/scripts/siminta.js") }}

      <!-- Page-Level Plugin Scripts-->
    {{ HTML::script("assets/plugins/morris/raphael-2.1.0.min.js") }}
    {{ HTML::script("assets/plugins/morris/morris.js") }}
    {{ HTML::script("assets/scripts/morris-demo.js") }}


</body>

</html>
