@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Image Details</div>

        <div class="card-body">
            <p><strong>ID:</strong> {{ $image->id }}</p>
            <p><strong>Product Detail ID:</strong> {{ $image->product_detail_id }}</p>
            <p><strong>Name:</strong> {{ $image->name_image }}</p>
            <p><strong>URL:</strong> {{ $image->url }}</p>
            <p><strong>Created At:</strong> {{ $image->create_date }}</p>
            <p><strong>Updated At:</strong> {{ $image->update_date }}</p>
            <a href="{{ route('images.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
