@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Edit Image</div>

        <div class="card-body">
            <form action="{{ route('images.update', $image->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="product_detail_id">Product Detail ID</label>
                    <input type="text" class="form-control" id="product_detail_id" name="product_detail_id" value="{{ $image->product_detail_id }}" required>
                </div>
                <div class="form-group">
                    <label for="name_image">Name</label>
                    <input type="text" class="form-control" id="name_image" name="name_image" value="{{ $image->name_image }}" required>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ $image->url }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Image</button>
            </form>
        </div>
    </div>
@endsection
