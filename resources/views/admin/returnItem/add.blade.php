@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
<main class="col-md-9">
    <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Mục Trả hàng</h4>
        </div>
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif
        <div class="card-body">
          <form action="{{ route('admin.returnItem.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="bill">Hóa đơn:</label>
                <select class="form-control" id="bill" name="bill_id">
                  <option value="">Chọn hóa đơn:</option>
                  @foreach ($bills as $bill)
                  <option value="{{$bill->id}}">{{$bill->bill_name}}</option>
                  @endforeach
                </select>
                @error('bill_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="user">Người trả hàng:</label>
                <select class="form-control" id="user" name="user_id">
                  <option value="">Chọn người trả:</option>
                  @foreach ($users as $user)
                  <option value="{{$user->id}}">{{$user->user_name}}</option>
                  @endforeach
                </select>
                @error('user_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="product_detail_id">Chi tiết sản phẩm:</label>
                <select class="form-control" id="product_detail_id" name="product_detail_id">
                  <option value="">Chọn chi tiết sản phẩm:</option>
                 @foreach ($product_details as $product)
                 <option value="{{$product->id}}">{{$product->id}}</option>
                 @endforeach
                </select>
                @error('product_detail_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="return_date">Ngày trả:</label>
                <input type="date" class="form-control" id="start_date" name="return_date">
                @error('return_date')
                <small class="text-danger">{{$message}}</small>
            @enderror
            <div class="form-group">
                <label for="reason">lý do:</label>
                <textarea class="form-control" id="reason"  name="reason"  rows="5"></textarea>
                @error('reason')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>

              <div class="form-group">
                <label for="status">Trạng thái</label>
                <input type="text" class="form-control" id="status" name="status">
                @error('status')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
            <button type="submit" class="btn btn-primary" name="btn-add" value="Thêm mới">Thêm mới</button>
          </form>
        </div>
      </div>
  </main>

@endsection
