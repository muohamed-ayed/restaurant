@extends('layouts.admin')
@section('title', 'Meals')
@section('content')
<div class="page-wrap">
    <div class="page-heading">
        <div><div class="page-eyebrow">Restaurant menu</div><h1 class="page-title">Meals Management</h1><p class="page-subtitle">Add new dishes and manage the meals currently displayed on your restaurant website.</p></div>
        <span class="pill"><i class="fa-solid fa-bowl-food me-2"></i>Menu Control</span>
    </div>
    <div class="row g-4">
        <div class="col-xl-4">
            <div class="surface">
                <div class="surface-header"><h2 class="surface-title"><i class="fa-solid fa-plus text-gold me-2"></i>Add New Meal</h2><p class="muted small mb-0 mt-1">Enter the meal details below.</p></div>
                <div class="surface-body">
                    <form method="POST" action="{{ route('meals.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3"><label class="form-label">Meal Name</label><input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter meal name" required></div>
                        <div class="mb-3"><label class="form-label">Category</label><select name="category_id" class="form-select" required><option value="">Select a category</option>@foreach($categories as $category)<option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>@endforeach</select></div>
                        <div class="mb-3"><label class="form-label">Price ($)</label><input type="number" step="0.01" min="0" name="price" value="{{ old('price') }}" class="form-control" placeholder="0.00" required></div>
                        <div class="mb-4"><label class="form-label">Meal Image</label><input type="file" name="image" class="form-control" accept="image/*" required></div>
                        <button type="submit" class="btn btn-gold w-100"><i class="fa-solid fa-floppy-disk me-2"></i>Save Meal</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="surface">
                <div class="surface-header d-flex justify-content-between align-items-center gap-3"><div><h2 class="surface-title">Your Meals</h2><p class="muted small mb-0 mt-1">Existing dishes in your restaurant menu.</p></div><span class="pill">{{ $meals->count() }} meals</span></div>
                <div class="table-wrap">
                    <table class="table">
                        <thead><tr><th>Meal</th><th>Category</th><th>Price</th><th class="text-end">Actions</th></tr></thead>
                        <tbody>
                        @forelse($meals as $meal)
                            <tr>
                                <td><div class="d-flex align-items-center gap-3">@if($meal->image)<img src="{{ asset('storage/' . $meal->image) }}" alt="{{ $meal->name }}" class="table-img">@else<div class="table-img d-grid place-items-center text-gold" style="display:grid;place-items:center"><i class="fa-solid fa-utensils"></i></div>@endif<div><div class="fw-semibold">{{ $meal->name }}</div><small class="muted">Meal #{{ $meal->id }}</small></div></div></td>
                                <td><span class="pill">{{ $meal->category->name ?? 'N/A' }}</span></td>
                                <td class="fw-bold text-gold">${{ number_format($meal->price, 2) }}</td>
                                <td class="text-end"><div class="d-inline-flex gap-2"><a href="{{ route('meals.edit', $meal) }}" class="btn btn-outline-soft btn-sm"><i class="fa-regular fa-pen-to-square me-1"></i>Edit</a><form action="{{ route('meals.destroy', $meal) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-danger-soft btn-sm" onclick="return confirm('Delete this meal?')"><i class="fa-regular fa-trash-can"></i></button></form></div></td>
                            </tr>
                        @empty
                            <tr><td colspan="4"><div class="empty-state"><div class="empty-icon"><i class="fa-solid fa-bowl-food"></i></div><h3 class="h5 text-light">No meals available</h3><p class="mb-0">Use the form to add your first meal.</p></div></td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
