<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') | Royal Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark site-nav sticky-top">
    <div class="container py-2">
        <a class="navbar-brand brand-mark" href="{{ route('dashboard') }}">
            <span class="brand-icon"><i class="fa-solid fa-utensils"></i></span>
            <span class="brand-name">Royal Restaurant</span>
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav" aria-controls="adminNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNav">
            <div class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <a class="nav-link nav-link-custom {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fa-solid fa-grid-2 me-2"></i>Dashboard</a>
                <a class="nav-link nav-link-custom {{ request()->routeIs('categories.*') ? 'active' : '' }}" href="{{ route('categories.index') }}"><i class="fa-solid fa-layer-group me-2"></i>Categories</a>
                <a class="nav-link nav-link-custom {{ request()->routeIs('meals.*') ? 'active' : '' }}" href="{{ route('meals.index') }}"><i class="fa-solid fa-bowl-food me-2"></i>Meals</a>
                <a class="nav-link nav-link-custom" href="{{ url('/') }}" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square me-2"></i>View Website</a>
                <form method="POST" action="{{ route('logout') }}" class="ms-lg-2">@csrf
                    <button type="submit" class="btn btn-outline-soft btn-sm px-3"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
<main>
    @if ($errors->any())
        <div class="container pt-4"><div class="alert alert-danger mb-0"><div class="fw-bold mb-1">Please check the following:</div><ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div></div>
    @endif
    @if(session('success'))
        <div class="container pt-4"><div class="alert alert-success mb-0"><i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}</div></div>
    @endif
    @yield('content')
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
