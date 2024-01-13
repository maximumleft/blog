<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Models\User;

class UserStoreController
{
    public function index(UserStoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('admin.user.index');
    }
}
