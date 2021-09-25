@extends('master.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <h2 class="alert alert-danger mt-5 text-center">Register</h2>
            <form action="/signup" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label> 
                    <input type="text" class="form-control"  name="name" required minlength="5">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required minlength="8">
                   
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required minlength="5">
                </div>

                <div class="text-right">
                    <input type="submit" class="btn btn-success btn-sm" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection