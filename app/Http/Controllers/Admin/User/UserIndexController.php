<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;

class UserIndexController
{
    public function index()
    {
        $users = User::all() ;
        return view('admin.users.index',compact('users'));
    }
}
