<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class TagDestroyController
{
    public function index(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }
}
