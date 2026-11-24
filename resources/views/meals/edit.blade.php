@extends('layouts.admin')
@section('title', 'Edit Meal')
@section('content')
<div class="page-wrap">
    <div class="page-heading">
        <div><div class="page-eyebrow">Menu management</div><h1 class="page-title">Edit Meal</h1><p class="page-subtitle">Update the details of this dish. Your existing menu information will be preserved unless changed.</p></div>
        <a href="{{ route('meals.index') }}" class="btn btn-outline-soft"><i class="fa-solid fa-arrow-left me-2"></i>Back to Meals</a>
    </div>
    <div class="row justify-content-center"><div class="col-lg-7 col-xl-6">
        <div class="surface">
            <div class="surface-header"><h2 class="surface-title">Meal Details</h2><p class="muted small mb-0 mt-1">Editing: {{ $meal->name }}</p></div>
            <div class="surface-body">
                <form method="POST" action="{{ route('meals.update', $meal) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3"><label class="form-label">Meal Name</label><input type="text" name="name" value="{{ old('name', $meal->name) }}" class="form-control" required></div>
                    <div class="mb-3"><label class="form-label">Category</label><select name="category_id" class="form-select" required>@foreach($categories as $category)<option value="{{ $category->id }}" {{ old('category_id', $meal->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>@endforeach</select></div>
                    <div class="mb-3"><label class="form-label">Price ($)</label><input type="number" step="0.01" min="0" name="price" value="{{ old('price', $meal->price) }}" class="form-control" required></div>
                    <div class="mb-4"><label class="form-label">Meal Image</label>@if($meal->image)<div class="mb-3 d-flex align-items-center gap-3"><img src="{{ asset('storage/' . $meal->image) }}" alt="{{ $meal->name }}" class="table-img" style="width:76px;height:76px"><span class="muted small">Current image</span></div>@endif<input type="file" name="image" class="form-control" accept="image/*"><small class="muted d-block mt-2">Leave empty to keep the current image.</small></div>
                    <div class="d-flex flex-column flex-sm-row gap-2"><button type="submit" class="btn btn-gold flex-grow-1"><i class="fa-solid fa-check me-2"></i>Update Meal</button><a href="{{ route('meals.index') }}" class="btn btn-outline-soft flex-grow-1 text-center">Cancel</a></div>
                </form>
            </div>
        </div>
    </div></div>
</div>
@endsection
