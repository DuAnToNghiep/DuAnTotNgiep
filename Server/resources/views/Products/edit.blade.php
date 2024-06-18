<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Product Name:</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}" required>
        <label>Product Price:</label>
        <input type="number" name="product_price" value="{{ $product->product_price }}" required>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
