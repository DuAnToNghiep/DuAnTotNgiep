@extends('admin.master')
@section('title', 'Thông tin giỏ hàng')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Danh sách chi tiết giỏ hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Số Lượng</th>
                                    <th>Status</th>
                                    <th>Giá</th>
                                    <th>Ngày Tạo</th>
                                    <th>Action</th>
                                </tr>
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
                                            {{-- Để tránh xóa thông tin giỏ hàng, thêm điều kiện kiểm tra và hiển thị --}}
                                            {{-- <a href="{{ route('cart_details.edit', $cartDetail->id) }}" class="btn btn-sm btn-warning">Sửa</a> | --}}
                                            @if ($cartDetail->status != 'processing')
                                                <form action="{{ route('cart_details.destroy', $cartDetail->id) }}"  style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
