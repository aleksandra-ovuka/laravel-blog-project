<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

//Homepage
Route::get('/', function () {
    return view('index');
});

//All Posts
Route::get('/blog',[PostController::class, 'blog'])->name('blog');



//Single Post
Route::get('/blog/{post:slug}',[PostController::class, 'show']);

//Register Create
Route::get('/register', [RegisterController::class, 'create']);

//Register Store
Route::post('/register', [RegisterController::class, 'store']);