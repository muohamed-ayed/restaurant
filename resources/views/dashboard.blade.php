@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="page-wrap">
    <div class="page-heading">
        <div>
            <div class="page-eyebrow">Management overview</div>
            <h1 class="page-title">Admin Dashboard</h1>
            <p class="page-subtitle">Welcome to your restaurant control panel. Manage your menu and keep everything organized.</p>
        </div>
        <span class="pill"><i class="fa-solid fa-circle me-2" style="font-size:.45rem"></i>Management Panel</span>
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="surface stat-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div><div class="stat-label">Restaurant menu</div><div class="stat-value">Meals Management</div><p class="muted small mt-2 mb-0">Add, edit, and organize the meals displayed on your website.</p></div>
                    <div class="stat-icon"><i class="fa-solid fa-bowl-food"></i></div>
                </div>
                <a href="{{ route('meals.index') }}" class="btn btn-gold mt-4 w-100">Manage Meals <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="surface stat-card">
                <div class="d-flex justify-content-between align-items-start">
                    <div><div class="stat-label">Menu organization</div><div class="stat-value">Categories</div><p class="muted small mt-2 mb-0">Keep your restaurant menu structured with clear food categories.</p></div>
                    <div class="stat-icon"><i class="fa-solid fa-layer-group"></i></div>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-soft mt-4 w-100">Manage Categories <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
    <div class="surface mt-4 p-4 p-lg-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div class="page-eyebrow">Royal Restaurant</div>
                <h2 class="page-title" style="font-size:2rem">A refined experience, from kitchen to table.</h2>
                <p class="page-subtitle">Your management tools are ready. Choose a section above to manage the existing restaurant content.</p>
            </div>
            <div class="col-lg-4 text-lg-end"><a href="{{ url('/') }}" target="_blank" class="btn btn-gold"><i class="fa-solid fa-arrow-up-right-from-square me-2"></i>Open Website</a></div>
        </div>
    </div>
</div>
@endsection
