<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsTalent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        if (!$user || !$user->isTalent())
        {
            if ($user->isEmployer())
            {
                return redirect('/employer/dashboard');
            } else {
                return redirect('/login')->with('error', 'You must be a talent to apply.');
            }
        }
        return $next($request);
    }
}
