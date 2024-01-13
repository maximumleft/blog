<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;

class UserDestroyController
{
    public function index(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
