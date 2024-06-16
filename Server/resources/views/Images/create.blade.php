@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Upload New Image</div>

        <div class="card-body">
            <form action="{{ route('images.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="product_detail_id">Product Detail ID</label>
                    <input type="text" class="form-control" id="product_detail_id" name="product_detail_id" required>
                </div>
                <div class="form-group">
                    <label for="name_image">Name</label>
                    <input type="text" class="form-control" id="name_image" name="name_image" required>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Image</button>
            </form>
        </div>
    </div>
@endsection
