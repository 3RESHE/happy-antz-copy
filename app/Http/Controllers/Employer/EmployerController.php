<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
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


    public function jobs()
    {
        return view('users.employer.jobs.jobs');
    }


    public function candidates()
    {

        return view('users.employer.candidates.candidates');
    }

}
