@extends('admin.layouts.master')
@section('content')
<div class="box">
<div class="box-header">
    <h3 class="box-title">Truck Details</h3>
</div>

<div class="box-body">
<div class="right" style="text-align:right;">
    <a class="btn btn-default btn-sm" href="{{url('admin/trucks',  '', $secure = null)}}">Back to Trucks</a>
    <a class="btn btn-success btn-sm" href="{{url('admin/trucks/edit',  $truck->id, $secure = null)}}">Edit</a>
</div>
<br/>
    <table width="100%" class="table table-bordered">
       <tr>
            <th width="14%">Type :</th>
            <td width="86%">{{$truck->type}}</td>
      </tr>
        <tr>
            <th>Year :</th>
            <td>{{$truck->year}}</td>
        </tr>
        <tr>
            <th>Structure :</th>
            <td>{{$truck->structure}}</td>
        </tr>
        <tr>
            <th>Price :</th>
            <td>{{$truck->price}}</td>
        </tr>
        <tr>
            <th>Serial :</th>
            <td>{{$truck->serial}}</td>
        </tr>
        <tr>
            <th>Details :</th>
            <td>{{$truck->details}}</td>
        </tr>
         
    </table>
</div>
</div><!-- /.box -->
@stop