@extends('layouts.master')

@section('content')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="color-green pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li><a href="">Pages</a> <span class="divider">/</span></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid">
        <form class="log-page" />
        <h3>Login to your account</h3>
        <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span>
            <input class="input-xlarge" type="text" placeholder="Username" required="required" />
        </div>
        <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span>
            <input class="input-xlarge" type="text" placeholder="password" required="required" />
        </div>
        <div class="controls form-inline">
            <label class="checkbox"><input type="checkbox" /> Remember Me</label>
            <button class="btn-u pull-right" type="submit">Login</button>
        </div>
        <hr />
        {{--<h4>Forget your Password ?</h4>--}}
        {{--<p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>--}}
        </form>
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->

@stop