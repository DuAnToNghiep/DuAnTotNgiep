<!-- resources/views/categories/create.blade.php -->

@extends('admin.master')
@section('title', 'Create Category')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Create Category</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="category_name">Category Name:</label>
                                <input type="text" class="form-control" id="category_name" name="category_name"
                                       placeholder="Enter category name" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <textarea class="form-control" id="slug" name="slug" placeholder="Enter slug"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
