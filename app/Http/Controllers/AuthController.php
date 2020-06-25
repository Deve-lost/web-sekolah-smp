<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
    	return view('login.login');
    }

    public function postLogin(Request $request)
    {
        $ingat = $request->ingatSaya ? true : false;

    	if (Auth::attempt($request->only('username','password'), $ingat)) {
           return redirect()->route('admin.dashboard');
    	}

    	return redirect()->back()->with('error','');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }
}
