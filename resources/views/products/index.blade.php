@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h1>Products</h1>
    <a href="{{ route('dashboard.products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($products->count())
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category ? $product->category->name : 'N/A' }}</td>
                <td>
                    <a href="{{ route('dashboard.products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('dashboard.products.destroy', $product) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No products found.</p>
    @endif
</div>
@endsection
