{{--  TODO --}}
{{--  Setup all links --}}
{{--  Replace text with transllations --}}

<header class="navbar navbar-inverse" role="banner">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-cog"></i>
            </button>

            <a href="{{{URL::to('/')}}}" class="navbar-brand navbar-brand-img">
                <!-- <img src="{{ asset('assets/img/logo.png') }}" alt="MVP Ready"> -->
            </a>
        </div> <!-- /.navbar-header -->


        <nav class="collapse navbar-collapse" role="navigation">

            <ul class="nav navbar-nav noticebar navbar-left">

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
                        <span class="badge badge-primary">3</span>
                    </a>

                    <ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">
                        <li class="nav-header">
                            <div class="pull-left">Notifications</div>
                            <div class="pull-right"><a href="javascript:;">Mark as Read</a></div>
                        </li>

                        <li>
                            <a href="#" class="noticebar-item">
                                <span class="noticebar-item-image">
                                    <i class="fa fa-cloud-upload text-success"></i>
                                </span>
                                <span class="noticebar-item-body">
                                    <strong class="noticebar-item-title">Templates Synced</strong>
                                    <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="./page-notifications.html" class="noticebar-item">
                                <span class="noticebar-item-image">
                                    <i class="fa fa-ban text-danger"></i>
                                </span>
                                <span class="noticebar-item-body">
                                    <strong class="noticebar-item-title">Sync Error</strong>
                                    <span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>
                                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                                </span>
                            </a>
                        </li>

                        <li class="noticebar-menu-view-all"><a href="#">View All Notifications</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-exclamation-triangle"></i>
                        <span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>
                        <span class="badge badge-primary">1</span>
                    </a>

                    <ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">
                        <li class="nav-header">
                            <div class="pull-left">Alerts</div>
                        </li>

                        <li>
                            <a href="#" class="noticebar-item">
                                <span class="noticebar-item-image">
                                    <i class="fa fa-euro text-danger"></i>
                                </span>
                                <span class="noticebar-item-body">
                                    <strong class="noticebar-item-title">payment needed</strong>
                                    <span class="noticebar-item-text">Your subscription will end in <span class="text-danger"><strong>8 days</strong></span>.<br />Click here to renew your subscription.</span>
                                    <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> five days ago</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                @if(Sentry::getUser()->isSuperUser())
                <li class="dropdown navbar-profile">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <i class="fa fa-dashboard"></i>
                        <span class="navbar-profile-label">  Admin Panel</span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{{ URL::to('admin/configure') }}}">
                                <i class="fa fa-cogs"></i> &nbsp;&nbsp;Configure
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <i class="fa fa-group"></i>&nbsp;&nbsp;Users
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="dropdown navbar-profile">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <img src="{{ asset('assets/img/avatars/avatar-1-xs.jpg') }}" class="navbar-profile-avatar" alt="">
                        <span class="navbar-profile-label">{{{ Sentry::getUser()->email }}}</span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{  route('settings')  }}">
                                <i class="fa fa-user"></i> &nbsp;&nbsp;My Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div> <!-- /.container -->
</header>
