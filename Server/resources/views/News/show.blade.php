@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $news->news_title }}</div>

                    <div class="card-body">
                        <p><strong>Nội dung:</strong></p>
                        <p>{{ $news->news_content }}</p>
                        @if ($news->news_image)
                            <p><strong>Ảnh đại diện:</strong></p>
                            <img src="{{ asset('storage/' . $news->news_image) }}" alt="News Image" style="max-width: 100%;">
                        @endif
                        <p><strong>Ngày tạo:</strong> {{ $news->create_date }}</p>
                        <p><strong>Ngày cập nhật:</strong> {{ $news->update_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
