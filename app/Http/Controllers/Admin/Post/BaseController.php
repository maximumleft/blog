<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;
use App\Service\PostService;

class BaseController
{
    public $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
