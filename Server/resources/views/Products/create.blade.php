<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <div class="container mt-4">
        <h2>Create Product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
