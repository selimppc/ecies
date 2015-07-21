@extends('layouts.master')

@section('content')



    <!--=== Content Part ===-->
    <div class="body">
        <div class="breadcrumbs margin-bottom-50">
            <div class="container">
                <h1 class="color-green pull-left">ONLINE SERVICES</h1>
                <ul class="pull-right breadcrumb">
                    <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                    <li><a href="">Pages</a> <span class="divider">/</span></li>
                    <li class="active">Registration</li>
                </ul>
            </div><!--/container-->
        </div><!--/breadcrumbs-->

        <div class="container">
            <div class="row-fluid margin-bottom-10">
                <form class="reg-page" />
                <h4>Please feel free to get in touch with us if you have a query about course or consultnacy – we will be happy to hear from you and we will contact you shortly
                </h4>
                <div class="controls">

                    <label>Full Name</label>
                    <input type="text" class="span12" />

                    <label>Personal Details <span class="color-red">*</span></label>
                    <textarea type="text" class="span12"></textarea>

                    <label>Company </label>
                    <input type="text" class="span12" />

                    <label>Company Details <span class="color-red">*</span></label>
                    <textarea type="text" class="span12"></textarea>

                    <label>Job Title</label>
                    <input type="text" class="span12" />

                </div>

                <div class="controls">
                    <div class="span6">
                        <label>City <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                    <div class="span6">
                        <label>Country <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                </div>
                <div class="controls">
                    <label>Address <span class="color-red">*</span></label>
                    <textarea type="text" class="span12"></textarea>

                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" class="span12" />
                </div>

                <div class="controls">
                    <div class="span6">
                        <label>Mobile Number <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                    <div class="span6">
                        <label>Phone Number <span class="color-red">*</span></label>
                        <input type="text" class="span12" />
                    </div>
                </div>


                <div class="controls">
                    <label>Industry</label>
                    <input type="text" class="span12" />

                    <label>Course</label>
                    <input type="text" class="span12" />

                    <label>Course Details <span class="color-red">*</span></label>
                    <textarea type="text" class="span12"></textarea>

                    <label>Subject</label>
                    <input type="text" class="span12" />

                    <label>Note <span class="color-red">*</span></label>
                    <textarea type="text" class="span12"></textarea>

                </div>

                <div class="controls">
                    <div class="span6">
                        <label>Payment Details <span class="color-red">*</span></label>
                        <textarea type="text" class="span12"></textarea>
                    </div>
                    <div class="span6">
                        <label>Stay Details <span class="color-red">*</span></label>
                        <textarea type="text" class="span12"></textarea>
                    </div>
                </div>

                <div class="controls form-inline">
                    <label class="checkbox"><input type="checkbox" required="required"/>&nbsp; I read <a href="#">Terms and Conditions</a></label>
                    <button class="btn-u pull-right" type="submit">Register</button>
                </div>
                <hr />
                </form>
            </div><!--/row-fluid-->
        </div><!--/container-->
    </div><!--/body-->
    <!--=== End Content Part ===-->


@stop