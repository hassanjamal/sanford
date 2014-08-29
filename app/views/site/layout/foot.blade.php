    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/libs/jquery-1.10.2.min.js') }}"></script>
    <!-- <script src="js/libs/bootstrap.min.js"></script> -->

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    @section('foot')

        <script src="{{ asset('assets/js/plugins/timeago/jquery.timeago.js') }}"></script>

        <!--[if lt IE 9]>
            <script src="./js/libs/excanvas.compiled.js"></script>
        <![endif]-->

        <!-- App JS -->
        <script src="{{ asset('assets/js/mvpready-core.js') }}"></script>
        <script src="{{ asset('assets/js/mvpready-landing.js') }}"></script>

        <!-- Plugin JS -->
        <script src="{{ asset('assets/js/pricing.js') }}"></script>

    @show

</body>
</html>