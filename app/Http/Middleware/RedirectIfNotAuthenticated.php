<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            // Tambahkan pesan flash ketika pengguna belum login
            Session::flash('error', 'Anda harus login terlebih dahulu untuk mengakses halaman ini.');
            
            return redirect()->route('login');
        }

        return $next($request);
    }
}
