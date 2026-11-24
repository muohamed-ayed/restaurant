<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Royal Restaurant') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="min-vh-100">
    @include('layouts.navigation')
    @isset($header)
        <header class="page-wrap pb-0"><div class="surface p-4">{{ $header }}</div></header>
    @endisset
    <main class="page-wrap profile-panel">
        <div class="page-eyebrow">Account settings</div>
        <h1 class="page-title mb-4">Your Profile</h1>
        {{ $slot }}
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
