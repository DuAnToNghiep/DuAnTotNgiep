<!-- resources/views/colors/create.blade.php -->

@extends('admin.master')
@section('title', 'Create Color')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create Color</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('colors.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="color_name">Color Name:</label>
                                <input type="text" class="form-control" id="color_name" name="color_name"
                                       placeholder="Enter color name" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" class="form-control" id="status" name="status"
                                       placeholder="Enter status" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('colors.index') }}" class="btn btn-secondary">Back to Colors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
