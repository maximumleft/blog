<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Requests\Personal\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class MainPostLikeStoreController
{
    public function index(Post $post)
    {
        auth()->user()->lickedPosts()->toggle($post);
        return redirect()->back();
    }
}
