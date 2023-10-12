<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts',[
            'title' => 'All Blog',
            'active' => 'blog',
            "posts" => Post::latest()->get()
        ]);
    }

    public function find(Post $post){
        return view('post',[
            "title" => "Post",
            'active' => 'blog',
            "post" => $post
        ]);
    }
}
