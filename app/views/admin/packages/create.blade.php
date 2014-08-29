@extends('admin.layouts.master')
@section('pageHeading')
<div class="col-md-offset-2">
    Create New Package
</div>
@stop
@section('content')
<div class="row">
    <div class="content">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 well">
            {{ Form::open(['route' => 'admin.package.store', 'method' => 'POST']) }}
            <!--form element here-->
            <!--buttons here-->
            {{ Form::submit('Create', ['class' => 'btn btn-primary form-control']) }}
            {{Form::close()}}
        </div>
    </div>
</div>
</div>
@stop
