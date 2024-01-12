<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\PostStoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostStoreController extends BaseController
{
    public function index(PostStoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }
}
