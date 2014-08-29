@extends('site.account.master')
@section('content')
<div class="row">
    <div class="col-md-4 col-sm-5">
        <div class="portlet">
            <h4 class="portlet-title">
                <u>Daily Stats</u>
            </h4>

            <div class="portlet-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, fugiat, dolores, laborum sit.</p>
                <hr>
                <table class="table keyvalue-table">
                    <tbody>
                    <tr>
                        <td class="kv-key"><i class="fa fa-rupee kv-icon kv-icon-primary"></i> Revenue</td>
                        <td class="kv-value">5,367</td>
                    </tr>
                    <tr>
                        <td class="kv-key"><i class="fa fa-gift kv-icon kv-icon-secondary"></i> Total Sales</td>
                        <td class="kv-value">473</td>
                    </tr>
                    <tr>
                        <td class="kv-key"><i class="fa fa-exchange kv-icon kv-icon-tertiary"></i>Referrals</td>
                        <td class="kv-value">78</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <!-- /.portlet-body -->

        </div>
        <!-- /.portlet -->

    </div>
    <!-- /.col -->


    <div class="col-md-8 col-sm-7">
        <div class="portlet">
            <h4 class="portlet-title">
                <u>Monthly Stats</u>
            </h4>

            <div class="portlet-body">

                <div id="line-chart" class="chart-holder-300"></div>
            </div>
            <!-- /.portlet-body -->

        </div>
        <!-- /.portlet -->

    </div>
    <!-- /.col -->

</div> <!-- /.row -->

<!-- /.row -->
@stop
