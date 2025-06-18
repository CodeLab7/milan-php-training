<!DOCTYPE html>
<html lang="en">

<head>
	<title>Validation</title>
	<style>
		input {
			font-size: 18px;
			padding: 5px 8px;
			margin: 10px;
		}
		.error {
			color: red;
			font-size: 18px;
		}
		.form-container {
			width: 100%;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>

<body>
<form method="post" action="/user/store" class="form-container">
	@csrf
	<label for="username">Username:</label>
	<input type="text" id="username" name="username" placeholder="Enter username">
	@error('username')
	<div class="error">{{ $message }}</div>
	@enderror

	<br>
	<label for="phone_no">Phone No.:</label>
	<input type="text" id="phone_no" name="phone_no" placeholder="Enter phone no.">
	@error('phone_no')
	<div class="error">{{ $message }}</div>
	@enderror

	<br>
	<label for="email">Email:</label>
	<input type="email" id="email" name="email" placeholder="Enter email">
	@error('email')
	<div class="error">{{ $message }}</div>
	@enderror

	<br>

	<label for="password">Password:</label>
	<input type="password" id="password" name="password" placeholder="Enter password">
	@error('password')
	<div class="error">{{ $message }}</div>
	@enderror

	<br>
	<input type="submit" value="Submit">
</form>
</body>
</html>