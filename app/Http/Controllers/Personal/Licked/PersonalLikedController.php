<?php

namespace App\Http\Controllers\Personal\Licked;

use Illuminate\Support\Facades\Auth;

class PersonalLikedController
{
    public function index()
    {
        $posts = Auth::user()->lickedPosts;
        return view('personal.licked.index',compact('posts'));

    }
}
