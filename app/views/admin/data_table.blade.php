@extends('layouts.dashboard')
@section('content')
    <!--=== Page Header ===-->
    <div class="page-header">
        <div class="page-title">
            <h3>Welcome to Dashboard </h3>
            <span>Good morning, {{ Auth::user()->username }}</span>
        </div>

        <!-- Page Stats -->
        <ul class="page-stats">
            Dashboard
        </ul>
        <!-- /Page Stats -->
    </div>
    <!-- /Page Header -->

    <!--=== Page Content ===-->
    <!--=== Box Tabs ===-->
    <div class="row">
        <div class="col-md-12">
            <div class="widget box">
                <div class="widget-header">
                    <h4><i class="icon-reorder"></i> Welcome Message</h4>
                </div>
                <div class="widget-content">
                    <div class="tabbable box-tabs">
                        <ul class="nav nav-tabs">
                            <li><a href="#box_tab3" data-toggle="tab">Section 3</a></li>
                            <li><a href="#box_tab2" data-toggle="tab">Section 2</a></li>
                            <li class="active"><a href="#box_tab1" data-toggle="tab">Section 1</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="box_tab1">
                                <div class="alert alert-warning"><strong>Hey there!</strong> I'm a cool alert.</div>
                                <p>
                                    Ecies.co.UK
                                </p>
                            </div>
                            <div class="tab-pane" id="box_tab2">
                                <p>Ecies.co.UK</p>
                            </div>
                            <div class="tab-pane" id="box_tab3">
                                <p>Ecies.co.UK</p>
                            </div>
                        </div>
                    </div> <!-- /.tabbable portlet-tabs -->
                </div> <!-- /.widget-content -->
            </div> <!-- /.widget .box -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
    <!-- /Box Tabs -->



@stop