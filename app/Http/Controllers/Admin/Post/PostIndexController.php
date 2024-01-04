<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class PostIndexController
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }
}
