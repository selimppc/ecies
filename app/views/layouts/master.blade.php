<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title> @if(isset($pageTitle)) {{$pageTitle }} @else {{"Ecies"}} @endif </title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/headers/header1.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('assets/css/style_responsive.css') }}
    <link rel="shortcut icon" href="assets/img/icon.png" />
    <!-- CSS Implementing Plugins -->
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('assets/plugins/flexslider/flexslider.css') }} {{--  media="screen" --}}
    {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}

<!-- CSS Theme -->
    {{ HTML::style('assets/css/themes/default.css') }} {{-- id="style_color"--}}
    {{ HTML::style('assets/css/themes/headers/default.css') }} {{-- id="style_color-header-1" --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>

<body>

<!--=== Top ===-->
<div class="top">
<div class="container">
    <ul class="loginbar pull-right">
        <li><i class="icon-globe"></i><a>Languages <i class="icon-sort-up"></i></a>
            <ul class="nav-list">
                <li class="active"><a href="{{ URL::route('index') }}">English</a> <i class="icon-ok"></i></li>
            </ul>
        </li>
        <li class="devider">&nbsp;</li>
        <li><a href="{{ URL::route('faq') }}" class="login-btn">Help</a></li>
        <li class="devider">&nbsp;</li>
        <li><a href="{{ URL::route('admin/login') }}" class="login-btn">Login</a></li>
    </ul>
</div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
<div class="container">
    <!-- Logo -->
    <div class="logo">
        <a href="{{ URL::route('index') }}">
            {{ HTML::image( '/assets/img/logo_ecies.png', 'Ecies.co.uk' ) }}
        </a>
    </div><!-- /logo -->

    <!-- Menu -->
    <div class="navbar">
        <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a><!-- /nav-collapse -->
            <div class="nav-collapse collapse">
                <ul class="nav top-2">
                    <li>
                        <a href="{{ URL::route('index') }}" >Home </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solution
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('ict-support') }}">ICT Support</a></li>
                            <li><a href="{{ URL::route('security') }}">Security</a></li>
                            <li><a href="{{ URL::route('consultancy') }}">Consultancy</a></li>
                            <li><a href="{{ URL::route('web-design') }}">Web Design</a></li>
                        </ul>
                        <b class="caret-out"></b>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('communication-it') }}"> Course </a></li>
                            {{--<li><a href="{{ URL::route('english-language') }}">English Language</a></li>--}}
                            <li><a href="{{ URL::route('registrations') }}" >Registration </a></li>
                            <li><a href="{{ URL::route('client-service') }}">Service</a></li>
                            <li><a href="{{ URL::route('client-student') }}">Student</a></li>
                        </ul>
                        <b class="caret-out"></b>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Client
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            {{--<li><a href="{{ URL::route('client-service') }}">Service</a></li>
                            <li><a href="{{ URL::route('client-student') }}">Student</a></li>--}}
                        </ul>
                        <b class="caret-out"></b>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{ URL::route('registrations') }}" >Registration </a>--}}
                    {{--</li>--}}
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ecies
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('overview') }}">Overview</a></li>
                            <li><a href="{{ URL::route('career') }}">Career</a></li>
                            <li><a href="{{ URL::route('contact') }}">Contact</a></li>
                        </ul>
                        <b class="caret-out"></b>
                    </li>
                    <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                </ul>
                <div class="search-open">
                    <div class="input-append">
                        <form />
                            <input type="text" class="span3" placeholder="Search"  required="required"/>
                            <button type="submit" class="btn-u">Go</button>
                        </form>
                    </div>
                </div>
            </div><!-- /nav-collapse -->
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->
</div><!-- /container -->
</div><!--/header -->
<!--=== End Header ===-->

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

    {{-- Dynamic Content Area --}}
    @yield('content')


<!--=== Footer ===-->
<div class="footer">
<div class="container">
    <div class="row-fluid">
        <div class="span8">
            <!-- About -->
            <div class="headline"><h3>About Ecies.co.UK</h3></div>
            <p class="margin-bottom-25">Ecies is private limited company, it is based in London United Kingdom. It provides Training and Consultancy services for not-for-profit organizations, small and medium-sized enterprises, Started it operations in 2011.</p>

            <!-- Monthly Newsletter -->
            <div class="headline"><h3>Monthly Newsletter</h3></div>
            <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
            <form class="form-inline" />
                <div class="input-append">
                    <input type="text" placeholder="Email Address" class="input-medium"  required="required"/>
                    <button class="btn-u">Subscribe</button>
                </div>
            </form>
        </div><!--/span4-->



        <div class="span4">
            <!-- Monthly Newsletter -->
            <div class="headline"><h3>Contact Us</h3></div>
            <address>
                Ecies Ltd <br />
                BM BOX 2364, London <br />
                WC1N 3XX, United Kingdom <br />
                Phone: +44 (0)20 7419 5927 <br />
                Email: <a href="mailto:sales@ecies.co.uk" class="">sales@ecies.co.uk</a>
            </address>

            <!-- Stay Connected -->
            <div class="headline"><h3>Stay Connected</h3></div>
            <ul class="social-icons">
                <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
            </ul>
        </div><!--/span4-->
    </div><!--/row-fluid-->
</div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
<div class="container">
    <div class="row-fluid">
        <div class="span8">
            <p>2015 &copy; Ecies.co.uk All Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
        <div class="span4">
            <a href="{{ URL::route('index') }}">
                {{ HTML::image( '/assets/img/logo_ecies.png', 'Ecies.co.uk' ) }}
            </a>
        </div>
    </div><!--/row-fluid-->
</div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
{{ HTML::script('assets/js/jquery-1.8.2.min.js')}}
{{ HTML::script('assets/js/modernizr.custom.js')}}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js')}}

<!-- JS Implementing Plugins -->
{{ HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js')}}
{{ HTML::script('assets/plugins/parallax-slider/js/modernizr.js')}}
{{ HTML::script('assets/plugins/parallax-slider/js/jquery.cslider.js')}}
{{ HTML::script('assets/plugins/back-to-top.js')}}

<!-- JS Page Level -->
{{ HTML::script('assets/js/app.js')}}
{{ HTML::script('assets/js/pages/index.js')}}
{{ HTML::script('')}}
<script type="text/javascript">
jQuery(document).ready(function() {
    App.init();
    App.initSliders();
    Index.initParallaxSlider();
});
</script>
<!--[if lt IE 9]>
{{ HTML::script('assets/js/respond.js')}}
<![endif]-->

<script>
    $(function () {
        $('.nav li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
        $('.nav li a').click(function(){
            $(this).parent().addClass('active').siblings().removeClass('active')
        })
    });
</script>

</body>
</html>