<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href= {!! asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') !!} rel="stylesheet">
    <!-- Font Awesome -->

    <link href= {!! asset('gentelella/vendors/font-awesome/css/font-awesome.min.css') !!} rel="stylesheet">
    <!-- NProgress -->
    <link href= {!! asset('gentelella/vendors/nprogress/nprogress.css') !!} rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href= {!! asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}  rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={!! asset('gentelella/build/css/custom.min.css') !!} rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href={{ route('dash') }} class="site_title"><span>Mokymo medžiaga</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">

                    <div class="profile_info">
                        <span>Sveiki,</span>
                        <h2>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Valdymas</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Pradžia <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href={{route('courses.show')}}>Kursai</a></li>
                                    <li><a href={{route('groups.show')}}>Grupės</a></li>
                                    <li><a href={{route('subjects.show')}}>Pamokos</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="form.html">General Form</a></li>
                                    <li><a href="form_advanced.html">Advanced Components</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizards.html">Form Wizard</a></li>
                                    <li><a href="form_upload.html">Form Upload</a></li>
                                    <li><a href="form_buttons.html">Form Buttons</a></li>
                                </ul>
                            </li>


                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">{{ Auth::user()->name }} {{ Auth::user()->lastname }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where kazkas
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where kazkas
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where kazkas
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where kazkas
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                        <div>
                                    @yield('content')

                        </div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>
        </div>
        <!-- /page content -->
    </div>
</div>

<!-- jQuery -->
<script src= {!!asset('gentelella/vendors/jquery/dist/jquery.min.js')!!}></script>
<!-- Bootstrap -->
<script src={!!asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')!!}></script>
<!-- FastClick -->
<script src={!!asset('gentelella/vendors/fastclick/lib/fastclick.js')!!}></script>
<!-- NProgress -->
<script src={!!asset('gentelella/vendors/nprogress/nprogress.js')!!}></script>
<!-- Chart.js -->
<script src={!!asset('gentelella/vendors/Chart.js/dist/Chart.min.js')!!}></script>
<!-- jQuery Sparklines -->
<script src={!!asset('gentelella/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')!!}></script>
<!-- Flot -->
<script src={!!asset('gentelella/vendors/Flot/jquery.flot.js')!!}></script>
<script src={!!asset('gentelella/vendors/Flot/jquery.flot.pie.js')!!}></script>
<script src={!!asset('gentelella/vendors/Flot/jquery.flot.time.js')!!}></script>
<script src={!!asset('gentelella/vendors/Flot/jquery.flot.stack.js')!!}></script>
<script src={!!asset('gentelella/vendors/Flot/jquery.flot.resize.js')!!}></script>
<!-- Flot plugins -->
<script src={!!asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')!!}></script>
<script src={!!asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')!!}></script>
<script src={!!asset('gentelella/vendors/flot.curvedlines/curvedLines.js')!!}></script>
<!-- DateJS -->
<script src={!!asset('gentelella/vendors/DateJS/build/date.js')!!}></script>
<!-- bootstrap-daterangepicker -->
<script src={!!asset('gentelella/vendors/moment/min/moment.min.js')!!}></script>
<script src={!!asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')!!}></script>

<!-- Custom Theme Scripts -->
<script src={!!asset('gentelella/build/js/custom.min.js')!!}></script>
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-23581568-13', 'auto');
    ga('send', 'pageview');

</script>


</body>
</html>
