<?php

namespace App\Http\Controllers\Personal;

use App\Models\Category;

class PersonalCommentController
{
    public function index()
    {
        return view('personal.comment.index');

    }
}
