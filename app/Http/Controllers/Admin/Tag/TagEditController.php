<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class TagEditController
{
    public function index(Tag $tag)
    {
        return view('admin.tag.edit',compact('tag'));
    }
}
