<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Requests\Personal\Comment\StoreRequest;
use App\Models\Comment;

class PersonalCommentUpdateController
{
    public function index(StoreRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
