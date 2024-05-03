<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return back();
    }

    public function login()
    {
        return view('auth.login');
    }
}
