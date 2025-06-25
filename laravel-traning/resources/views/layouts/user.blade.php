<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		header {
			background-color: #343a40;
			color: white;
			padding: 1rem;
			text-align: center;
		}

		nav {
			background-color: #2c3e50;
			padding: 0.5rem 1rem;
			display: flex;
			gap: 1rem;
		}

		nav a {
			color: rgba(255, 255, 255, 0.8);
			text-decoration: none;
			padding: 0.5rem 1rem;
			transition: all 0.3s;
		}

		nav a:hover {
			color: white;
			background-color: rgba(255, 255, 255, 0.1);
		}

		.main-content {
			display: flex;
			flex: 1;
		}

		article {
			flex: 1;
			padding: 2rem;
			background-color: #f8f9fa;
		}

		aside {
			width: 250px;
			height: 800px;
			background-color: #e9ecef;
			border-left: 1px solid #dee2e6;
		}


		aside a {
			color: #495057;
			text-decoration: none;
			display: block;
			padding: 0.5rem;
		}

		aside a:hover {
			background-color: rgba(0, 0, 0, 0.05);
		}

		.footer {
			position: fixed;
			left: 0;
			padding: 10px;
			bottom: 0;
			width: 100%;
			background-color: #2c3e50;
			color: white;
			text-align: center;
		}

		.section {
			flex: 1;
			padding: 2rem;
			background-color: #f8f9fa;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
	</style>

</head>
<body>
<div id="wrapper">
	<header>
		<h1>User Layout</h1>
	</header>
	<nav>
		<a href="">Home</a>
		<a href="">About</a>
		<a href="">Post</a>
	</nav>
	<main>
		<div class="main-content">
			<aside class="py-2 px-4">
				<ul class="p-0  list-unstyled">
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
