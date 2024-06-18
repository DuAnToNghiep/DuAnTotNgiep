<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col">
                <form action="{{ route('products.index') }}" method="GET" class="form-inline">
                    <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search" value="{{ $search }}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="col text-right">
                <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
@endsection
