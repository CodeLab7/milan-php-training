<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('asset/css/custom.css') }}">

</head>
<body>
<div id="wrapper">
	<header>
		<h1>User Layout</h1>
	</header>
	<nav>
		<a href="">Home</a>
		<a href="{{route('logout')}}" style="margin-left: auto">Logout </a>
	</nav>
	<main>
		<div class="main-content">
			<aside class="py-2 px-4">
				<ul class="p-0  list-unstyled">
					<li class="mb-2"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="mb-2"><a href="{{route('user.index')}}">Users</a></li>
				</ul>
			</aside>
			<div class="section">
				@yield('content')
			</div>
		</div>
	</main>
	<div class="footer">
		<p>@ {{now()->year}} Copyrights reserved</p>
	</div>
</div>
</body>
</html>
