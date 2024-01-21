<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Requests\Personal\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class MainPostCommentStoreController
{
    public function index(Post $post,StoreRequest $request)
    {
        $data = $request->validated();

        $data['user_id']= auth()->user()->id;
        $data['post_id']= $post->id;

        Comment::create($data);

        return redirect()->route('post.show',$post);
    }
}
