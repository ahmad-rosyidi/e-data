<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // master //
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, $userType)
    {
        // if (auth()->user()->type == $userType) {
        //     return $next($request);
        // }

        if (auth()->check() && (auth()->user()->status == 0)) {
            Auth::logout();
            // return redirect()->route('login')->with('error', 'Your account is suspended, please contact Admin.');
            return redirect()->route('login')->with('error', 'Invalid email or password...');
        }

        if (auth()->user()->type == $userType && (auth()->user()->status == 1)) {
            return $next($request);
        }

        // abort(404);
        // return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
        return response()->view('auth.errors');
    }
}
