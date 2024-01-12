<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\PostTag;

class PostDestroyController extends BaseController
{
    public function index(Post $post,PostTag $postTag)
    {
        $postTag->delete();
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
