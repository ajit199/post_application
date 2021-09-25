<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

  public function postlist()
  {

    $posts = Post::with('user')->get();
    return view('postList', ['posts' => $posts]);
  }


public function editPost($id)
  {
    $post = Post::where('id', $id)->first();
    return view('editPost', ['post' => $post]);
  }

  public function updatePost(Request $request)
  {
    $post = Post::findOrFail($request->id);
    $post->title = $request->title;
    $post->description = $request->desc;
    $post->save();
    return redirect('/');
  }

  public function deletePost($id)
  {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect('/');
  }

  public function addPost(Request $request)
  {
    $post = new Post;
    $post->title = $request->title;
    $post->user_id = $request->user_id;
    $post->description = $request->desc;
    $post->save();
    return redirect('/');
  }

  public function postDetail($id)
  {
   $post = Post::with('comments.user')->findOrFail($id);
   return view('postDetail',['post'=>$post]);

  }

}
