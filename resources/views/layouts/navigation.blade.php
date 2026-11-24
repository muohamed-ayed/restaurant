<nav class="navbar navbar-expand-lg navbar-dark site-nav">
    <div class="container py-2">
        <a class="navbar-brand brand-mark" href="{{ route('dashboard') }}"><span class="brand-icon"><i class="fa-solid fa-utensils"></i></span><span class="brand-name">Royal Restaurant</span></a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#profileNav" aria-controls="profileNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="profileNav">
            <div class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <a class="nav-link nav-link-custom" href="{{ route('dashboard') }}"><i class="fa-solid fa-grid-2 me-2"></i>Dashboard</a>
                <a class="nav-link nav-link-custom" href="{{ route('categories.index') }}"><i class="fa-solid fa-layer-group me-2"></i>Categories</a>
                <a class="nav-link nav-link-custom" href="{{ route('meals.index') }}"><i class="fa-solid fa-bowl-food me-2"></i>Meals</a>
                <span class="nav-link nav-link-custom"><i class="fa-regular fa-user me-2"></i>{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="ms-lg-2">@csrf<button type="submit" class="btn btn-outline-soft btn-sm">Logout</button></form>
            </div>
        </div>
    </div>
</nav>
