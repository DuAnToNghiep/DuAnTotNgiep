<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="container mt-4">
        <h2>Product Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text"><strong>Price:</strong> {{ $product->product_price }}</p>
                <p class="card-text"><strong>Created At:</strong> {{ $product->created_at }}</p>
                <p class="card-text"><strong>Updated At:</strong> {{ $product->updated_at }}</p>
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Products</a>
    </div>
@endsection
