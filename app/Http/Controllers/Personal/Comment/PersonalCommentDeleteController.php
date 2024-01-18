<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class PersonalCommentDeleteController
{
    public function index(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
