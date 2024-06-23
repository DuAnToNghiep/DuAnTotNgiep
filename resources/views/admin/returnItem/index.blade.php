@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
<div class="card col-md-9">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Danh sách trả hàng</h4>
    </div>
    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
@endif
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Hóa đơn</th>
              <th>Người trả</th>
              <th>Chi tiết sản phẩm</th>
              <th>Ngày trả</th>
              <th>Lý do</th>
              <th>Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            @if ($returnItems->isNotEmpty())
            @php
                $temp = 0
            @endphp
                @foreach ($returnItems as $item)
                @php
                $temp++
            @endphp
                <tr>
                    <td>{{$temp}}</td>
                    <td>{{$item->bill_id}}</td>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->product_detail_id }}</td>
                    <td>{{$item->return_date}}</td>
                    <td>{{$item->reason}}</td>
                    <td>
                      <a href="{{route('admin.returnItem.edit',$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{route('admin.returnItem.delete',$item->id)}}" class="btn btn-sm btn-danger" onclick="if (!confirm('Bạn có muốn xóa bản ghi này không?')) { event.preventDefault(); }">Delete</a>
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
