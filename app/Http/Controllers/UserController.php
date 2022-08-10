<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_emails()
    {
        return User::select('email')->get();
    }
}
