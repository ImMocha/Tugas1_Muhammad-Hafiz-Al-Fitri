<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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


// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post By Category $category->name",
//         'posts' => $category->posts->load('category','author'),
//         'category'=> $category->name
//     ]);
// });


// Route::get('/authors/{author:username}', [AuthorController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index',[
        'title' => 'Dashboard'
    ]);
})->middleware('auth');



Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');








