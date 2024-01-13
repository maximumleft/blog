<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            Db::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (!empty($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/public/images', $data['preview_image']);
            }
            if (!empty($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/public/images', $data['main_image']);
            }

            $post = Post::firstOrCreate($data);
            if (isset($tagIds)) {
                $post->tags()->attach($tagIds);
            }

            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            Db::beginTransaction();

            if (isset($data['tag_ids'])) {
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            if (!empty($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/public/images', $data['preview_image']);
            }
            if (!empty($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/public/images', $data['main_image']);
            }

            $post->update($data);
            if (isset($tagIds)) {
                $post->tags()->sync($tagIds);
            }

            Db::commit();
        } catch (\Exception $exception) {
            Db::rollBack();
            abort(500);
        }

        return $post;
    }
}
