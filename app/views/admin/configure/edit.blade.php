@extends('admin.layouts.master')
@section('content')
<div class="row">
<div class="content">


<div class="col-md-2">
</div>
<div class="col-md-8">
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Edit Truck</h3>
</div><!-- /.box-header -->
<!-- form start -->
{{Form::open()}}
<form role="form">
<div class="box-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Type</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$truck->type}}" placeholder="{{$truck->type}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Year</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{$truck->year}}" placeholder="{{$truck->year}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Structure</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$truck->structure}}" placeholder="{{$truck->structure}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="zipcode" value="{{$truck->price}}" placeholder="{{$truck->price}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Serial</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="country" value="{{$truck->serial}}" placeholder="{{$truck->serial}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Details</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="telephone" value="{{$truck->details}}" placeholder="{{$truck->details}}">
    </div>
    
</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
{{Form::close()}}
</div>
</div>

</div><!-- /.content -->
</div>
@stop