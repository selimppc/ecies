<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title> @if(isset($pageTitle)) {{$pageTitle }} @else {{"Ecies"}} @endif </title>

    <!-- Bootstrap -->
    {{ HTML::style('admin/bootstrap/css/bootstrap.min.css') }}

    <!-- jQuery UI -->
    <!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
    <!--[if lt IE 9]>
    {{ HTML::style('admin/plugins/jquery-ui/jquery.ui.1.10.2.ie.css') }}
    <![endif]-->

    <!-- Theme -->
    {{ HTML::style('admin/assets/css/main.css') }}
    {{ HTML::style('admin/assets/css/plugins.css') }}
    {{ HTML::style('admin/assets/css/responsive.css') }}
    {{ HTML::style('admin/assets/css/icons.css') }}
    {{ HTML::style('admin/assets/css/fontawesome/font-awesome.min.css') }}
    {{ HTML::style('admin/assets/css/fontawesome/font-awesome-ie7.min.css') }}

    <!--[if IE 8]>
    {{ HTML::style('admin/assets/css/ie8.css') }}
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!--=== JavaScript ===-->
    {{ HTML::script('admin/assets/js/libs/jquery-1.10.2.min.js')}}
    {{ HTML::script('admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}
    {{ HTML::script('admin/bootstrap/js/bootstrap.min.js')}}
    {{ HTML::script('admin/assets/js/libs/lodash.compat.min.js')}}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::script('admin/assets/js/libs/html5shiv.js')}}
    <![endif]-->

    <!-- Smartphone Touch Events -->
    {{ HTML::script('admin/plugins/touchpunch/jquery.ui.touch-punch.min.js')}}
    {{ HTML::script('admin/plugins/event.swipe/jquery.event.move.js')}}
    {{ HTML::script('admin/plugins/event.swipe/jquery.event.swipe.js')}}

    <!-- General -->
    {{ HTML::script('admin/assets/js/libs/breakpoints.js')}}
    {{ HTML::script('admin/plugins/respond/respond.min.js')}} <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
    {{ HTML::script('admin/plugins/cookie/jquery.cookie.min.js')}}
    {{ HTML::script('admin/plugins/slimscroll/jquery.slimscroll.min.js')}}
    {{ HTML::script('admin/plugins/slimscroll/jquery.slimscroll.horizontal.min.js')}}

    <!-- Forms -->
    {{ HTML::script('plugins/typeahead/typeahead.min.js')}}<!-- AutoComplete -->
    {{ HTML::script('admin/plugins/uniform/jquery.uniform.min.js')}}
    {{ HTML::script('admin/plugins/select2/select2.min.js')}}
    {{ HTML::script('admin/plugins/bootstrap-wysihtml5/wysihtml5.min.js')}}
    {{ HTML::script('admin/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.min.js')}}

    <!-- DataTables -->
    {{ HTML::script('admin/plugins/datatables/jquery.dataTables.min.js') }}
    {{ HTML::script('admin/plugins/datatables/tabletools/TableTools.min.js') }} <!-- optional -->
    {{ HTML::script('admin/plugins/datatables/colvis/ColVis.min.js') }} <!-- optional -->
    {{ HTML::script('admin/plugins/datatables/DT_bootstrap.js') }}

    <!-- App -->
    {{ HTML::script('admin/assets/js/app.js')}}
    {{ HTML::script('admin/assets/js/plugins.js')}}
    {{ HTML::script('admin/assets/js/plugins.form-components.js')}}

    <script>
        $(document).ready(function(){
            "use strict";
            App.init(); // Init layout and core plugins
            Plugins.init(); // Init all plugins
            FormComponents.init(); // Init all form-specific plugins

            $('#confirm-delete').on('show.bs.modal', function (e) {
                $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.danger').attr('href') + '</strong>');
            });

        });
    </script>

    <!-- Demo JS -->
    {{ HTML::script('admin/assets/js/custom.js')}}

</head>

<body>

<!-- Header -->
<header class="header navbar navbar-fixed-top" role="banner">
<!-- Top Navigation Bar -->
<div class="container">

    <!-- Only visible on smartphones, menu toggle -->
    <ul class="nav navbar-nav">
        <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
    </ul>

    <!-- Logo -->
    <a class="navbar-brand" href="{{URL::route('dashboard')}}">
        {{ HTML::image( '/assets/img/logo_ecies.png', 'Ecies.co.uk', ['width'=>'50%'] ) }}
        <strong>.co.UK </strong>
    </a>
    <!-- /logo -->

    <!-- Sidebar Toggler -->
    <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
        <i class="icon-reorder"></i>
    </a>
    <!-- /Sidebar Toggler -->



    <!-- Top Right Menu -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Notifications -->


        <!-- User Login Dropdown -->
        <li class="dropdown user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
                <i class="icon-male"></i>
                <span class="username">{{ Str::title(Auth::user()->username) }}</span>
                <i class="icon-caret-down small"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="{{URL::route('admin/logout')}}"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- /user login dropdown -->
    </ul>
    <!-- /Top Right Menu -->
</div>
<!-- /top navigation bar -->


</header> <!-- /.header -->

<div id="container">
<div id="sidebar" class="sidebar-fixed">
    <div id="sidebar-content">

        <!-- Search Input -->
        <form class="sidebar-search">
            <div class="input-box">
                <button type="submit" class="submit">
                    <i class="icon-search"></i>
                </button>
                    <span>
                        <input type="text" placeholder="Search...">
                    </span>
            </div>
        </form>
        <!-- Search Results -->


        <!--=== Navigation ===-->
        <ul id="nav">
            <li>
                <a href="{{ URL::route('dashboard') }}">
                    <i class="icon-dashboard"></i>
                    Dashboard
                </a>
            </li>

            <!--=== Home Page ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Home Page
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('ict-workshop')}}"> <i class="icon-angle-right"></i>
                            ICT Workshop
                        </a>
                    </li>
                </ul>
            </li>

            <!--=== Solution ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Solution
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('solution/ict-support')}}"> <i class="icon-angle-right"></i>
                            ICT Support
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('solution/security')}}"> <i class="icon-angle-right"></i>
                            Security
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('solution/consultancy')}}"> <i class="icon-angle-right"></i>
                            Consultancy
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('solution/web-design')}}"> <i class="icon-angle-right"></i>
                            Web Design
                        </a>
                    </li>
                </ul>
            </li>

            <!--=== Course ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Course
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('course/communication-it')}}"> <i class="icon-angle-right"></i>
                            Communication & IT
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('course/english-language')}}"> <i class="icon-angle-right"></i>
                            English Language
                        </a>
                    </li>

                </ul>
            </li>

            <!--=== Client ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Client
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('client/service')}}"> <i class="icon-angle-right"></i>
                            Service
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('client/student')}}"> <i class="icon-angle-right"></i>
                            Student
                        </a>
                    </li>

                </ul>
            </li>


            <!--=== ECIES ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    ECIES
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('ecies/overview')}}"> <i class="icon-angle-right"></i>
                            Overview
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('ecies/partner')}}"> <i class="icon-angle-right"></i>
                            Partner
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::route('ecies/career')}}"> <i class="icon-angle-right"></i>
                            Career
                        </a>
                    </li>

                </ul>
            </li>

            <!--=== Recent Work ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Recent Work
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('recent-work')}}"> <i class="icon-angle-right"></i>
                            Recent Work(s)
                        </a>
                    </li>
                </ul>
            </li>

            <!--=== Registered Person/Course ===-->
            <li>
                <a href="javascript:void(0);">
                    <i class="icon-folder-open-alt"></i>
                    Registration History
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{URL::route('registration')}}"> <i class="icon-angle-right"></i>
                            Registration(s)
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <!-- /Navigation -->

        <div class="sidebar-widget align-center">
            <div class="btn-group" data-toggle="buttons" id="theme-switcher">
                <label class="btn active">
                    <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
                </label>
                <label class="btn">
                    <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
                </label>
            </div>
        </div>

    </div>
    <div id="divider" class="resizeable"></div>
</div>
<!-- /Sidebar -->

<div id="content">
    <div class="container">
        <!-- Breadcrumbs line -->
        <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ URL::route('dashboard') }}">Dashboard</a>
                </li>
                <li class="current">
                    {{$pageTitle}}
                </li>
            </ul>
        </div>
        <!-- /Breadcrumbs line -->

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
    <!-- /.container -->
</div>
</div>


{{-- Modal Area --}}
<div class="modal fade" id="modal-pc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height:90%; width: 50%; margin: 0 auto; background: white; overflow: scroll; margin-top: 55px;">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>

{{-- Delete Area --}}
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirm Cancel</h4>
            </div>
            <div class="modal-body">
                <strong>Are you sure to Delete?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
                <a href="#" class="btn btn-danger danger">Delete</a>
            </div>
        </div>
    </div>
</div>


<script>
    $(function () {
        $('#nav li a').filter(function(){return this.href==location.href}).parent().addClass('current').siblings().removeClass('current')
        $('#nav li a').click(function(){
            $(this).parent().addClass('current').siblings().removeClass('current')
        })
    });
</script>
</body>
</html>