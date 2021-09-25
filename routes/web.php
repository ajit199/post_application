<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;


Route::get('/', [PostController::class, 'postlist']);
Route::view('register', 'registerUser');
Route::view('/login', 'login');
Route::get('/postdetail/{id}', [PostController::class, 'postDetail']);
Route::post('userlogin', [AuthController::class, 'userlogin']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::group(['middleware' => ['userAuth']], function () {
    Route::view('/addPost', 'addPost');
    Route::post('/updatePost', [PostController::class, 'updatePost']);
    Route::get('edit/{id}', [PostController::class, 'editPost']);
    Route::get('delete/{id}', [PostController::class, 'deletePost']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/add-post', [PostController::class, 'addPost']);
    Route::post('/addcomment', [CommentController::class,'addcomment']);
});
