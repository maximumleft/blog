<?php

namespace App\Http\Controllers\Admin\User;


use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Jobs\UserStoreJob;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserStoreController
{
    public function index(UserStoreRequest $request)
    {
        $data = $request->validated();
        UserStoreJob::dispatch($data);
        return redirect()->route('admin.user.index');
    }
}
