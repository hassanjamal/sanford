<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <title> &middot; </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Google Font: Open Sans -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300,700">

    <!-- Font Awesome CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Misc CSS -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- App CSS -->
    @section('head')
        <link href="{{ asset('assets/css/mvpready-landing.css') }}" rel="stylesheet">
    @show

    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>

    @yield('base-content')

    <script src="{{ asset('assets/js/libs/jquery-1.10.2.min.js') }}"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    @section('foot')
        <script src="{{ asset('assets/js/plugins/timeago/jquery.timeago.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('assets/js/mvpready-core.js') }}"></script>
        <script src="{{ asset('assets/js/mvpready-landing.js') }}"></script>

        <!-- Plugin JS -->
        <script src="{{ asset('assets/js/pricing.js') }}"></script>

    @show

</body>
</html>
