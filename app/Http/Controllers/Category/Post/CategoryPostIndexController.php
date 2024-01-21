<?php

namespace App\Http\Controllers\Category\Post;


use App\Models\Category;

class CategoryPostIndexController
{
    public function index(Category $category)
    {
        $posts = $category->posts()->paginate(6);
        return view('category.post.index',compact('posts'));
    }
}
