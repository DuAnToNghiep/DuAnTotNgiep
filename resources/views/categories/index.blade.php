<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie</title>
</head>

<body>
    <a class="btn btn-info" href="{{ route('categories.create') }}">Add New Category</a>
    <br>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>slug </th>
            <th>Action </th>

        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->slug }}</td>

                    <td>

                        <a href="{{ route('categories.edit', $category->id) }}">Sửa</a> |
                        <a href="{{ route('categories.destroy', $category->id) }}">Xóa</a>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>




</html>
