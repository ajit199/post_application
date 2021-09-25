@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="alert  text-center">Posts</h3>
                @if (session()->has('loggedInUser'))
                    <a href="/addPost" class="btn btn-primary btn-sm float-right mb-2">Add Post</a>
                @endif
                <table class="table table-striped">
                     <thead>
                        <tr>
                            <th>Post Id</th>
                            <th>Title</th>
                            <th>Username</th>
                            <th>Posted At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a href="postdetail/{{ $post->id }}" class="btn btn-success btn-sm">View</a>
                                  
                                    @if (session()->has('loggedInUser') && session()->get('loggedInUser')->id === $post->user_id)
                                        <a href="edit/{{ $post->id }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="delete/{{ $post->id }}" class="btn btn-danger btn-sm">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
