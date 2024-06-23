@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
<main class="col-md-9">
    <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0">Thêm Khuyến mãi</h4>
        </div>

        <div class="card-body">
          <form action="{{ route('admin.promotion.editStore',$promotions->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Tên khuyến mãi</label>
              <input type="text" class="form-control" id="promotion_name" name="promotion_name" value="{{$promotions->promotion_name}}">
             @error('promotion_name')
                 <small class="text-danger">{{$message}}</small>
             @enderror
            </div>
            <div class="form-group">
              <label for="promotion_code">Mã code</label>
              <input type="text" class="form-control" id="promotion_code" name="promotion_code"  value="{{$promotions->promotion_code}}">
              @error('promotion_code')
                 <small class="text-danger">{{$message}}</small>
             @enderror
            </div>
            <div class="form-group">
                <label for="promotion_type">Loại:</label>
                <input type="text" class="form-control" id="promotion_type" name="promotion_type" value="{{$promotions->promotion_type}}" >
                @error('promotion_type')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="promotion_value">Giá trị khuyến mãi:</label>
                <input type="text" class="form-control" id="promotion_value" name="promotion_value" value="{{$promotions->promotion_value}}" >
                @error('promotion_value')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="start_date">Ngày bắt đầu:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{$promotions->start_date}}">
                @error('start_date')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="end_date">Ngày kết thúc:</label>
                <input type="date" class="form-control" id="end_date" name="end_date" value="{{$promotions->end_date}}">
                @error('end_date')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="quantity">Số lượng:</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{$promotions->quantity}}">
                @error('quantity')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="promotion_conditions">Điều kiện khuyến mãi:</label>
                <input type="text" class="form-control" id="promotion_conditions"  name="promotion_conditions" value="{{$promotions->promotion_conditions}}" >
                @error('promotion_conditions')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
              <div class="form-group">
                <label for="status">Trạng thái</label>
                <input type="text" class="form-control" id="status" name="status" value="{{$promotions->status}}">
                @error('status')
                <small class="text-danger">{{$message}}</small>
            @enderror
              </div>
            <button type="submit" class="btn btn-primary" name="btn-edit" value="Chỉnh sửa">Chỉnh sửa</button>
          </form>
        </div>
      </div>
  </main>

@endsection
