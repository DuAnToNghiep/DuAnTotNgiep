<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>

<body>
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Description </th>
            <th>Action </th>

        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    {{-- <td>
                        <a href="">Xem</a>
                        <a href="{{ route('sua', $item->id) }}">Sua</a>
                        <form action="{{ route('dell', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Xoas</button>
                        </form>
                    </td> --}}
                    <td>
                        <a href="Xoa">Xoa</a>
                        <a href="Sua">Sua</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>




</html>
