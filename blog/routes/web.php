<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home',[
        'title' => 'HOME'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'ABOUT',
        'name' => 'Muhammad Hafiz Al Fitri',
        'email' => 'alfitrihafiz@gmail.com',
        'image' => 'imageAbout.jpg' 
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
// Single Post
Route::get('/posts/{slug}', [PostController::class, 'show']);











