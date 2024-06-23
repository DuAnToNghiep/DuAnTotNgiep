@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <main class="col-md-9">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Chỉnh sửa chi tiết sản phẩm</h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <div class="card-body">
                <form action="{{ route('productDetail.update', $productDetail->id) }}" >
                    @csrf
                    @method('PUT') {{-- hoặc @method('PATCH') --}}
                    <!-- các trường dữ liệu để chỉnh sửa -->

                    <div class="form-group">
                        <label for="category_id">Danh mục sản phẩm</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Chọn danh mục:</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$productDetail->category_id == $category->id?'selected':''}}>{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_id">Sản phẩm:</label>
                        <select class="form-control" id="product_id" name="product_id">
                            <option value="">Chọn sản phẩm:</option>
                            @foreach ($products as $product)
                            <option value="{{$product->id}}" {{$productDetail->product_id == $product->id?'selected':''}}>{{$product->product_name}}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="import_price_product_detail">Nhập giá chi tiết sản phẩm:</label>
                        <input type="text" class="form-control" id="import_price_product_detail"
                            name="import_price_product_detail" value="{{$productDetail->import_price_product_detail}}">
                        @error('import_price_product_detail')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price_product_detail">Giá chi tiết sản phẩm:</label>
                        <input type="text" class="form-control" id="price_product_detail" name="price_product_detail" value="{{$productDetail->price_product_detail}}">
                        @error('price_product_detail')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="color_id">Màu sắc:</label>
                        <select class="form-control" id="color_id" name="color_id">
                            <option value="">Chọn màu sắc:</option>
                            @foreach ($colors as $color)
                                <option value="{{$color->id}}" {{$productDetail->product_id == $color->id?'selected':''}}>{{$color->color_name}}</option>
                            @endforeach
                        </select>
                        @error('color_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                        <div class="form-group">
                            <label for="description">Mô tả ngắn:</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{{$productDetail->description}}</textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity">Số lượng:</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" value="{{$productDetail->quantity}}">
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="note">Note:</label>
                            <textarea class="form-control" id="note" name="note" rows="5">{{$productDetail->note}}</textarea>
                            @error('note')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{$productDetail->slug}}">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{$productDetail->status}}">
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn-add" value="Chỉnh sửa">Chỉnh sửa</button>
                </form>
            </div>
        </div>
    </main>
@endsection
