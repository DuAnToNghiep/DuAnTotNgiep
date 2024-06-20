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
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('categories.index') }}">Quay Lại List Categories</a>
</body>

</html>
