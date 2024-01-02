<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class CategoryShowController
{
    public function index(Category $category)
    {
        return view('admin.categories.show',compact('category'));
    }
}
