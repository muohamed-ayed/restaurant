<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Royal Restaurant') }} | Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="auth-shell">
    <aside class="auth-visual">
        <a href="{{ url('/') }}" class="brand-mark"><span class="brand-icon"><i class="fa-solid fa-utensils"></i></span><span class="brand-name">Royal Restaurant</span></a>
        <div><div class="page-eyebrow">The art of hospitality</div><h1 class="auth-quote">A beautiful dining experience begins <span>behind the scenes.</span></h1><p class="text-white-50 mt-4 mb-0">Restaurant management, made simple and elegant.</p></div>
        <div class="auth-footer">© {{ date('Y') }} Royal Restaurant. All rights reserved.</div>
    </aside>
    <main class="auth-panel">
        <div class="auth-card">
            <a href="{{ url('/') }}" class="brand-mark d-inline-flex d-lg-none mb-5"><span class="brand-icon"><i class="fa-solid fa-utensils"></i></span><span class="brand-name">Royal Restaurant</span></a>
            {{ $slot }}
            <div class="auth-footer mt-5 text-center">Royal Restaurant · Management Portal</div>
        </div>
    </main>
</div>
</body>
</html>
