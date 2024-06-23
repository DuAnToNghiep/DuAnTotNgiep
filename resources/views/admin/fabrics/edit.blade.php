@extends('admin.master')
@section('title','Edit Fabric')
@section('main-content')
    <div class="container">
        <h1>Edit Fabric</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('fabrics.update', $fabric->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fabric">Fabric:</label>
                <input type="text" class="form-control" id="fabric" name="fabric" value="{{ $fabric->fabric }}" required>
            </div>
            <div class="form-group">
                <label for="create_date">Create Date:</label>
                <input type="text" class="form-control" id="create_date" name="create_date" value="{{ $fabric->create_date }}" disabled>
            </div>
            <div class="form-group">
                <label for="update_date">Update Date:</label>
                <input type="date" class="form-control" id="update_date" name="update_date" value="{{ $fabric->update_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

