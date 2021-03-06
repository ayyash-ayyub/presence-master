<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>{{ config('app.name', 'Presence SEAMOLEC') }}</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

       	<link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">

       	<!-- DataTables -->
        <link href="{{asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('/assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/bootstrap-material-design.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('/assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
        <script src="{{asset('/assets/js/jquery.min.js')}}"></script>

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Urora-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('images/logoseamolec.png') }}" alt="" height="50" class="logo-small">
                            <img src="{{ asset('images/logoseamolec.png') }}" alt="" height="75" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">
                        
                        <ul class="list-inline float-right mb-0 ">
                            <!-- language-->

                            <!-- <li class="list-inline-item dropdown notification-list">
                                <div class="list-inline-item hide-phone app-search">
                                    <form role="search" class="">
                                        <div class="form-group pt-1"> 
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </div>
                                    </form>
                                </div>   
                            </li>
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-email noti-icon"></i>
                                    <span class="badge badge-danger heartbit  noti-icon-badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item
                                    <div class="dropdown-item noti-title align-self-center">
                                        <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                    </div>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                        <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <i class="ti-bell noti-icon"></i>
                                    <span class="badge badge-success a-animate-blink noti-icon-badge">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item
                                    <div class="dropdown-item noti-title">
                                        <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                    </div>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li> -->
                            <li class="list-inline-item dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                       <!--  <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>                                                                    
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link" id="mobileToggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>    
                        </ul> 
                        
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu text-center">

                            <li class="has-submenu ">
                                <a href="{{ route('kegiatan.index') }}"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                            </li>
                            

                           <!--  <li class="has-submenu ">
                                <a href="calendar.html"><i class="mdi mdi-calendar-clock"></i>Calendar</a>
                                
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-animation"></i>User Interface</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-badge.html">Badge</a></li>
                                            <li><a href="ui-alertify.html">Alertify</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-carousel.html">Carousel</a></li>
                                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                            <li><a href="ui-typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-cards.html">Cards</a></li>
                                            <li><a href="ui-grid.html">Grid</a></li>
                                            <li><a href="ui-rating.html">Rating</a></li>                                            
                                            <li><a href="ui-modals.html">Modals</a></li>
                                            <li><a href="ui-images.html">Images</a></li>
                                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-navs.html">Navs</a></li>
                                            <li><a href="ui-alerts.html">Alerts</a></li>                                                                                          
                                            <li><a href="ui-pagination.html">Pagination</a></li>
                                            <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                            <li><a href="ui-progressbars.html">Progress Bars</a></li> 
                                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            
                        </ul><!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

               

                @yield('content')

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        ?? 2020 Presence by IT Content and Knowledge Management SEAMOLEC.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


       <!-- jQuery  -->
       
       <script src="{{asset('/assets/js/popper.min.js')}}"></script>
       <script src="{{asset('/assets/js/bootstrap-material-design.js')}}"></script>
       <script src="{{asset('/assets/js/modernizr.min.js')}}"></script>
       <script src="{{asset('/assets/js/detect.js')}}"></script>
       <script src="{{asset('/assets/js/fastclick.js')}}"></script>
       <script src="{{asset('/assets/js/jquery.slimscroll.js')}}"></script>
       <script src="{{asset('/assets/js/jquery.blockUI.js')}}"></script>
       <script src="{{asset('/assets/js/waves.js')}}"></script>
       <script src="{{asset('/assets/js/jquery.nicescroll.js')}}"></script>
       <script src="{{asset('/assets/js/jquery.scrollTo.min.js')}}"></script>

       <!-- App js -->
       <script src="{{ asset('assets/js/app.js') }}"></script>
       
    </body>
</html>