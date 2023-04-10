<?php

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
        'title' => 'ABOUT'
    ]);
});

Route::get('/post', function () {

    $blog_post = [
        [
            'title' => 'Judul Pertama',
            'author' => 'Hafiz',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum non officiis fugiat voluptatem! Fuga voluptatem enim nesciunt dolorum pariatur, temporibus quibusdam hic dolorem voluptatibus unde rem libero deserunt exercitationem sequi minima quaerat reprehenderit non doloribus illo debitis quas nihil voluptas! Odit impedit eveniet quisquam eaque quis natus in modi, assumenda earum autem voluptatibus quae ea doloribus, officia, ut magni fuga minima laudantium esse sint optio doloremque animi provident tempore? Cupiditate quod fuga facere quas harum dignissimos perferendis voluptates ut itaque nisi enim a, unde eligendi earum ipsum natus, illum consequuntur nesciunt assumenda sunt quidem vel sint maiores? Eum, molestias.'
        ],
        [
            'title' => 'Judul Kedua',
            'author' => 'Tika',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsum non officiis fugiat voluptatem! Fuga voluptatem enim nesciunt dolorum pariatur, temporibus quibusdam hic dolorem voluptatibus unde rem libero deserunt exercitationem sequi minima quaerat reprehenderit non doloribus illo debitis quas nihil voluptas! Odit impedit eveniet quisquam eaque quis natus in modi, assumenda earum autem voluptatibus quae ea doloribus, officia, ut magni fuga minima laudantium esse sint optio doloremque animi provident tempore? Cupiditate quod fuga facere quas harum dignissimos perferendis voluptates ut itaque nisi enim a, unde eligendi earum ipsum natus, illum consequuntur nesciunt assumenda sunt quidem vel sint maiores? Eum, molestias.'
        ]
    ];

    return view('post', [
        'title' => 'POST',
        'posts' => $blog_post
    ]);
});












