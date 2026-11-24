@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
<div class="page-wrap">
    <div class="page-heading">
        <div><div class="page-eyebrow">Menu organization</div><h1 class="page-title">Categories</h1><p class="page-subtitle">Organize your dishes into clear sections and keep the menu easy to explore.</p></div>
        <span class="pill"><i class="fa-solid fa-layer-group me-2"></i>Categories Management</span>
    </div>
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="surface">
                <div class="surface-header"><h2 class="surface-title"><i class="fa-solid fa-plus text-gold me-2"></i>Add a Category</h2></div>
                <div class="surface-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="mb-4"><label class="form-label">Category Name</label><input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="e.g. Main Courses" required></div>
                        <button type="submit" class="btn btn-gold w-100"><i class="fa-solid fa-check me-2"></i>Save Category</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="surface">
                <div class="surface-header d-flex align-items-center justify-content-between"><h2 class="surface-title">Category List</h2><span class="pill">{{ $categories->count() }} categories</span></div>
                <div class="table-wrap">
                    <table class="table">
                        <thead><tr><th style="width:90px">ID</th><th>Category Name</th><th class="text-end">Action</th></tr></thead>
                        <tbody>
                        @forelse($categories as $category)
                            <tr><td class="muted">#{{ $category->id }}</td><td class="fw-semibold">{{ $category->name }}</td><td class="text-end">
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">@csrf @method('DELETE')
                                    <button class="btn btn-danger-soft btn-sm px-3" onclick="return confirm('Delete this category?')"><i class="fa-regular fa-trash-can me-1"></i>Delete</button>
                                </form>
                            </td></tr>
                        @empty
                            <tr><td colspan="3"><div class="empty-state"><div class="empty-icon"><i class="fa-solid fa-layer-group"></i></div><h3 class="h5 text-light">No categories yet</h3><p class="mb-0">Add your first category using the form.</p></div></td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
