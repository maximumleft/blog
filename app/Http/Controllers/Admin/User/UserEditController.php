<?php

namespace App\Http\Controllers\Admin\User;


use App\Models\User;

class UserEditController
{
    public function index(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit',compact('user','roles'));
    }
}
