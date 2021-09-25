@extends('master.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <h2 class="alert alert-success mt-5 text-center">Add Post</h2>
            <form action="add-post" method="post">
                @csrf
                <input type="hidden" value="{{session()->get('loggedInUser')->id}}" name="user_id">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="desc"  class="form-control"></textarea>
                </div>

                <div class="text-right">
                    <input type="submit" class="btn btn-success" value="Add Post" name="submit">
                </div>
            </form>
        </div>
    </div>
</div>

 
    
@endsection