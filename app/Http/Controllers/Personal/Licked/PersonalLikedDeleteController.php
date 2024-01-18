<?php

namespace App\Http\Controllers\Personal\Licked;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PersonalLikedDeleteController
{
    public function index(Post $post)
    {
        Auth::user()->lickedPosts()->detach($post->id);
        return redirect()->route('personal.licked.index');

    }
}
