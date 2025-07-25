@extends('layouts.user')

@section('title', 'All users')

@section('content')
	<div class="container">
		<h2>All User List</h2>
		@if(session('success'))
			<div class="alert alert-success">{{ session('success') }}</div>
		@endif
		<a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Add New User</a>
		<table class="table table-bordered">

			<thead>
			<tr>
				<th>Name</th>
				<th>Phone No</th>
				<th>Email</th>
				<th>Address</th>
				<th>Profile Photo</th>
				<th>Download File</th>
			</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
				<tr>
					<td><a href="{{ route('user.single',$user->id) }}">{{ $user->name }}</a></td>
					<td>{{ $user->phone_no }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->address }}</td>
					<td>
						@if($user->profile_photo)
							<img src="{{ asset('storage/uploads/'.$user->profile_photo) }}" width="60"/>
						@else
							No Photo
						@endif
					</td>
					<td>
						@if($user->profile_photo)
							<a href="{{ route('user.download', $user->profile_photo) }}" class="btn btn-sm btn-primary">
								Download
							</a>
						@else
							N/A
						@endif
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection
