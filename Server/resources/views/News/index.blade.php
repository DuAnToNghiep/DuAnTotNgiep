@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>News List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Create New News</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th width="280px">Action</th>
            </tr>
            @php
                $i = 0; // Khởi tạo biến $i
            @endphp
            @foreach ($news as $n)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $n->news_title }}</td>
                    <td>{{ Str::limit($n->news_content, 100) }}</td>
                    <td>
                        @if ($n->news_image)
                            <img src="{{ asset('storage/' . $n->news_image) }}" alt="News Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('news.destroy', $n->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('news.show', $n->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('news.edit', $n->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $news->links() !!}
    </div>
@endsection
