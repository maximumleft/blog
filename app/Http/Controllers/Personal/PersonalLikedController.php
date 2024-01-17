<?php

namespace App\Http\Controllers\Personal;


class PersonalLikedController
{
    public function index()
    {
        $posts = auth()->user()->lickedPosts();
        return view('personal.licked.index',compact('posts'));

    }
}
