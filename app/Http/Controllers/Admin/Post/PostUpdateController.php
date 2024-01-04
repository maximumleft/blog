<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;

class PostUpdateController
{
    public function index(PostStoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('admin.post.show',compact('post'));
    }
}
