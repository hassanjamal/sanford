@extends('admin.layouts.master')
@section('styles')
<link href="/admin/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<script src="/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
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
        <div class="col-xs-8">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="success">
                            <th>#</th>
                            <th>Login ID </th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }} </td>
                            <td>{{ $user->login_id}}</td>
                            <td>{{ $user->first_name}}</td>
                            <td>{{ $user->last_name}}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-danger">edit</a>
                                <a href="{{ route('admin.user.show', $user->id) }}" class="btn btn-primary">Details</a>
                                <a href="{{ route('userReceipt', $user->id) }}" class="btn btn-info">Receipt</a>
                                <a href="{{ route('userWelcome', $user->id) }}" class="btn btn-info">Welcome</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <div class="text-right"> {{ $users->links() }} </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
@stop
