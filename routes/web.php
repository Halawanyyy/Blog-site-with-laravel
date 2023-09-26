<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('index');
});
Route::get('/login',function() {
    return view('login');
});
Route::get('/home',[PostController::class,'index']);
Route::get('/post',function() {
    return view('post');
});
Route::get('/post/show/{post_id}',[PostController::class,'show'])->name('post_details');
Route::post('/register',[UserController::class,'regist']);
Route::post('/login',[UserController::class,'login']);
Route::post('/post/create',[PostController::class,'insert']);
Route::post('/comment/add',[CommentController::class,'insert']);

