<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;

class PostStoreController
{
    public function index(PostStoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
