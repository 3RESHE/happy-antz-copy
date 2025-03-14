<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsEmployer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if(!$user || !$user->isEmployer())
        {
            if ($user->isTalent())
            {
                // TODO: handle correct redirect route
                return redirect('/talent/home');
            } else {
                return redirect('/')->with('error', 'You are not authorized to access this page');
            }
        }
        return $next($request);
    }
}
