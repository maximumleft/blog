<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostUpdateController extends BaseController
{
    public function index(PostStoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data,$post);

        return redirect()->route('admin.post.show', compact('post'));
    }
}
