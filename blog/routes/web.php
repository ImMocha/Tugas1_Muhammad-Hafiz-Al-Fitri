<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;

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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);



// Langsung ngirim Data lewat Route Tanpa Controller
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category $category->name",
        'posts' => $category->posts->load('category','author'),
        'category'=> $category->name
    ]);
});


Route::get('/authors/{author:username}', [AuthorController::class, 'index']);







