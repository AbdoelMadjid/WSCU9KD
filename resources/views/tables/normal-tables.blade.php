@extends('ext.main')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark"><i class="fa fa-table fa-fw "></i> Table <span>>
					Normal Tables </span></h1>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
            <ul id="sparks" class="">
                <li class="sparks-info">
                    <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                    <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                        1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                    </div>
                </li>
                <li class="sparks-info">
                    <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                    <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                        110,150,300,130,400,240,220,310,220,300, 270, 210
                    </div>
                </li>
                <li class="sparks-info">
                    <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                    <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                        110,150,300,130,400,240,220,310,220,300, 270, 210
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- widget grid -->
    <section id="widget-grid" class="">

        <!-- row -->
        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Normal Table</h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body">
                            <p>
                                Adds borders to any table row within <code>
                                    &lt;table&gt;</code>
                                by adding the <code>
                                    .table-bordered</code>
                                with the base class
                            </p>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>No Padding</h2>
                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <div class="alert alert-info no-margin fade in">
                                <button class="close" data-dismiss="alert">
                                    ×
                                </button>
                                <i class="fa-fw fa fa-info"></i>
                                Adds zebra-striping to table row within <code>
                                    &lt;table&gt;</code>
                                by adding the <code>
                                    .table-striped</code>
                                with the base class
                            </div>

                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                    <th>Column name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- WIDGET END -->

            <!-- NEW WIDGET START -->
            <article class="col-sm-12 col-md-12 col-lg-6">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-2" data-widget-editbutton="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Table hover states </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <div class="alert alert-info no-margin fade in">
                                <button class="close" data-dismiss="alert">
                                    ×
                                </button>
                                <i class="fa-fw fa fa-info"></i>
                                Enables hover effect <code>
                                    &lt;table&gt;</code>
                                by adding the <code>
                                    .table-hover</code>
                                with the base class
                            </div>

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Wise</td>
                                    <td>Man</td>
                                    <td>@myorange</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- WIDGET END -->

            <!-- NEW WIDGET START -->
            <article class="col-sm-12 col-md-12 col-lg-6">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-3" data-widget-editbutton="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Table TR with colors </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <div class="alert alert-info no-margin fade in">
                                <button class="close" data-dismiss="alert">
                                    ×
                                </button>
                                <i class="fa-fw fa fa-info"></i>
                                Add custom colors to your TR and TD <code>
                                    &lt;tr&gt;</code>
                                by adding <code>
                                    .success</code>
                                , <code>
                                    .danger</code>
                                , <code>
                                    .warning</code>
                                and <code>
                                    .info</code>
                                respectively
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><i class="fa fa-building"></i> Product</th>
                                    <th><i class="fa fa-calendar"></i> Payment Taken</th>
                                    <th><i class="glyphicon glyphicon-send"></i> Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="success">
                                    <td>1</td>
                                    <td>TB - Monthly</td>
                                    <td>01/04/2012</td>
                                    <td>Approved</td>
                                </tr>
                                <tr class="danger">
                                    <td>2</td>
                                    <td>TB - Monthly</td>
                                    <td>02/04/2012</td>
                                    <td>Declined</td>
                                </tr>
                                <tr class="warning">
                                    <td>3</td>
                                    <td>TB - Monthly</td>
                                    <td>03/04/2012</td>
                                    <td>Pending</td>
                                </tr>
                                <tr class="info">
                                    <td>4</td>
                                    <td>TB - Monthly</td>
                                    <td>04/04/2012</td>
                                    <td>Call in to confirm</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- WIDGET END -->

        </div>

        <!-- end row -->

        <!-- row -->

        <div class="row">

            <!-- NEW WIDGET START -->
            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header>
                        <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                        <h2>Condenced table + combined prev. classes </h2>

                    </header>

                    <!-- widget div-->
                    <div>

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">
                            <div class="alert alert-warning no-margin fade in">
                                <button class="close" data-dismiss="alert">
                                    ×
                                </button>
                                <i class="fa-fw fa fa-info"></i>
                                A combined table effect with all classes mentioned above added to <code>
                                    &lt;table&gt;</code>
                                .
                                <code>
                                    .table-bordered .table-striped .table-condensed .table-hover .smart-form .has-tickbox
                                </code>
                            </div>
                            <table class="table table-bordered table-striped table-condensed table-hover smart-form has-tickbox">
                                <thead>
                                <tr>
                                    <th><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></th>
                                    <th>Column name <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                                    <th>Column name <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                                    <th>Column name <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                                    <th>Column name <a href="javascript:void(0);" class="btn btn-xs btn-default pull-right"><i class="fa fa-filter"></i></a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                <tr>
                                    <td><label class="checkbox">
                                            <input type="checkbox" name="checkbox-inline">
                                            <i></i> </label></td>
                                    <td>Row 1</td>
                                    <td>Row 2</td>
                                    <td>Row 3</td>
                                    <td>Row 4</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- WIDGET END -->

        </div>

        <!-- end row -->

    </section>
    <!-- end widget grid -->
@endsection

@section('page-js')
    <script>

        $(document).ready(function() {
            // PAGE RELATED SCRIPTS
        })

    </script>
@endsection