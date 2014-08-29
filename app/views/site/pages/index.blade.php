@extends('site.layout.master')

@section('content')

    <div class="layout layout-stack-sm layout-main-right">

        @include('site.layout.sidebar')

        <div class="col-xs-12 col-sm-9 col-md-10 layout-main">
            <h3 class="content-title"><span>Blue Crystal Marketing Pvt Ltd</span></h3>

            <div class="well">

            </div><!-- / well -->

        </div> <!-- /.layout-main -->
    </div> <!-- /.layout -->
<div class="form-group">
    {{ Form::label('name', 'value', ['class' => 'control-label']) }}
    {{ Form::text('name', 'value', ['class' => 'form-control']) }}
</div>



@stop
