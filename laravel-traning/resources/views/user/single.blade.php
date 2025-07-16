@extends('layouts.user')

@section('title', 'All users')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h2>user Detail</h2>
				<ul class="list-group">

					<li class="list-group-item">
						<strong>Name:</strong> {{ $user->name }}
					</li>
					<li class="list-group-item">
						<strong>Phone No:</strong> {{ $user->phone_no }}
					</li>
					<li class="list-group-item">
						<strong>Email:</strong> {{ $user->email }}
					</li>
					<li class="list-group-item">
						<strong>Address:</strong> {{ $user->address }}
					</li>
				</ul>
				<br>
				<a href="{{ route('user.index') }}" class="main-content">Back to Users</a>
			</div>

			<div class="col-6">
				<h2>Update User</h2>
				<form id="userForm" method="post" action="{{ route('user.update', $user->id) }}" class="p-4 bg-white shadow-sm rounded">
					@csrf
					@method('PUT')
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<x-form.input
							type="text"
							name="name"
							label="Name"
							value="{{ old('name', $user->name) }}"
							placeholder="Enter username"
					/>

					<x-form.input
							type="text"
							name="phone_no"
							label="Phone No."
							value="{{ old('phone_no', $user->phone_no) }}"
							placeholder="Enter phone no."
					/>

					<x-form.input
							type="email"
							name="email"
							label="Email"
							value="{{ old('email', $user->email) }}"
							placeholder="Enter email"
					/>

					<x-form.input
							type="password"
							name="password"
							label="Password (leave blank to keep current)"
							value=""
							placeholder="Enter password"
					/>

					<x-form.input
							type="text"
							name="address"
							label="Address"
							value="{{ old('address', $user->address) }}"
							placeholder="Enter address"
					/>

					<div class="d-grid">
						<button type="submit" class="btn btn-primary">Update User</button>
					</div>
				</form>
			</div>

		</div>

		<div class="mt-3">
			<form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete User</button>
			</form>
		</div>

	</div>
@endsection