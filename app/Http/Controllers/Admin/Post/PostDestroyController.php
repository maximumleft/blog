<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class PostDestroyController
{
    public function index(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
