@extends('master.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <h2 class="alert alert-info mt-5 text-center">User Login</h2>
            <form action="userlogin" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" >
                   
                </div>
 
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="text-right">
                    <input type="submit" class="btn btn-success" value="Login" name="submit">
                </div>
            </form>
            @error('email')
           {{$message}}
        @enderror
        </div>
    </div>
</div>
@endsection