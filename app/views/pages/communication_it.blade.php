@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">Communication It</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">Communication It</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">

                <div class="span12">
                    {{ HTML::image( '/images/communication_it/answer_phone.png', 'web design' ) }}
                </div>

                <div class="span12">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="headline"><h3>Default Tables with Color Styles</h3></div>
                            <table class="table">
                                <thead>
                                <tr class="warning">
                                    <th> NO </th>
                                    <th> TITLE </th>
                                    <th> CODE </th>
                                    <th> LENGTH </th>
                                    <th> ATTEND </th>
                                    <th> INFORMATION </th>
                                    <th> CONTACT </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="error">
                                    <td> 2 </td>
                                    <td> BUSINESS INFORMATION SYSTEMS </td>
                                    <td> COIT1302 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 3 </td>
                                    <td> DATA WAREHOSUING </td>
                                    <td> COIT1303 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 4 </td>
                                    <td> DATABASE MANAGEMENT </td>
                                    <td> COIT130 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 5 </td>
                                    <td> INFORMATION MANAGEMENT </td>
                                    <td> COIT1305 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="info">
                                    <td> 6 </td>
                                    <td> INFORMATION SECURITY </td>
                                    <td> COIT1306 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 7 </td>
                                    <td> COMPTIA CERTIFICATIONS </td>
                                    <td> COIT1307 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 8 </td>
                                    <td> HELPDESK OPERATION MANAGEMENT </td>
                                    <td> COIT1308 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 9 </td>
                                    <td> NETWORK SYSTEMS MANAGEMENT SOFTWARE </td>
                                    <td> COIT1309 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 10 </td>
                                    <td> DISASTER CONTINGENCY PLANNING </td>
                                    <td> COIT1310 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 11 </td>
                                    <td> IT SUPPORT MANAGEMENT </td>
                                    <td> COIT1311 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 12 </td>
                                    <td> SOFTWARE QUALITY ASSURANCE </td>
                                    <td> COIT1312 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 13 </td>
                                    <td> AGIRCULTURE CATERING LEISURE SERVICES SOFTWARE </td>
                                    <td> COIT1313 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 14 </td>
                                    <td> HEALTH SCIENCES ENVIROMENT SOFTWARE </td>
                                    <td> COIT1314 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 15 </td>
                                    <td> COMPUTER FILE MANAGEMENT</td>
                                    <td> COIT1315 </td>
                                    <td> 5 DAYS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>



                                </tbody>
                            </table>
                        </div>

                    </div><!--/row-fluid-->
                </div>

            </div><!--/span9-->


        </div><!--/row-fluid-->

    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop