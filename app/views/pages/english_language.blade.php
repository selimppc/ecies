@extends('layouts.master')
@section('content')

    <!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="color-green pull-left">English Language</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="{{ URL::route('index') }}">Home</a> <span class="divider">/</span></li>
                <li class="active">English Language</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">

                <div class="span12">
                    {{ HTML::image( '/images/english_language/arabic.png', 'English Language' ) }}
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
                                    <td> 01 </td>
                                    <td> TEACHING ENGLISH </td>
                                    <td> ENLA1301 </td>
                                    <td> 12 WEEKS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 02 </td>
                                    <td> ESOL </td>
                                    <td> ENLA1302 </td>
                                    <td> 12 WEEKS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="error">
                                    <td> 03 </td>
                                    <td> TFTL </td>
                                    <td> ENLA1303 </td>
                                    <td> 12 WEEKS </td>
                                    <td> FULL TIME </td>
                                    <td> REQUEST </td>
                                    <td> EMAIL </td>
                                </tr>
                                <tr class="success">
                                    <td> 04 </td>
                                    <td> TRANSLATION </td>
                                    <td> ENLA1304 </td>
                                    <td> 12 WEEKS </td>
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