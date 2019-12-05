<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class CheckRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Check Register Controller
    |--------------------------------------------------------------------------
    |
    | Проверяет наличие пользователя в БД(наличие админа). Если есть хоть 1
    | пользователь, то запрещает регистрацию других пользователей.
    |
    |
    */

    public static function close_register()
    {
        $user = User::first();

        if(empty($user))
            return [];
        else
            return ['register' => false];
    }
}