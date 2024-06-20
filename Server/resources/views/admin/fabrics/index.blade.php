@extends('admin.master')
@section('title', 'Fabrics List')
@section('main-content')
    <div class="container">
        <h2>Fabrics</h2>
        <a href="{{ route('fabrics.create') }}" class="btn btn-primary mb-3">Add New Fabric</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Fabric</th>
                <th>Create Date</th>
                <th>Update Date</th>
                <th>Actions</th>
            </tr>
            @foreach ($fabrics as $fabric)
                <tr>
                    <td>{{ $fabric->id }}</td>
                    <td>{{ $fabric->fabric }}</td>
                    <td>{{ $fabric->create_date }}</td>
                    <td>{{ $fabric->update_date }}</td>
                    <td>
                        <a href="{{ route('fabrics.edit', $fabric->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('fabrics.destroy', $fabric->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
