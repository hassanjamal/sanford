@extends('site.layout.base')

@section('base-content')
<div id="wrapper">
    @include('site.layout.nav')

    <div class="masthead">
        <div class="container">
            <h1 class="masthead-subtitle"></h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.masthead -->

    <div class="content">
        <div class="container">
            @yield('content')
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content -->

</div> <!-- /#wrapper -->

@include('site.layout.footer')

@stop
