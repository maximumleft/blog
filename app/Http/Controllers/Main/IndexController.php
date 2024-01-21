<?php

namespace App\Http\Controllers\Main;


class IndexController
{
    public function index()
    {
        return redirect()->route('post.index');
    }
}
