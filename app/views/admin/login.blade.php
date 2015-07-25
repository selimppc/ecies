<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>{{ $pageTitle }}</title>

    <!--=== CSS ===-->
    <!-- Bootstrap -->
    {{ HTML::style('admin/bootstrap/css/bootstrap.min.css') }}

    <!-- Theme -->
    {{ HTML::style('admin/assets/css/main.css') }}
    {{ HTML::style('admin/assets/css/plugins.css') }}
    {{ HTML::style('admin/assets/css/responsive.css') }}
    {{ HTML::style('admin/assets/css/icons.css') }}

    <!-- Login -->
    {{ HTML::style('admin/assets/css/login.css') }}

    {{ HTML::style('admin/assets/css/fontawesome/font-awesome.min.css') }}
    <!--[if IE 7]>
    {{ HTML::style('admin/assets/css/fontawesome/font-awesome-ie7.min.css') }}
    <![endif]-->

    <!--[if IE 8]>
    {{ HTML::style('admin/assets/css/ie8.css') }}
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <!--=== JavaScript ===-->
    {{ HTML::style('admin/assets/js/libs/jquery-1.10.2.min.js') }}
    {{ HTML::style('admin/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::style('admin/assets/js/libs/lodash.compat.min.js') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::style('admin/assets/js/libs/html5shiv.js') }}
    <![endif]-->

    <!-- Beautiful Checkboxes -->
    {{ HTML::style('admin/plugins/uniform/jquery.uniform.min.js') }}

    <!-- Form Validation -->
    {{ HTML::style('admin/plugins/validation/jquery.validate.min.js') }}

    <!-- Slim Progress Bars -->
    {{ HTML::style('admin/plugins/nprogress/nprogress.js') }}

    <!-- App -->
    {{ HTML::style('admin/assets/js/login.js') }}
    <script>
        $(document).ready(function(){
            "use strict";
            Login.init(); // Init login JavaScript
        });
    </script>
</head>

<body class="login">
<!-- Logo -->
<div class="logo">
    <a href="{{URL::route('index')}}">
        {{ HTML::image( '/assets/img/logo_ecies.png', 'Ecies.co.uk' ) }}
    </a>
</div>
<!-- /Logo -->

<!-- Login Box -->
<div class="box">
    @if(Session::has('error'))
        <div class="alert alert-error alert-dismissable" style="background-color: lightcoral; color: white; font-weight: bolder;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <b>Error! </b> {{Session::get("error")}}</div>
    @endif

    <div class="content">
        <!-- Login Formular -->
        {{ Form::open(array('url'=>'admin/login', 'method'=>'post', 'class'=>'form-vertical login-form')) }}
            <!-- Title -->
            <h3 class="form-title">Sign In to your Account</h3>

            <!-- Error Message -->
            <div class="alert fade in alert-danger" style="display: none;">
                <i class="icon-remove close" data-dismiss="alert"></i>
                Enter any username and password.
            </div>

            <!-- Input Fields -->
            <div class="form-group">
                <div class="input-icon">
                    <i class="icon-user"></i>
                    {{Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'username', 'required'=>'required', 'autofocus', 'data-rule-required'=>'true',  'data-msg-required'=>'Please enter your username.' ])}}
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i class="icon-lock"></i>
                    {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'password', 'required'=>'required', 'data-rule-required'=>'true',  'data-msg-required' => 'Please enter your password.' ])}}
                </div>
            </div>
            <!-- /Input Fields -->

            <!-- Form Actions -->
            <div class="form-actions">
                <label class="checkbox pull-left"><input type="checkbox" class="uniform" name="remember"> Remember me</label>
                <button type="submit" class="submit btn btn-primary pull-right">
                    Sign In <i class="icon-angle-right"></i>
                </button>
            </div>
        {{ Form::close() }}
        <!-- /Login Formular -->


    </div> <!-- /.content -->

    <!-- Forgot Password Form -->
    <div class="inner-box">
        <div class="content">
            <!-- Close Button -->
            <i class="icon-remove close hide-default"></i>

            <!-- Link as Toggle Button -->
            <a href="" class="forgot-password-link">Forgot Password?</a>

            {{--<!-- Forgot Password Formular -->--}}
            {{--<form class="form-vertical forgot-password-form hide-default" action="" method="post">--}}
                {{--<!-- Input Fields -->--}}
                {{--<div class="form-group">--}}
                    {{--<!--<label for="email">Email:</label>-->--}}
                    {{--<div class="input-icon">--}}
                        {{--<i class="icon-envelope"></i>--}}
                        {{--<input type="text" name="email" class="form-control" placeholder="Enter email address" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email." />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /Input Fields -->--}}

                {{--<button type="submit" class="submit btn btn-default btn-block">--}}
                    {{--Reset your Password--}}
                {{--</button>--}}
            {{--</form>--}}
            <!-- /Forgot Password Formular -->

            <!-- Shows up if reset-button was clicked -->
            <div class="forgot-password-done hide-default">
                <i class="icon-ok success-icon"></i> <!-- Error-Alternative: <i class="icon-remove danger-icon"></i> -->
                <span>Great. We have sent you an email.</span>
            </div>
        </div> <!-- /.content -->
    </div>
    <!-- /Forgot Password Form -->
</div>
<!-- /Login Box -->

</body>
</html>