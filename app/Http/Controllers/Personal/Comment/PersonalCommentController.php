<?php

namespace App\Http\Controllers\Personal\Comment;

class PersonalCommentController
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('personal.comment.index',compact('comments'));
    }
}
