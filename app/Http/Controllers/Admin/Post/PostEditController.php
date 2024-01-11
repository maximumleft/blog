<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostEditController
{
    public function index(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit',compact('post','categories','tags'));
    }
}
