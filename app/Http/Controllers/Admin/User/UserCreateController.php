<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;

class UserCreateController
{
    public function index()
    {
        $roles = User::getRoles();
        return view('admin.user.create',compact('roles'));
    }
}
