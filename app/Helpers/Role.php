<?php

namespace App\Helpers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Role
{
    public static function admin(): bool | RedirectResponse
    {
        if (!Auth::check()) return redirect()->route('login');
        return Auth::user()->is_admin == 1;
    }
}
