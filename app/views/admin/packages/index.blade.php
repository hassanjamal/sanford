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
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
						<tr class="success">
							<th>#</th>
							<th>Package </th>
							<th>Value</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($allPackages as $package)
						<tr>
							<td>{{ $package->id }} </td>
							<td>{{ $package->description}}</td>
							<td>{{ $package->value}}</td>
							<td>
								<a href="{{ route('admin.package.edit', $package->id) }}" class="btn btn-danger">edit</a>
								<a href="{{ route('admin.package.show', $package->id) }}" class="btn btn-primary">Benefits</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div> 
		    <div class="text-right"> {{ $allPackages->links() }} </div>
		</div>
	</div>
</div>
@stop
@section('scripts')
@stop
