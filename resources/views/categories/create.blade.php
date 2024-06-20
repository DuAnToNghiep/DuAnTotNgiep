<!-- resources/views/categories/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>

<body>
    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="category_name" required>
        </div>

        <div>
            <label for="Slug">Slug:</label>
            <textarea id="description" name="slug"></textarea>
        </div>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('categories.index') }}">Quay Lại List Categories</a>
</body>

</html>
