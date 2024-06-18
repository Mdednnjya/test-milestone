<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">SEA-salon</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reviews.reviews') }}">Reviews</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- Bootstrap and other scripts -->
</body>
</html>
