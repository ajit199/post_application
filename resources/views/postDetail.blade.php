@extends('master.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card text-center">
                    <h5 class="card-header"></h5>
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $post->title }}</b></h4>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="/" class="btn btn-primary">Back</a>
                    </div>
                    @if (session()->has('loggedInUser'))
                        <div class="card">
                            <div class="card-body ">
                                <div class="card-header">
                                    <h4><b>Comments</b></h4>
                                </div>
                                <ul class="list-group list-group-flush text-left">
                                    @foreach ($post->comments as $comment)
                                    <div id="comment">
                                            <h6 class="card-title">{{ $comment->user->name }}</h6>
                                            <p class="card-text">{{ $comment->text }}</p>
                                        </div>
                                    @endforeach
                            </ul>
                        </div>
                </div>

                <div class="container pb-cmnt-container">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-inline" action="/addcomment" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <textarea name="comment" placeholder="comment here!" class="pb-cmnt-textarea"
                                    required></textarea>
                                <input type="submit" value="Post" class="btn btn-primary float-xs-right mb-1 mt-1" />
                            </form>

                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>



@endsection
