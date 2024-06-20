@extends('admin.master')
@section('title','Chao mung ban')
@section('main-content')
    <div class="container">
        <h2>Thông tin chi tiết Feedback</h2>
        <p><strong>ID:</strong> {{ $feedback->id }}</p>
        <p><strong>User ID:</strong> {{ $feedback->user_id }}</p>
        <p><strong>Tên:</strong> {{ $feedback->feed_back_name }}</p>
        <p><strong>Email:</strong> {{ $feedback->feed_back_email }}</p>
        <p><strong>Phone:</strong> {{ $feedback->feed_back_phone }}</p>
        <p><strong>Tiêu đề:</strong> {{ $feedback->feed_back_title }}</p>
        <p><strong>Nội dung:</strong> {{ $feedback->feedback_content }}</p>
        <p><strong>Trạng thái:</strong> {{ $feedback->status }}</p>
    </div>
@endsection
