@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
<div class="card col-md-9">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Danh sách khuyến mãi</h4>
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
              <th>Tên</th>
              <th>Mã code</th>
              <th>Ngày bắt đầu</th>
              <th>Ngày kết thúc</th>
              <th>Tác vụ</th>
            </tr>
          </thead>
          <tbody>
            @if ($promotions->isNotEmpty())
            @php
                $temp = 0
            @endphp
                @foreach ($promotions as $promotion)
                @php
                $temp++
            @endphp
                <tr>
                    <td>{{$temp}}</td>
                    <td>{{$promotion->promotion_name}}</td>
                    <td>{{$promotion->promotion_code}}</td>
                    <td>{{$promotion->start_date}}</td>
                    <td>{{$promotion->end_date}}</td>
                    <td>
                      <a href="{{route('promotion.edit',$promotion->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <a href="{{route('promotion.delete',$promotion->id)}}" class="btn btn-sm btn-danger" onclick="if (!confirm('Bạn có muốn xóa bản ghi này không?')) { event.preventDefault(); }">Delete</a>
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
