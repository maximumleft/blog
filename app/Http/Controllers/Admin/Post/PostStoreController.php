<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostStoreController
{
    public function index(PostStoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::put('/images',$data['preview_image']);
        $data['main_image'] = Storage::put('/images',$data['main_image']);
        Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
