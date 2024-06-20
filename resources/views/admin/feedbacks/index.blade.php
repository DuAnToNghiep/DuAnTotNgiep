@extends('admin.master')
@section('title','Chao mung ban')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Feedbacks</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{route('feedbacks.create')}}"> Create New Feedback</a>
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
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Content</th>
                <th width="280px">Action</th>
            </tr>
            @php $i = 0 @endphp
        @foreach ($feedbacks as $feedback)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $feedback->feed_back_name }}</td>
                    <td>{{ $feedback->feed_back_email }}</td>
                    <td>{{ $feedback->feed_back_title }}</td>
                    <td>{{ $feedback->feedback_content }}</td>
                    <td>
                        <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('feedbacks.show', $feedback->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('feedbacks.edit', $feedback->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $feedbacks->links() !!}
    </div>
@endsection
