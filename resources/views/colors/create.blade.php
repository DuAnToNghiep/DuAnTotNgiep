<!-- resources/views/colors/create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Color</title>
</head>

<body>
    <h1>Create Color</h1>

    <form action="{{ route('colors.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="" required>
        </div>

        <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" value="" required>
        </div>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('colors.index') }}">Back to Colors</a>
</body>

</html>
