<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Successful</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			line-height: 1.6;
			color: #333;
			padding: 20px;
			background-color: #f9f9f9;
		}

		table {
			width: 100%;
			max-width: 600px;
			background: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
		}

		td {
			padding: 8px 0;
		}

		img {
			max-width: 80px;
			border-radius: 10px;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
		}

		p {
			margin-top: 30px;
		}
	</style>
</head>
<body>

<p>Hello <strong>{{ $user->name }}</strong>,</p>

<p>Your registration was successful. Here are your details:</p>

<table>
	<tr>
		<td><strong>Name:</strong></td>
		<td>{{ $user->name }}</td>
	</tr>
	<tr>
		<td><strong>Email:</strong></td>
		<td>{{ $user->email }}</td>
	</tr>
	<tr>
		<td><strong>Mobile:</strong></td>
		<td>{{ $user->phone_no }}</td>
	</tr>
	<tr>
		<td><strong>Address:</strong></td>
		<td>{{ $user->address }}</td>
	</tr>
	@if($user->profile_photo)
		<tr>
			<td style="vertical-align: top;"><strong>Profile Photo:</strong></td>
			<td>
				<img src="{{ asset('storage/uploads/'.$user->profile_photo) }}" alt="Profile Photo"/>
			</td>
		</tr>
	@endif
</table>
<p>Thank you!</p>

</body>
</html>