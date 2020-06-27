<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use Hash;

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

        return redirect()->route('login');
    }

    // Profil
    public function profil()
    {
        return view('login.profil');
    }

    // Avatar Update
    public function avatarUpdate(Request $request)
    {
        // Validasi
        $request->validate([
            'path' => 'mimes:jpg,jpeg,png'
        ]);

        if (empty($request->path)) {
            $fileMove = $request->fileOri;
        } else {
            Storage::delete('public/'.auth()->user()->path);
            $fileMove = Storage::disk('public')->putFile('avatar', $request->file('path'));
        }

        // Admin
        $neko = [
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'path' => $fileMove
        ];

        $user = User::findOrFail(auth()->user()->id);
        $user->update($neko);

        return redirect()->back()->with('profil','');
    }

    // Ganti Password
    public function gantiPw()
    {
        return view('login.gantiPw');
    }

    public function updatePw(Request $request)
    {
        // Validasi
        $this->validate($request, [
            'sandiLama' => 'required',
            'sandiBaru' => 'required|min:8'
        ]);

        $sandiLama = $request->sandiLama;
        $sandiBaru = $request->sandiBaru;

            if (!Hash::check($sandiLama, Auth::user()->password)) {
                return redirect()->back()->with('errorPw','');
            }else{
                $neko = [
                    'password' => bcrypt($request->sandiBaru)
                ];

                $jquin = User::findOrFail(auth()->user()->id);
                $jquin->update($neko);

                return redirect()->route('admin.dashboard')->with('suksesPw','');
            }
    }
}
