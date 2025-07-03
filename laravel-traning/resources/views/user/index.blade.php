@extends('layouts.user')

@section('title', 'All users')

@section('content')
	<div class="container">
		<h2>All Registered Users</h2>
		@if(session('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif
		<a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Add New User</a>
		<table class="table table-bordered">

			<thead>
			<tr>
				<th>Username</th>
				<th>Phone No</th>
				<th>Email</th>
			</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->phone_no }}</td>
					<td>{{ $user->email }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection
