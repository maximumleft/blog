<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class CategoryStoreController
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }
}
