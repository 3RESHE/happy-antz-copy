<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsEmployer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class EmployerController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsEmployer::class),
        ];
    }

    public function dashboard()
    {
        return view('users.employer.dashboard.dashboard');
    }
}
