@extends('layouts.app')

@section('content')
    <h1>Edit Cart Detail</h1>
    <form action="{{ route('cart_details.update', $cartDetail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="cart_id">Cart ID:</label>
        <input type="text" id="cart_id" name="cart_id" value="{{ $cartDetail->cart_id }}">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id" value="{{ $cartDetail->product_id }}">
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{ $cartDetail->quantity }}">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $cartDetail->price }}">
        <button type="submit">Save</button>
    </form>
@endsection
