<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
  

    public function addcomment(Request $request)
    {
       $user_id = session('loggedInUser')->id;
      $addcomment = new Comment();
       $addcomment->text = $request->comment;
       $addcomment->user_id= $user_id;
       $addcomment->post_id= $request->post_id;;
       $addcomment->save();
       return redirect()->back();

    } 
}
