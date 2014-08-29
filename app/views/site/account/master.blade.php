@extends('site.layout.base')

@section('head')
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/icheck/skins/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/css/dropzone.css') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/mvpready-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mvpready-flat.css') }}">
@stop

@section('base-content')

    <div id="wrapper">
        @include('site.account.layout.navbar')
        @include('site.account.layout.navbar2')

        <div class="content">
            <div class="container">
                @yield('content')
            </div> <!-- /.container -->
        </div> <!-- .content -->
    </div> <!-- /#wrapper -->

    <footer class="footer">
        <div class="container">
            <p class="pull-left">Copyright &copy; {{ date("Y") }} Blue Crystal</p>
        </div>
    </footer>

@stop

@section('foot')
    <!-- Plugin JS -->
    <script src="{{ asset('assets/js/plugins/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone/dropzone.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/js/mvpready-core.js') }}"></script>
    <script src="{{ asset('assets/js/mvpready-admin.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            if(window.location.hash != "")
            {
                $('a[href="' + window.location.hash + '"]').click();
            }
        });
    </script>
@stop
