<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Carbon\Carbon;

class MainPostShowController
{
    public function index(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id',$post->category->id)
            ->where('id','!=',$post->id)
            ->get()
            ->take(3);
        return view('post.show',compact('post','date','relatedPosts'));
    }
}
