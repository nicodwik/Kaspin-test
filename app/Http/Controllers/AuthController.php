<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        $credentials['deleted_at'] = null;

        if (\Auth::attempt($credentials)) {
            return redirect()->route('user.index');
        }

        return view('login');
    }

    public function logout()
    {
        if(\Auth::check()) {
            \Auth::logout();
        }

        return view('login');
    }
}
