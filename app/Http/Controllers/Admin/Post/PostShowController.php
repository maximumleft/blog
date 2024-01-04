<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class PostShowController
{
    public function index(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }
}
