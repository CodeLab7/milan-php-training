@extends('layouts.user')

@section('title', 'All users')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h2 class="mb-2">User Registration</h2>


				<form id="userForm" method="post" action="{{ route('user.store') }}" class="p-4 bg-white shadow-sm rounded">

					@csrf
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
							placeholder="Enter username"
					/>


					<x-form.input
							type="text"
							name="phone_no"
							label="Phone No."
							placeholder="Enter phone no."
					/>

					<x-form.input
							type="email"
							name="email"
							label="Email"
							placeholder="Enter email"
					/>

					<x-form.input
							type="password"
							name="password"
							label="Password"
							placeholder="Enter password"
					/>
					<x-form.input
							type="text"
							name="address"
							label="Address"
							placeholder="Enter address"
					/>


					<div class="d-grid">
						<button type="submit" class="btn btn-primary py-2">Submit</button>
					</div>
				</form>

				<br>
			</div>

		</div>
	</div>
@endsection

@push('styles')
	<style>
		.form-control {
			border: 2px solid #ced4da;
			border-radius: 0.25rem;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			line-height: 1.5;
		}
	</style>
@endpush