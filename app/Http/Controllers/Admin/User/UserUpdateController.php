<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Admin\User\UserUpdateRequest;
use App\Models\User;

class UserUpdateController
{
    public function index(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('admin.user.show',compact('user'));
    }
}
