<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class TagShowController
{
    public function index(Tag $tag)
    {
        return view('admin.tag.show',compact('tag'));
    }
}
