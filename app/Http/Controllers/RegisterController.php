<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $credentials = $request->only('email', 'password', 'username');
        
        // Check if the email is already registered
        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            Session::flash('error', 'Email Anda sudah terdaftar.');
            return redirect('/register');
        }

        // Check if the email is already registered
        $user = User::where('username', $credentials['username'])->first();

        if ($user) {
            Session::flash('error', 'Username Anda sudah terdaftar.');
            return redirect('/register');
        }

        $str = Str::random(100);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'verify_key' => $str
        ]);

        $details = [
            'username' => $request->username,
            'name' => $request->name,
            'website' => 'www.pemilihedukatif.com',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message', 'Link verifikasi telah dikirim ke Email Anda. Silahkan Cek Email Anda untuk Mengaktifkan Akun');
        return redirect('register');
    }
    
    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'email_verified_at' => date('Y-m-d H:i:s')
            ]);
            
            return "Verifikasi Berhasil. Akun Anda sudah aktif.";
        }else{
            return "Key tidak valid!";
        }
    }
}