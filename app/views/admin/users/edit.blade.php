@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="content">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Edit User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($user, ['route' => ['admin.user.update', $user->id], 'method' => 'PATCH']) }}
                <div class="box-body">
                    <!--form element here-->
                    @include('admin.users._partials._formUser')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <!--buttons here-->
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary form-control']) }}
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>

<br><hr><br>
<div class="row">
    <div class="content">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($user, ['route' => ['adminPasswordChange', $user->id], 'method' => 'PATCH']) }}
                <div class="box-body">
                    <!--form element here-->
                    @include('admin.users._partials._formPassword')
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <!--buttons here-->
                    {{ Form::submit('Change', ['class' => 'btn btn-danger form-control']) }}
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@stop