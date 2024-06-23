@extends('admin.master')
@section('title', 'Edit Color')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Color</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('colors.update', $color->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="color_name">Color Name</label>
                                <input type="text" class="form-control" id="color_name" name="color_name"
                                       placeholder="Enter color name" value="{{ $color->color_name }}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <textarea class="form-control" id="status" name="status"
                                          placeholder="Enter status">{{ $color->status }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
