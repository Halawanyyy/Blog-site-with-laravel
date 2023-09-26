<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function insert(Request $request){
        $validate=$request->validate([
            'comment_body'=>'required'
        ],[
            'comment_body.required'=>'PLS Enter your comment'
        ]);
        session_start();
        $comment = new Comment();
        $comment->post_id =$_SESSION['post_id'];
        $comment->user_id = $_SESSION['user_id'];
        $comment->body = $request->comment_body;
        $comment->save();
        return back();
    }
}
