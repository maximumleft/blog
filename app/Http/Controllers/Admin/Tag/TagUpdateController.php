<?php

namespace App\Http\Controllers\Admin\Tag;


use App\Http\Requests\Admin\Tag\TagStoreRequest;
use App\Models\Tag;

class TagUpdateController
{
    public function index(TagStoreRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('admin.tag.show',compact('tag'));
    }
}
