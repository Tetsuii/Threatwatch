<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Include CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    
</head>
<body>

    <div class="navbar">
        @include('layouts.navbar') <!-- Navbar partial -->
    </div>

    <div class="main">
        @yield('content')
    </div>

    <div class="footer">
        @include('layouts.footer') <!-- Footer partial -->
    </div>

</body>
</html>
