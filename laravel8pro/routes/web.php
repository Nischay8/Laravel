<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[ClientController::class,'GetAllPost']);


Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('post.getPostByid');

Route::get('/add-post',[ClientController::class,'addPost']);
Route::get('/fluent-string',[FluentController::class,'index'])->name('fluent-string');

Route::get('/users',[UserController::class,'index']);

Route::get('/login',[LoginController::class,'index'])->name('login.index');

Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');



Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');

Route::get('/session/set',[SessionController::class,'storeSession'])->name('session.store');

Route::get('/session/remove',[SessionController::class,'DeleteSessionsData'])->name('session.delete');

Route::get('/posts',[PostController::class,'getAllPost']);

Route::get('/addpost',[PostController::class,'addPost']);

Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/post/{id}',[PostController::class,'getPostByid'])->name('post.getbyid');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delte');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'UpdatePost'])->name('post.update');

Route::get('/inner_join',[PostController::class,'innerJoinCaluse'])->name('post.inner_join');

Route::get('/home',function(){
    return View('index');
});

Route::get('/about',function(){
    return View('about');
});

Route::get('/contact',function(){
    return View('contact');
});

Route::get('/users',[PaginationController::class,'allUsers']);



Route::get('/upload',[UploadController::class,'uploadForm']);

Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadForm');