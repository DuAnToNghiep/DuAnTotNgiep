<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="">Name </label>
                <input type="text" class="form-control" placeholder="Tên chuyên mục" name="category_name"
                    onkeyup="ChangeToSlug();" value="{{ $category->category_name }}">
            </div>
            <div class="form-group">
                <label for="">Description </label>
                <textarea id="description" name="slug">{{ $category->slug }}</textarea>
            </div>
            {{-- <input type="text" class="form-control" placeholder="Description" name="description"
                onkeyup="ChangeToSlug();" value="{{ $category->description }}"> --}}
        </div>

        </div>
        {{-- <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description', $category->description) }}</textarea>
        </div> --}}

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>

</html>
