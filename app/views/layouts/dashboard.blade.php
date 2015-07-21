<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ $pageTitle }}</title>
    <link rel="shortcut icon" href="assets/img/icon.png" />
{{--    {{ HTML::script('admin/scripts/jquery-2.1.1.min.js')}}--}}
    {{ HTML::script('admin/scripts/jquery-1.11.3.min.js')}}

    {{ HTML::style('admin/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('admin/bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('admin/css/theme.css') }}
    {{ HTML::style('admin/images/icons/css/font-awesome.css') }}
    {{ HTML::style('admin/css/sans.css') }}

</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ URL::route('admin/dashboard') }}">Control Panel | Ecies </a>
            <div class="nav-collapse collapse navbar-inverse-collapse">

                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>

                <ul class="nav pull-right">

                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ HTML::image( 'admin/images/user.png', 'Ecies.co.uk' ,['class'=>'nav-avatar'] ) }}
                            {{ Str::title(Auth::user()->username) }}
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Your Profile</a></li>
                            <li><a href="#">Edit Profile</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::route('admin/logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="{{URL::route('admin/dashboard')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                            </a></li>
                    </ul>
                    <!--/.widget-nav-->

                    <!--/.SOLUTION-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#toggleSolution"><i class="menu-icon icon-tasks"></i>
                                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>SOLUTION </a>
                            <ul id="toggleSolution" class="collapse unstyled">
                                <li><a href="{{URL::route('solution/ict-support')}}"><i class="menu-icon icon-tasks"></i> ICT Support </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Security </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Consultancy </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Web Design </a></li>
                            </ul>
                        </li>
                    </ul>


                    <!--/.COURSE-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#toggleCourse"><i class="menu-icon icon-tasks"></i>
                                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>COURSE </a>
                            <ul id="toggleCourse" class="collapse unstyled">
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Communication IT </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> English Language </a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--/.CLIENT-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#toggleClient"><i class="menu-icon icon-tasks"></i>
                                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>CLIENT </a>
                            <ul id="toggleClient" class="collapse unstyled">
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Service </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Student </a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--/.ECIES-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a class="collapsed" data-toggle="collapse" href="#toggleEcies"><i class="menu-icon icon-tasks"></i>
                                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>ECIES </a>
                            <ul id="toggleEcies" class="collapse unstyled">
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Overview </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Partner </a></li>
                                <li><a href="#"><i class="menu-icon icon-tasks"></i> Career </a></li>
                            </ul>
                        </li>
                    </ul>

                    <!--/.widget-nav-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{URL::route('admin/logout')}}"><i class="menu-icon icon-signout"></i>Logout </a></li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>
            <!--/.span3-->
            <div class="span9">
                <div class="content">

                    {{--set some message after action--}}
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Success! </b> {{Session::get("message")}}</div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-error alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Error! </b> {{Session::get("error")}}</div>
                    @endif
                    @if(Session::has('info'))
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Info! </b> {{Session::get("info")}}</div>
                    @endif
                    @if(Session::has('danger'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Alert! </b> {{Session::get("danger")}}</div>

                    @endif
                    @if(Session::has('warning'))
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <b>Warning! </b> {{Session::get("warning")}}</div>

                    @endif


                    @yield('content')



                </div>
                <!--/.content-->
            </div>
            <!--/.span9-->
        </div>
    </div>
    <!--/.container-->
</div>


{{-- Modal Area --}}
<div class="modal fade" id="modal-pc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        </div>
    </div>
</div>


<!--/.wrapper-->
<div class="footer">
    <div class="container">
        <b class="copyright">&copy; 2015 | Selim Reza - www.SelimReza.com </b> | All rights reserved.
    </div>
</div>

{{ HTML::script('admin/scripts/jquery-1.9.1.min.js')}}
{{ HTML::script('admin/scripts/jquery-ui-1.10.1.custom.min.js')}}
{{ HTML::script('admin/bootstrap/js/bootstrap.min.js')}}
{{ HTML::script('admin/scripts/flot/jquery.flot.js')}}
{{ HTML::script('admin/scripts/flot/jquery.flot.resize.js')}}
{{ HTML::script('admin/scripts/datatables/jquery.dataTables.js')}}
{{ HTML::script('admin/scripts/common.js')}}
{{--{{ HTML::script('admin/scripts/ckeditor.js')}}--}}


</body>
