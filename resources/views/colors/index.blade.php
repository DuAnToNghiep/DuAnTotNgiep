@extends('admin.master')
@section('title', 'List Colors')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">List Colors</h4>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-info mb-3" href="{{ route('colors.create') }}">Add New Color</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($colors as $color)
                                <tr>
                                    <td>{{ $color->id }}</td>
                                    <td>{{ $color->color_name }}</td>
                                    <td>{{ $color->status }}</td>
                                    <td>
                                        <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('colors.destroy', $color->id) }}"  style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
