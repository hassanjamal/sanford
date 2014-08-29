@extends('account.master')

@section('content')

    <div class="layout layout-main-right layout-stack-sm">
        <div class="col-md-3 col-sm-4 layout-sidebar">
            <div class="nav-layout-sidebar-skip">
                <strong>Tab Navigation</strong> / <a href="#settings-content">Skip to Content</a>
            </div>

            <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
                <li class="active">
                    <a href="#plan-tab" data-toggle="tab">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;Plan
                    </a>
                </li>
                <li>
                    <a href="#billing-tab" data-toggle="tab">
                        <i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Billing
                    </a>
                </li>
            </ul>
        </div> <!-- /.col -->


        <div class="col-md-9 col-sm-8 layout-main">
            @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <span class="lead">Success! {{ Session::get('success') }}</span>
            </div>
            @endif
            <div id="settings-content" class="tab-content stacked-content">

                <div class="tab-pane fade in active" id="plan-tab">
                    <h3 class="content-title"><u>Plan Settings</u></h3>
                    @include('layouts.messages')
                    <form action="" method="POST" class="form-horizontal">

                        {{ Form::token() }}
                        <hr>
                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> <!-- /.col -->
                        </div>

                    </form>
                </div> <!-- /.tab-pane -->


                <div class="tab-pane fade" id="billing-tab">
                    <h3 class="content-title"><u>Billing Settings</u></h3>
                    @include('layouts.messages')
                    <form action="" method="POST" class="form-horizontal">
                        {{ Form::token() }}
                        <hr>
                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->
                    </form>
                </div> <!-- /.tab-pane -->
            </div> <!-- /.tab-content -->
        </div> <!-- /.col -->
    </div> <!-- /.row -->
@stop
