@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chỉnh sửa tin tức</div>

                    <div class="card-body">
                        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="news_title">Tiêu đề</label>
                                <input type="text" class="form-control @error('news_title') is-invalid @enderror" id="news_title" name="news_title" value="{{ old('news_title', $news->news_title) }}" required>
                                @error('news_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_content">Nội dung</label>
                                <textarea class="form-control @error('news_content') is-invalid @enderror" id="news_content" name="news_content" rows="5" required>{{ old('news_content', $news->news_content) }}</textarea>
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
                                @if ($news->news_image)
                                    <div>
                                        <p>Ảnh hiện tại:</p>
                                        <img src="{{ asset('storage/' . $news->news_image) }}" alt="Current News Image" style="max-width: 100%;">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Cập nhật tin tức</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
