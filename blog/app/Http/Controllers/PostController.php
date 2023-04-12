<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'POST',
            'posts' => Post::all()
        ]);
    }


    public function show($slug)
    {
        return view ('post', [
            'title' => 'SINGLE POST',
            'post' => Post::find($slug)
        ]);
    }
}
