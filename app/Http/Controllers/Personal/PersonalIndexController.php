<?php

namespace App\Http\Controllers\Personal;

use App\Models\Category;

class PersonalIndexController
{
    public function index()
    {
        return view('personal.main.index');

    }
}
