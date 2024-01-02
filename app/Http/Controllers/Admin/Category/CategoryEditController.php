<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class CategoryEditController
{
    public function index(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }
}
