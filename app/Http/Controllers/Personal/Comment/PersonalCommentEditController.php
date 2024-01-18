<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;

class PersonalCommentEditController
{
    public function index(Comment $comment)
    {
        return view('personal.comment.edit',compact('comment'));
    }
}
