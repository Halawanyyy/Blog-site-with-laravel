<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    static function index(){
        $posts=Post::all();
        return view('/home',compact('posts'));
    }
    function insert(Request $request)
    {
        $validate = $request->validate([
            'title'=>'required',
            'content'=>'required'
        ],[
            'title.required'=>'Please enter a title',
            'content.required'=>'Please enter a content to your post',
        ]);
        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->content;
        $post->user_id=$request->user_id;
        $post->save();
        return $this->index();
    }
    function show($post_id){
        session_start();
        $_SESSION['post_id']=$post_id;
        $post_details=Post::where('id',$post_id)->first();
        $comment_details=Comment::where('post_id',$post_id)->get();
        return view('post_details',['post_details'=>$post_details,'comment_details'=>$comment_details]);
    }
}
