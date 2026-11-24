<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Royal Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
</head>
<body>
    <main class="container min-vh-100 d-flex flex-column justify-content-center align-items-center text-center py-5">
        <a href="{{ url('/') }}" class="brand-mark mb-5"><span class="brand-icon"><i class="fa-solid fa-utensils"></i></span><span class="brand-name">Royal Restaurant</span></a>
        <div class="page-eyebrow">The art of hospitality</div>
        <h1 class="page-title" style="max-width:850px">A refined dining experience, <span class="text-gold">made with care.</span></h1>
        <p class="page-subtitle mx-auto mt-4">Discover the menu and explore a selection of thoughtfully prepared dishes.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
            <a href="{{ url('/') }}" class="btn btn-gold px-4">Explore Our Menu <i class="fa-solid fa-arrow-right ms-2"></i></a>
            @if (Route::has('login'))
                @auth<a href="{{ url('/dashboard') }}" class="btn btn-outline-soft px-4">Dashboard</a>
                @else<a href="{{ route('login') }}" class="btn btn-outline-soft px-4">Admin Login</a>@endauth
            @endif
        </div>
    </main>
</body>
</html>
