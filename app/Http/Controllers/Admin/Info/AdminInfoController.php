<?php

namespace App\Http\Controllers\Admin\Info;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class AdminInfoController
{
    public function index()
    {
        $usersCount = count(User::all());
        $postsCount = count(Post::all());
        $categoriesCount = count(Category::all());
        $tagsCount = count(Tag::all());
        return view('admin.info.index',compact('usersCount','postsCount','categoriesCount','tagsCount'));
    }
}
