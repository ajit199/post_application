@extends('master.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <h2 class="alert alert-info mt-5 text-center">User Update</h2>
            <form action="/updatePost" method="post">
                @csrf 
                <input type="hidden" name="id" value="{{$post->id}}">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{$post->title}}" name="title">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="desc" class="form-control">{{$post->description}}</textarea>
                       
                    
                </div>
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="Update" name="submit">
                </div>   
            </form>
        </div>
    </div>
</div>
@endsection