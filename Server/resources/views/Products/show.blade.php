<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <p><strong>Product Name:</strong> {{ $product->product_name }}</p>
    <p><strong>Product Price:</strong> {{ $product->product_price }}</p>
    <p><strong>Created At:</strong> {{ $product->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $product->updated_at }}</p>
    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
