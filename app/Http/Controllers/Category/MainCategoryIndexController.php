<?php

namespace App\Http\Controllers\Category;


use App\Models\Category;

class MainCategoryIndexController
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index',compact('categories'));
    }
}
