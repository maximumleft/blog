<?php

namespace App\Http\Controllers\Admin\User;


use App\Models\User;

class UserEditController
{
    public function index(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }
}
