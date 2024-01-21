<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class MainPostIndexController
{
    public function index()
    {
        $posts = Post::paginate(6);
        $randomPosts = Post::get()->random(4);
        $lickedPosts = Post::withCount('lickedUsers')->orderBy('licked_users_count', 'DESC')->get()->take(4);

        return view('post.index', compact('posts', 'randomPosts', 'lickedPosts'));
    }
}
