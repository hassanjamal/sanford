@extends('admin.layouts.master')
@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Search Users</h3>
    </div>
    <!-- /.box-header -->
    {{Form::open('url'=>'admin/users/search')}}
    {{Form::text('query')}}
    {{Form::submit('go')}}
    {{Form::close()}}
    <div class="box-body">
        <table width="100%" class="table table-bordered">
            <tr>
                <th width="143" style="width: 10px">#</th>
                <th width="310">Name</th>
                <th width="287">Email</th>
                <th width="83" style="width: 40px">Options</th>
            </tr>
            <?php $count = 1; ?>
            @foreach($users as $user)
            <tr>
                <td style="width: 10px">{{$count}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td style="width: 40px">
                    <a class="btn btn-primary btn-sm" href="{{url('admin/users',  $user->id, $secure = null)}}"><span
                            class="fa fa-eye"></span></a>
                    <a class="btn btn-danger btn-sm"
                       href="{{url('admin/users/delete',  $user->id, $secure = null)}}"><span
                            class="fa fa-trash-o"></span></a>
                </td>
            </tr>
            <?php $count ++; ?>
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->

    <div class="box-footer clearfix">

        <div class="pagination pagination-sm no-margin pull-right">
            {{$users->links()}}

        </div>
    </div>
</div><!-- /.box -->
@stop