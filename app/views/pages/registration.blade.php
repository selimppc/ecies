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
                <form class="reg-page" action="{{URL::route('store/registrations')}}" method="post">
                <h4>Please feel free to get in touch with us if you have a query about course or consultnacy – we will be happy to hear from you and we will contact you shortly
                </h4>
                <div class="controls">

                    <label>Full Name<span class="color-red">*</span></label>
                    <input type="text" name="full_name" class="span12" required="required" />

                    <label>Personal Details <span class="color-red">*</span></label>
                    <textarea type="text" name="personal_detail" class="span12" required="required"></textarea>

                    <label>Company <span class="color-red">*</span></label>
                    <input type="text" name="company" class="span12"  required="required"/>

                    <label>Company Details <span class="color-red">*</span></label>
                    <textarea type="text" name="company_detail" class="span12"  required="required"></textarea>

                    <label>Job Title</label>
                    <input type="text" name="job_title" class="span12" />

                </div>

                <div class="controls">
                    <div class="span6">
                        <label>City <span class="color-red">*</span></label>
                        <input type="text" name="city" class="span12" required="required" />
                    </div>
                    <div class="span6">
                        <label>Country <span class="color-red">*</span></label>
                        <input type="text" name="country" class="span12" required="required" />
                    </div>
                </div>
                <div class="controls">
                    <label>Address <span class="color-red">*</span></label>
                    <textarea type="text" name="address" class="span12" required="required"></textarea>

                    <label>Email <span class="color-red">*</span></label>
                    <input type="email" name="email" class="span12" required="required" />
                </div>

                <div class="controls">
                    <div class="span6">
                        <label>Mobile Number <span class="color-red">*</span></label>
                        <input type="text" name="mobile" class="span12" required="required" />
                    </div>
                    <div class="span6">
                        <label>Phone Number <span class="color-red">*</span></label>
                        <input type="text" name="phone" class="span12" required="required" />
                    </div>
                </div>


                <div class="controls">
                    <label>Industry</label>
                    <input type="text" name="industry" class="span12" />

                    <label>Course</label>
                    <input type="text" name="course" class="span12" />

                    <label>Course Details </label>
                    <textarea type="text" name="course_detail" class="span12"></textarea>

                    <label>Subject <span class="color-red">*</span></label>
                    <input type="text" name="subject" class="span12" required="required" />

                    <label>Note </label>
                    <textarea type="text" name="note" class="span12"></textarea>

                </div>

                <div class="controls">
                    <div class="span6">
                        <label>Payment Details <span class="color-red">*</span></label>
                        <textarea type="text" name="payment_detail" class="span12" required="required"></textarea>
                    </div>
                    <div class="span6">
                        <label>Stay Details <span class="color-red">*</span></label>
                        <textarea type="text" name="stay_detail" class="span12" required="required"></textarea>
                    </div>
                </div>

                    <input type="hidden" name="status" value="active">

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