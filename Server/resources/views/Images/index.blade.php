@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">List of Images</div>

        <div class="card-body">
            <div class="mb-3">
                <a href="{{ route('images.create') }}" class="btn btn-primary">Upload New Image</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Detail ID</th>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>{{ $image->product_detail_id }}</td>
                            <td>{{ $image->name_image }}</td>
                            <td>{{ $image->url }}</td>
                            <td>{{ $image->create_date }}</td>
                            <td>{{ $image->update_date }}</td>
                            <td>
                                <a href="{{ route('images.show', $image->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $images->links() }}
        </div>
    </div>
@endsection
