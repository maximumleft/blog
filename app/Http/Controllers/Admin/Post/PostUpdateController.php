<?php

namespace App\Http\Controllers\Admin\Post;


use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostUpdateController
{
    public function index(PostStoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        if (!empty($data['preview_image'])) {
            $data['preview_image'] = Storage::disk('public')->put('/public/images', $data['preview_image']);
        }
        if (!empty($data['main_image'])) {
            $data['main_image'] = Storage::disk('public')->put('/public/images', $data['main_image']);
        }
        $post->update($data);
        $post->tags()->sync($tagIds);
        return redirect()->route('admin.post.show', compact('post'));
    }
}
