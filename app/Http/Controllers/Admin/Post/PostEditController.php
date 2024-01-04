<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class PostEditController
{
    public function index(Post $post)
    {
        return view('admin.post.edit',compact('post'));
    }
}
