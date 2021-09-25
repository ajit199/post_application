@extends('layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">   
    <h3 class="alert  text-center">Posts</h3>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Post Id</th>
      <th scope="col">Username</th>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
    </tr>
  </thead> 
  <tbody>
     @foreach($posts as $item)
     <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->title}}</td>
      <td>{{$item->description}}</td>
      <td><a href="detail/{{$item->id}}"><button class="btn btn-primary btn-sm">View Post</button></a></td>
       </tr>
     @endforeach
    
  </tbody>
</table>
        </div>
    </div>
</div>
    
@endsection