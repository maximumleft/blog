<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class TagIndexController
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index',compact('tags'));
    }
}
