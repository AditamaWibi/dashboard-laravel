<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dashboard App">
    <meta name="author" content="Wibi Aditama">
		<meta name="generator" content="Hugo 0.84.0">

    <title>Sign &mdash; in</title>

		{{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

		{{-- FONT --}}
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		{{-- PERSONAL CSS --}}
		<link rel="stylesheet" href="/css/style.css">

  </head>
  <body class="text-center">
		<main class="form-signin">
			<form action="/" method="POST">
				@csrf

				<h1 class="h3 mb-3">Please Sign In</h1>

				<div class="form-floating">
					<input type="email" class="form-control" id="mailInput" name="email" placeholder="name@example.com" autofocus>
					<label for="mainInput">E&dash;mail</label>
				</div>

				<div class="form-floating">
					<input type="password" class="form-control" id="password" name="password" placeholder="password">
					<label for="password">Password</label>
				</div>

				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Remember me
					</label>
				</div>

				<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

				<p class="mt-5">Don't have any account? <a href="/register">Register Here!</a></p>

				<p class="mb-3 text-muted">&copy; 2023-2033</p>
			</form>
		</main>
  </body>
</html>