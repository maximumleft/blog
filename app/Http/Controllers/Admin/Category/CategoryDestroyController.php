<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class CategoryDestroyController
{
    public function index(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
