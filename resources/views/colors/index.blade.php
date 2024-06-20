<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Colors</title>
</head>

<body>
    <a class="btn btn-info" href="{{ route('colors.create') }}">Add New Colors</a>

    <br>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>status </th>
            <th>Action </th>

        </thead>
        <tbody>
            @foreach ($colors as $color)
                <tr>
                    <td>{{ $color->id }}</td>
                    <td>{{ $color->color_name }}</td>
                    <td>{{ $color->status }}</td>

                    <td>

                        <a href="{{ route('colors.edit', $color->id) }}">Sửa</a> |
                        <a href="{{ route('colors.destroy', $color->id) }}">Xóa</a>

                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>




</html>
