@extends('layouts.base')

{{-- TODO  --}}
{{-- Add terms of service and privacy policy links --}}
{{-- Get all text into translations --}}


@section('head')
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/mvpready-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mvpready-flat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrapValidator.min.css') }}">
    {{--  adding font awesome--}}
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <img src="{{ asset('assets/img/logo.png') }}" alt="MVP Ready">
                </a>
            </div> <!-- /.navbar-header -->

            <nav class="collapse navbar-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="{{{URL::to('/')}}}">
                            <i class="fa fa-angle-double-left"></i> &nbsp;Back to Home
                        </a>
                    </li>
                </ul>
            </nav>

        </div> <!-- /.container -->
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


        <div class="account-body">

            <h3>Get Started with a Free Account.</h3>
            <h5>Sign up in 30 seconds. No credit card required.</h5>

            <form class="form account-form" id="form-register" method="POST" action="{{ route('signup') }}">

                {{ Form::token() }}

                <div class="form-group">
                    <label for="signup_firstname" class="placeholder-hidden">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="signup_firstname" placeholder="First Name" tabindex="1">
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="signup_lastname" class="placeholder-hidden">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="signup_lastname" placeholder="Last Name" tabindex="1">
                </div>

                <div class="form-group">
                    <label for="signup_company" class="placeholder-hidden">Company Name</label>
                    <input type="text" name="company" class="form-control" id="signup_company" placeholder="XYZ Limited" tabindex="2">
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="signup_email" class="placeholder-hidden">Email Address</label>
                    <input type="text" name="email" class="form-control" id="signup_email" placeholder="Your Email" tabindex="3">
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="login_password" class="placeholder-hidden">Password</label>
                    <input type="password" name="password" class="form-control" id="login_password" placeholder="Password" tabindex="4">
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="login_password_confirmation" class="placeholder-hidden">Password Confirmation</label>
                    <input type="password" name="password_confirm" class="form-control" id="login_password_confirmation" placeholder="Confirm Password" tabindex="5">
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" class="" value="" tabindex="6" checked> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>
                    </label>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="6">
                        Create My Account &nbsp; <i class="fa fa-play-circle"></i>
                    </button>
                </div> <!-- /.form-group -->

            </form>

        </div> <!-- /.account-body -->

        <div class="account-footer">
            <p>
                Already have an account? &nbsp;
                <a href="{{ route('signin') }}" class="">Login to your Account!</a>
            </p>
        </div> <!-- /.account-footer -->

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
    <script src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('assets/js/mvpready-account-validator.js') }}"></script>
@stop
