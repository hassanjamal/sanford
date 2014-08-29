<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'default title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('meta')

    <!-- stylesheets -->
    <!-- Bootstrap Core CSS -->
    <link href="/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="/admin/bootstrap/css/plugins/metisMenu/metisMenu.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="/admin/js/jquery-1.11.0.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
    @yield('styles')
</head>
<body>


<div id="wrapper">
    @yield('navbar.prepend')
    @include('admin.layouts.navbar')
    @yield('navbar.append')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">@yield('pageHeading')</h1>
            </div>
        </div>
        @yield('content')
    </div>
</div>
<!-- ./ #main -->

<!-- scripts -->
<!-- jQuery Version 1.11.0 -->
<!-- Bootstrap Core JavaScript -->
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
@yield('scripts')
<!-- Metis Menu Plugin JavaScript -->
<script src="/admin/js/plugins/metisMenu/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/admin/js/sb-admin-2.js"></script>

<script>
    var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
    (function (d, t) {
        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
        g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>

</body>
</html>
