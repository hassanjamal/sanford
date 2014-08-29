@extends('admin.layouts.master')
@section('styles')
<link href="/admin/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
<script src="/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
@stop
@section('pageHeading')
<div class="col-xs-offset-2">
	{{ 'Package Management' }}
</div>

@stop

@section('content')
<div class="row">
	<div class="content">
		<div class="col-xs-2">
		</div>
		<div class="col-xs-8">
			<div class="panel-group" id="accordion">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<i class="fa fa-plus"></i>&nbsp;
								Package Details
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<tbody>
										<tr>
											<td>Package Name</td>
											<td>{{ $package->description}}</td>
										</tr>
										<tr>
											<td>Package Value</td>
											<td>
												<i class="fa fa-rupee"></i>&nbsp; 
												{{ $package->value }}
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<i class="fa fa-plus"></i>&nbsp;
								Package Benefit Detail
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel-group" id="accordion-item">
								<?php $i = 1; ?>
								@foreach ($packageItems as $item)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-item" href="#collapse{{ $i}}">
												<i class="fa fa-plus"></i>&nbsp;
												{{ $item->description}}
											</a>
										</h4>
									</div>
									<div id="collapse{{ $i}}" class="panel-collapse collapse in">
										<div class="panel-body">
											{{ Form::open()}}
											<div class="table-responsive">
												<table class="table table-hover table-bordered">
													<tbody>
														<tr>
															<td width="50%">Value</td>
															<td>
																<i class="fa fa-rupee"></i>&nbsp; 
																{{ $item->value or 'Not Applicable' }}
															</td>
														</tr>
														<tr>
															<td width="50%">Quantity</td>
															<td>{{ $item->quantity or 'Not Applicable'}}</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="text-right">
											{{ Form::submit('Change', ['class' => 'btn btn-success'])}}
											</div>
											{{ Form::close()}}
										</div>
									</div>
								</div>
								<?php $i++; ?>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('scripts')
@stop
