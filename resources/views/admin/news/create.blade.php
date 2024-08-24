@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection
@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection

zz




@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection
@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection






@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection
@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection






@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection
@extends('admin.master')
@section('title','Add New Image')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tạo tin tức mới</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title') }}" required>
                                @error('news_title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content') }}</textarea>
                                @error('news_content')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_image">Ảnh đại diện</label>
                                <input type="file" class="form-control-file @error('news_image') is-invalid @enderror" id="news_image" name="news_image">
                                @error('news_image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Tạo tin tức</button>
                        </form>
                    </div>
                </div>
@endsection






