@extends('layouts.manage')

@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Manage Permissions</h1>
			</div>
			<div class="column">
				<a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right">Create New</a>
			</div>
		</div>
	<hr>
	<div class="card">
	<div class="card-content">
	<table class="table is-narrow">
		<thead>
			<tr>
				<th>Name</th>
				<th>Slug</th>
				<th>Description</th>
				
			</tr>
		</thead>
		<tbody>
		@foreach($permissions as $permission)
			<tr>
				<td>{{$permission->display_name}}</td>
				<td>{{$permission->name}}</td>
				<td>{{$permission->description}}</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</div>
	</div>
@endsection