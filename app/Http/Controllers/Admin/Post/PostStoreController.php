<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostStoreController
{
    public function index(PostStoreRequest $request)
    {
        try {
            $data = $request->validated();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            if (!empty($data['preview_image'])) {
                $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            }
            if (!empty($data['main_image'])) {
                $data['main_image'] = Storage::put('/images', $data['main_image']);
            }
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);
        } catch (\Exception $exception) {
            abort(404);
        }

        return redirect()->route('admin.post.index');
    }
}
