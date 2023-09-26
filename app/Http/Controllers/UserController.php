<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function regist(Request $request){
        $user=new User();
        $validation=$request->validate([
            'name' =>'required',
            'email' =>'required | unique:users',
            'password' =>'required',
            'gender'=>'required',
            'address'=>'required'
        ],[
            'name.required' =>'Please Enter your name',
            'email.required' =>'Please Enter your email',
            'password.required' =>'Please Enter your password',
            'email.unique'=>'Please Enter valide email',
            'address.required' =>'Please Enter your address',
            'gender.required' =>'Please choose your gender'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=$request->password;
        $user->gender = $request->gender;
        $user->address=$request->address;
        $user->save();
        $user=User::where('email',$request->email)->first();
        session_start();
        $_SESSION['user_id']=$user->id;
        $post=new PostController();
        $post->index();
        return redirect('/home');
    }
    function login(Request $request){
        $validation=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required' =>'Please Enter your email',
            'password.required' =>'Please Enter your password',
        ]);
        $user=User::where('email',$request->email)->first();
        if(empty($user)){
            //$error_message="No User with this data";
            return redirect()->back()->with('error', 'Invalid data entered.');
        }
        else{
            session_start();
            $_SESSION['user_id'] = $user->id;
            $post=new PostController();
            return  $post->index();;
        }
       
    }
}
