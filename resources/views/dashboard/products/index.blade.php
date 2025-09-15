@extends('layouts.dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Products</h1>
    <a href="{{ route('dashboard.products.create') }}" class="btn btn-3d">Add Product</a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-light">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->category ? $product->category->name : 'Uncategorized' }}</td>
            <td>
                <a href="{{ route('dashboard.products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('dashboard.products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No products found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
