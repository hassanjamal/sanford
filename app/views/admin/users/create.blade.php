@extends('admin.layouts.master')
@section('styles')
<link rel="stylesheet" href="/admin/css/plugins/datetime/bootstrap-datetimepicker.css"/>
<link rel="stylesheet" href="/admin/css/plugins/jqueryui/jquery-ui.css"/>
@stop
@section('pageHeading')
<div class="col-xs-offset-2">
    {{ 'User Management' }}
</div>
@stop
@section('content')
<div class="row">
    <div class="content">
        <div class="col-xs-2">
        </div>
        <div class="col-xs-8 well">
            {{ Form::open(['route' => 'admin.user.store', 'method' => 'POST' , 'class'=>'form-horizontal', 'id' => 'userCreate']) }}
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

            {{ Form::hidden('rootExist', $rootExist) }}
            {{ Form::hidden('to_parent_id', null, ['id' => 'to_parent_id']) }}
            {{ Form::hidden('to_sponsor_id', null , ['id' => 'to_sponsor_id']) }}
            <!--form element here-->
            @include('admin.users._partials._formUser')
            <!--buttons here-->
            {{ Form::submit('Create User', ['class'=>'btn btn-block btn-success', 'id'=>'userSubmit']) }}
            {{Form::close()}}
        </div>
    </div>
</div>
</div>
@stop

@section('scripts')
<script src="/admin/js/plugins/wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="/admin/js/plugins/wizard/user.wizard.js"></script>
<script src="/admin/js/plugins/validation/bootstrapValidator.min.js"></script>
<script src="/admin/js/plugins/datepicker/moment.js"></script>
<script src="/admin/js/plugins/datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="/admin/js/plugins/datepicker/user.create.datetime.js"></script>
<script src="/admin/js/plugins/validation/user.create.validation.js"></script>
<script src="/admin/js/plugins/jqueryui/jquery-ui.js"></script>
<script src="/admin/js/plugins/jqueryui/user.create.autocomplete.js"></script>
@stop
