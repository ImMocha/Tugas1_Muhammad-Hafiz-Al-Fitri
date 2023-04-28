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
            'title' => 'ALL POST',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
            
        ]);
    }


    public function show(Post $post)
    {
        return view ('post', [
            'title' => 'SINGLE POST',
            'post' => $post
        ]);
    }
}

