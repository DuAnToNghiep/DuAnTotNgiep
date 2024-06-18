@extends('master')
@section('title')
    Danh Sach
@endsection
@section('content')

 
    <a class="btn btn-dark" href="{{ route('users.create') }}">Create</a>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>brand</td>
                <td>price</td>
                <td>color</td>
                <td>image</td>
                <td>create_at</td>
                <td>Update_at</td>
                <td>Active</td>
    
            </tr>
        </thead>
        <tbody>
    @foreach($data as $users)
        
            <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->user_name }}</td>
                    <td>{{ $users->price }}</td>
                    <td>{{ $users->color }}</td>
                    <td>
                        <img src="{{ \Storage::url($users->image)}}" width="50px" alt="">
                       </td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->updated_at }}</td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('users.show',$users->id) }}">Show</a>
                        <a class="btn btn-danger" href="{{ route('users.edit',$users->id) }}">edit</a>
                        <form action="{{ route('users.destroy',$users->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark" type="submit">DELETE</button>
                        </form>
                    </td>
            </tr>
        </tbody>
    @endforeach

    </table>
    {{-- {{ $data->links() }} --}}
@endsection