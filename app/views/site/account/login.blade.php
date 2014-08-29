@extends('site.layout.base')

{{-- TODO  --}}
{{-- Add remember me option --}}
{{-- Add forgot password option --}}
{{-- Get all text into translations --}}


@section('head')
<!-- App CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/mvpready-admin.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/mvpready-flat.css') }}">
@stop

@section('base-content')

<header class="navbar navbar-inverse" role="banner">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-cog"></i>
            </button>

            <a href="" class="navbar-brand navbar-brand-img">
            </a>
        </div>
        <!-- /.navbar-header -->

        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{{URL::to('/')}}}">
                        <i class="fa fa-angle-double-left"></i> &nbsp;Back to Home
                    </a>
                </li>
            </ul>
        </nav>

    </div>
    <!-- /.container -->
</header>

<div class="account-wrapper">
    @if ( $errors->count() > 0 )
    <div class="alert alert-warning alert-dismissable text-left">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>The following errors have occurred:</p>

        <ul>
            @foreach( $errors->all() as $message )
            <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <span class="lead">Success! {{ Session::get('success') }}</span>
    </div>
    @endif


    <div class="account-body">

        <h3>Welcome to Sanford Retail.</h3>
        <h5>Please sign in to get access.</h5>

        {{ Form::open(['method'=>'POST', 'action'=>'SessionController@store', 'id' =>'form-login', 'class'=>'form
        account-form'])}}

        {{ Form::token() }}

        <div class="form-group">
            <label for="login_id" class="placeholder-hidden">User ID</label>
            <input type="text" name="login_id" class="form-control" id="login_id" placeholder="Your Email" tabindex="1">
        </div>
        <!-- /.form-group -->

        <div class="form-group">
            <label for="password" class="placeholder-hidden">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                   tabindex="2">
        </div>
        <!-- /.form-group -->

        <!-- <div class="form-group">
            <label class="checkbox-inline">
                <input type="checkbox" class="" value="" tabindex="6" checked> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>
            </label>
        </div> --> <!-- /.form-group -->

        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="6">
                Signin &nbsp; <i class="fa fa-play-circle"></i>
            </button>
        </div>
        <!-- /.form-group -->

        {{ Form::close()}}

    </div>
    <!-- /.account-body -->

    <div class="account-footer">
        <p>
            Don't have an account? &nbsp;
            <a href="" class="">Contact Us</a>
        </p>
    </div>
    <!-- /.account-footer -->

</div> <!-- /.account-wrapper -->

@stop


@section('foot')
<!--[if lt IE 9]>
<script src="./js/libs/excanvas.compiled.js"></script>
<![endif]-->
<!-- App JS -->
<script src="{{ asset('assets/js/mvpready-core.js') }}"></script>
<script src="{{ asset('assets/js/mvpready-admin.js') }}"></script>

<!-- Plugin JS -->
<script src="{{ asset('assets/js/mvpready-account.js') }}"></script>
<!-- <script src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/mvpready-login-validator.js') }}"></script> -->
@stop
