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
    <nav class="nvabar navbar-inverse">
        <div class="container">
            <a href="#" class="navbar-brand">Title</a>
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">Category</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('product.index')}}" class="nav-link">Product</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('main')
    </div>
</body>