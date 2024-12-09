<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            	<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link text-light" href="{{ route('admin.index') }}">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="{{ route('category.index') }}">Category</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="{{ route('product.index') }}">Product</a>
					</li>
					<li class="nav-item">
						@if (Session::has('User'))
							<a class="nav-link text-light" href="{{ route('admin.logout') }}">Logout</a>
						@else
							<a class="nav-link text-light" href="{{ route('admin.login') }}">Login</a>
						@endif
					</li>
            	</ul>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('main')
    </div>
</body>