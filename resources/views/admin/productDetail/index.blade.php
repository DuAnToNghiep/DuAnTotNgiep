@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="card col-md-9">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Danh sách trả hàng</h4>
        </div>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Danh mục</th>
                        <th>Sản phẩm</th>
                        <th>Nhập giá </th>
                        <th>Giá sản phẩm</th>
                        <th>Note</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($productDetails->isNotEmpty())
                        @php
                            $temp = 0
                        @endphp
                        @foreach ($productDetails as $item)
                            @php
                                $temp++
                            @endphp
                            <tr>
                                <td>{{$temp}}</td>
                                <td>{{$item->category_id}}</td>
                                <td>{{$item->product_id}}</td>
                                <td>{{$item->import_price_product_detail }}</td>
                                <td>{{$item->price_product_detail}}</td>
                                <td>{{$item->note}}</td>
                                <td>

                                    <a href="{{ route('productDetail.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('productDetail.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('productDetail.destroy', $item->id) }}"  style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    @endif

                    <!-- More rows for other users -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
