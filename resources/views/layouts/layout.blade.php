<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'e-store')</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/css/home.css">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">E-store</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav mx-auto order-0">
					<a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="/about-us">About Us</a>
					<a class="nav-item nav-link" href="/contact">Contact</a>
					<a class="nav-item nav-link" href="/locations">Locations</a>
				</div>
				<div class="navbar-nav navbar-right">
					<a class="nav-item nav-link" href="/register">Sign up</a>
					<a class="nav-item nav-link" href="/login">Login</a>
				</div>
			</div>
		</nav>
	</header>
</head>

@yield('content')

<footer>&copy; 2030 estore &nbsp; Design by Kresten Ordekian.</footer>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../Assets/JS/project.js"></script>
</body>
</html>
