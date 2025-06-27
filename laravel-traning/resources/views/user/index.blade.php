@extends('layouts.user')
@section('title', 'User Index')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-8" >
				<h2 class="mb-2">User Registration</h2>
				<form id="userForm" method="post" action="{{ route('user.store') }}">
				<form method="post" action="{{ route('user.store') }}" class="p-4 bg-white shadow-sm rounded">

					@csrf
					<div>
						<label for="username" class="form-label fw-bold">Username:</label>
						<input type="text" class="form-control" id="username" name="username"  placeholder="Username">
						@error('username')
						<div class="error">{{ $message }}</div>
						@enderror
					</div>

					<div>
						<label for="phone_no" class="form-label fw-bold">Phone No.:</label>
						<input type="text" class="form-control" id="phone_no" name="phone_no"  placeholder="Enter phone no. ">
						@error('phone_no')
						<div class="error">{{ $message }}</div>
						@enderror
					</div>

					<div >
						<label for="email" class="form-label fw-bold">Email:</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email"  >
						@error('email')
						<div class="error">{{ $message }}</div>
						@enderror
					</div>

					<div>
						<label for="password" class="form-label fw-bold">Password:</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
						@error('password')
						<div class="error">{{ $message }}</div>
						@enderror
					</div>
					<br>
					<div class="d-grid">
						<button type="submit" class="btn btn-primary py-2" value="submit">Submit</button>
					</div>

				</form>
				</form>

				<br>
				<div class="d-grid">
					<button type="submit"   form="userForm">Submit outside</button>
				</div>
			</div>


			<div class="col-4">
				form  list here
			</div>

		</div>
	</div>

@endsection