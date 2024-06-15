@extends('admin.master')
@section('title','Add New Fabric')
@section('main-content')
    <div class="container">
        <h2>Add New Fabric</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('fabrics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fabric">Fabric:</label>
                <input type="text" class="form-control" id="fabric" name="fabric" required>
            </div>
            <div class="form-group">
                <label for="create_date">Create Date:</label>
                <input type="date" class="form-control" id="create_date" name="create_date" required>
            </div>
            <div class="form-group">
                <label for="update_date">Update Date:</label>
                <input type="date" class="form-control" id="update_date" name="update_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
