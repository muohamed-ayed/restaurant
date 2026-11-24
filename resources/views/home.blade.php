<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Restaurant | Our Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark site-nav">
    <div class="container py-2">
        <a class="navbar-brand brand-mark" href="{{ url('/') }}"><span class="brand-icon"><i class="fa-solid fa-utensils"></i></span><span class="brand-name">Royal Restaurant</span></a>
        <div class="ms-auto">@if (Route::has('login')) @auth<a href="{{ url('/dashboard') }}" class="btn btn-outline-soft btn-sm">Dashboard</a>@else<a href="{{ route('login') }}" class="btn btn-gold btn-sm px-4">Login</a>@endauth @endif</div>
    </div>
</nav>
<main class="container">
    <section class="public-hero">
        <div class="page-eyebrow">A taste of something special</div>
        <h1 class="page-title">Our Special Menu</h1>
        <p class="page-subtitle mx-auto">Discover thoughtfully prepared dishes, made with care and served with passion.</p>
        <div class="d-flex justify-content-center gap-2 mt-4"><span class="pill"><i class="fa-solid fa-star me-2"></i>Freshly prepared</span><span class="pill"><i class="fa-solid fa-utensils me-2"></i>Made with care</span></div>
    </section>
    <section class="pb-5">
        <div class="row g-4">
            @forelse($meals as $meal)
            <div class="col-sm-6 col-lg-4">
                <article class="surface menu-card">
                    @if($meal->image)<img src="{{ asset('storage/' . $meal->image) }}" class="menu-photo" alt="{{ $meal->name }}">@else<div class="menu-photo d-grid" style="place-items:center;color:var(--gold);font-size:2.4rem"><i class="fa-solid fa-utensils"></i></div>@endif
                    <div class="surface-body">
                        <span class="pill">{{ $meal->category->name ?? 'General' }}</span>
                        <h2 class="h4 mt-3 mb-2" style="font-family:'Playfair Display',serif">{{ $meal->name }}</h2>
                        <div class="d-flex align-items-center justify-content-between mt-3"><span class="muted small">Our selection</span><span class="menu-price">${{ number_format($meal->price, 2) }}</span></div>
                    </div>
                </article>
            </div>
            @empty
            <div class="col-12"><div class="surface empty-state"><div class="empty-icon"><i class="fa-solid fa-plate-wheat"></i></div><h2 class="h4 text-light">Our menu is being prepared</h2><p class="mb-0">Please check back soon for our available dishes.</p></div></div>
            @endforelse
        </div>
    </section>
</main>
<footer class="site-footer"><div class="container d-flex flex-column flex-sm-row justify-content-between gap-2"><span>© {{ date('Y') }} Royal Restaurant</span><span>Good food. Thoughtfully served.</span></div></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
