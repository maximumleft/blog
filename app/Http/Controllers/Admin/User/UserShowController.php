<?php

namespace App\Http\Controllers\Admin\User;


use App\Models\User;

class UserShowController
{
    public function index(User $user)
    {
        return view('admin.user.show',compact('user'));
    }
}
