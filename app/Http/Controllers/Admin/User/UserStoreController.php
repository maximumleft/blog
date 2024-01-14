<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserStoreController
{
    public function index(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email' => $data['email']], $data);
        return redirect()->route('admin.user.index');
    }
}
