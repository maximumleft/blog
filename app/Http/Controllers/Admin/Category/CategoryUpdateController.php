<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class CategoryUpdateController
{
    public function index(StoreRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return redirect()->route('admin.category.show',compact('category'));
    }
}
