<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('allow_verif_access')) {
            return redirect('/'); // Redirect to homepage or any other page
        }

        $response = $next($request);

        // Remove the session key after the response is prepared
        $request->session()->forget('allow_verif_access');

        return $response;
    }
}
