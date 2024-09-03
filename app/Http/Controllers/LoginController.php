<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User; // Ensure you import the User model

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember');

        // Check if the user is active
        $user = User::where('username', $credentials['username'])->first();

        if ($user && $user->email_verified_at == null) {
            Session::flash('error', 'Akun Anda tidak aktif. Lakukan verifikasi akun');
            return redirect('/login');
        }

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function edit_profil() {
        return view('editprofil');
    }
} redirect('/login');
