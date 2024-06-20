<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giỏ hàng</title>
</head>

<body>

    <br>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Số Lượng</th>
            <th>Status </th>
            <th>Giá </th>
            <th>Ngày Tạo</th>
            <th>Action</th>

        </thead>
        <tbody>
            @foreach ($cartDetails as $cartDetail)
                <tr>
                    <td>{{ $cartDetail->id }}</td>
                    <td>{{ $cartDetail->quantity }}</td>
                    <td>{{ $cartDetail->status }}</td>
                    <td>{{ $cartDetail->price }}</td>
                    <td>{{ $cartDetail->created_at }}</td>
                    <td>
                        {{-- <a href="">Sửa</a> | thong tin gio hàng tạm thời không thể xóa --}}
                        <a href="{{ route('cart_details.destroy', $cartDetail->id) }}">Xóa</a>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>




</html>
