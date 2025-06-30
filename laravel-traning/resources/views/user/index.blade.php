@extends('layouts.user')

@section('title', 'User Index')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-8">
				<h2 class="mb-2">User Registration</h2>

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

				<form id="userForm" method="post" action="{{ route('user.store') }}" class="p-4 bg-white shadow-sm rounded">
					@csrf

					<x-form.input
							type="text"
							name="username"
							label="Username"
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

					<div class="d-grid">
						<button type="submit" class="btn btn-primary py-2">Submit</button>
					</div>
				</form>

				<br>
				<div class="d-grid">
					<button type="submit" form="userForm">Submit outside</button>
				</div>
			</div>

			<div class="col-4">
				form list here
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script>
		document.getElementById('userForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Prevent the default form submission
			alert('Form submitted successfully!');
			this.submit(); // Submit the form programmatically
		});
	</script>
@endpush
