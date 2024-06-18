<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Product Name:</label>
        <input type="text" name="product_name" required>
        <label>Product Price:</label>
        <input type="number" name="product_price" required>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
