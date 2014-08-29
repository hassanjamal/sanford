<header class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand navbar-brand-img" href="">
                <!--                <img alt="" src="{{ asset('assets/img/logo.png') }}">-->
                <!--                <h2 class="lead">Blue Crystal</h2>-->
            </a>

            <button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- /.navbar-header -->

        <nav class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="" class="menuitem">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li class="divider visible-xs">&nbsp;</li>
                <li class="visible-xs">
                    <a href="">Login</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right mainnav-menu">
                <li class="dropdown hidden-xs">
                    <div>
                        <a href="{{ route('login') }}" class="btn btn-md btn-primary navbar-btn"
                           style="margin:13px 0px 0px 0px;">Login <i class="fa fa-user"></i></a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.container -->
</header>
