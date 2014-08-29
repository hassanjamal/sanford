@extends('site.account.master')

@section('content')

    <div class="site.layout layout-main-right layout-stack-sm">
        <div class="col-md-3 col-sm-4 layout-sidebar">
            <div class="nav-layout-sidebar-skip">
                <strong>Tab Navigation</strong> / <a href="#settings-content">Skip to Content</a>
            </div>

            <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
                <li class="active">
                    <a href="#profile-tab" data-toggle="tab">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;Profile Settings
                    </a>
                </li>
                <li>
                    <a href="#company-tab" data-toggle="tab">
                        <i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Company Settings
                    </a>
                </li>
                <li>
                    <a href="#password-tab" data-toggle="tab">
                        <i class="fa fa-lock"></i>&nbsp;&nbsp;Change Password
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

                <div class="tab-pane fade in active" id="profile-tab">
                    <h3 class="content-title"><u>Edit Profile</u></h3>

                    @include('site.layout.messages')

                    <form action="{{ route('settings') }}" method="POST" class="form-horizontal">
                        {{ Form::token() }}
                        <div class="form-group">
                            <label class="col-md-3">First Name</label>
                            <div class="col-md-7">
                                <input type="text" name="first_name" value="{{{ $log_user->first_name }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-7">
                                <input type="text" name="last_name" value="{{{ $log_user->last_name }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->


                        <div class="form-group">
                            <label class="col-md-3">Address</label>
                            <div class="col-md-7">
                                <textarea type="text" name="address" class="form-control">{{{ $log_user->address or '' }}}</textarea>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">ZipCode</label>
                            <div class="col-md-7">
                                <input type="text" name="zipcode" value="{{{ $log_user->zipcode or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">City</label>
                            <div class="col-md-7">
                                <input type="text" name="city" value="{{{ $log_user->city or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Country</label>
                            <div class="col-md-7">
                                <input type="text" name="country" value="{{{ $log_user->country or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Telephone</label>
                            <div class="col-md-7">
                                <input type="text" name="telephone" value="{{{ $log_user->telephone or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Fax</label>
                            <div class="col-md-7">
                                <input type="text" name="fax" value="{{{ $log_user->fax or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Website</label>
                            <div class="col-md-7">
                                <input type="url" name="website" value="{{{ $log_user->website or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Email Address</label>
                            <div class="col-md-7">
                                <input readonly type="text" name="email" value="{{{ $log_user->email or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                &nbsp;
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                    </form>
                </div> <!-- /.tab-pane -->


                <div class="tab-pane fade" id="password-tab">

                    <h3 class="content-title"><u>Change Password</u></h3>

                    @include('site.layout.messages')

                    <form action="{{ route('settingsPassword') }}" method="POST" class="form-horizontal">

                        {{ Form::token() }}

                        <div class="form-group">
                            <label class="col-md-3">Old Password</label>
                            <div class="col-md-7">
                                <input type="password" name="old-password" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <hr>

                        <div class="form-group">
                            <label class="col-md-3">New Password</label>
                            <div class="col-md-7">
                                <input type="password" name="password" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">New Password Confirm</label>
                            <div class="col-md-7">
                                <input type="password" name="password_confirmation" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->
                    </form>
                </div> <!-- /.tab-pane -->



                <div class="tab-pane fade" id="company-tab">
                    <h3 class="content-title"><u>Edit Company Profile</u></h3>

                    <form action="{{ route('settingsLogo') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

                        {{ Form::token() }}

                        <div class="form-group">
                            <label class="col-md-3">Company Name</label>
                            <div class="col-md-7">
                                <input readonly type="text" name="name" value="{{{ $log_user->company or '' }}}" class="form-control" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <label class="col-md-3">Company Logo</label>
                            <div class="col-md-7">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/img/clients/logo1-grayscale.png') }}" alt="Company Logo" />
                                </div>

                                <input type="file" name="logo" />
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->

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
