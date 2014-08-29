<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
            </li>
            <li>
                <a href="{{ route('adminDashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>&nbsp;&nbsp;Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i>&nbsp;&nbsp;User Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href=" {{ route('admin.user.index') }}"><i class="fa fa-search"></i>&nbsp;&nbsp;All User</a></li>
                    <li><a href=" {{ route('admin.user.create') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp;New User</a></li>
                </ul>
            </li>
            <li>
             <a href="#"><i class="fa fa-cubes fa-fw"></i>&nbsp;&nbsp;Package Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href=" {{ route('admin.package.index') }}"><i class="fa fa-search"></i>&nbsp;&nbsp;All Package</a></li>
                    <li><a href=" {{ route('admin.package.create') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Package</a></li>
                </ul>
            </li>
            <li>
             <a href="#"><i class="fa fa-rupee fa-fw"></i>&nbsp;&nbsp;Payment Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href=" {{ route('admin.package.index') }}"><i class="fa fa-search"></i>&nbsp;&nbsp;All Payments</a></li>
                    <li><a href=" {{ route('admin.package.create') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Payment</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('adminDashboard') }}">
                    <i class="fa fa-share-alt"></i>&nbsp;&nbsp;<span> View Tree</span>
                </a>
            </li>
    </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
