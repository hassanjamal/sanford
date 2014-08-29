@extends('admin.layouts.master')
@section('content')
<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Search Trucks</h3>
                                </div><!-- /.box-header -->
                                {{Form::open('url'=>'admin/trucks/search')}}
                                    {{Form::text('query')}}
                                    {{Form::submit('go')}}
                                {{Form::close()}}
                                <div class="box-body">
                                    <table width="100%" class="table table-bordered">
                                        <tr>
                                            <th width="143" style="width: 10px">#</th>
                                            <th width="310">Type</th>
                                            <th width="287">Price</th>
                                            <th width="287">Details</th>
                                            <th width="83" style="width: 40px">Options</th>
                                        </tr>
                                     <?php $count = 1; ?>   
                                    @foreach($truck as $truck)    
                                        <tr>
                                            <td style="width: 10px">{{$count}}</td>
                                            <td>{{$truck->type}}</td>
                                            <td>{{$truck->price}}</td>
                                            <td>{{$truck->details}}</td>
                                            <td style="width: 40px">
                                                <a class="btn btn-primary btn-sm" href="{{url('admin/trucks',  $truck->id, $secure = null)}}"><span class="fa fa-eye"></span></a>
                                                <a class="btn btn-danger btn-sm" href="{{url('admin/trucks/delete',  $truck->id, $secure = null)}}"><span class="fa fa-trash-o"></span></a>
                                            </td>
                                        </tr> 
                                        <?php $count++; ?>
                                    @endforeach                                           
                                  </table>
                                </div><!-- /.box-body -->

                                <div class="box-footer clearfix">

                                    <div class="pagination pagination-sm no-margin pull-right">
                                    {{$truck->links()}}

                                    </div>
                                </div>
                            </div><!-- /.box -->
@stop