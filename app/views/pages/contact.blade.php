@extends('layouts.master')
@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
    <div class="container">
        <h1 class="color-green pull-left">Our Contacts</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!-- Google Map -->
<div id="map" class="map margin-bottom-40">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.8304076018903!2d-0.12376939999999999!3d51.5163273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b336759915d%3A0x9e46454d5d41bd88!2sLondon+WC1N+3XX%2C+UK!5e0!3m2!1sen!2sbd!4v1437833680429" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid">
        <div class="span9">
            <div class="headline"><h3>Contacts</h3></div>
            <p>GETTING IN TOUCH</p><br />
            <form action="{{URL::route('store/contact')}}" method="post">
                <label>Full Name<span class="color-red">*</span></label>
                <input type="text" name="name" class="span7 border-radius-none" required="required" />

                <label>Email Address<span class="color-red">*</span></label>
                <input type="email" name="email" class="span7 border-radius-none" required="required" />

                <label>Phone Number <span class="color-red">*</span></label>
                <input type="text" name="phone" class="span7 border-radius-none" required="required" />

                <label>Subject <span class="color-red">*</span></label>
                <input type="text" name="subject" class="span7 border-radius-none" required="required" />

                <label>Message <span class="color-red">*</span></label>
                <textarea rows="5" name="message" class="span10" required="required" ></textarea>

                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->

        <div class="span3">
            <!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <address>
                    ECIES LTD <br />
                    BM BOX 2364, LONDON <br />
                    WC1N 3XX, UNITED KINGDOM <br />
                    Phone: +44 (0)20 7419 5927 <br />
                    Email: <a href="mailto:SALES@ECIES.CO.UK" class="">SALES@ECIES.CO.UK</a>
                </address>

                <address>
                    <b> COMPANY INFORMATION: </b> <br />
                    COMPANY NUMBER: 8783269 <br />
                    VAT NUMBER: GB 1319966 <br />
                </address>

                <address>
                    VISIT: TO VISIT A OFFICE YOU MUST MAKE AN APPOINTMENT.<br />
                    APPOINTMENT ARE AVAILABLE
                </address>

                <address>
                    MONDAY - FRIDAY BETWEEN 10AM - 12AM ( EXCLUDING PUBLIC HOLIDAYS)<br /><br />
                    <b> NORMAL BUSINESS HOURS: </b> <br />
                    MONDAY - FRIDAY BETWEEN 9AM - 5PM ( EXCLUDING PUBLIC HOLIDAYS)
                </address>
            </ul>

        </div><!--/span3-->
    </div><!--/row-fluid-->

</div><!--/container-->
<!--=== End Content Part ===-->


@stop