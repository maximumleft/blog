<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class CategoryIndexController
{
    public function index()
    {
        $categories = Category::all() ;
        return view('admin.categories.index',compact('categories'));
    }
}
