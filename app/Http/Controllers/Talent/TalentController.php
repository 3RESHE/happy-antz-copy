<?php

namespace App\Http\Controllers\Talent;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Http\Middleware\IsTalent;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TalentController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsTalent::class),
        ];
    }

    public function home()
    {
        return view('users.talent.home');
    }

    public function index()
    {
        // Fetch the latest 3 pending jobs
        $jobs = JobPost::where('status', 'pending')->latest()->take(3)->get();

        return view('users.talent.home', compact('jobs'));
    }

    public function allJobs()
    {
        $jobs = JobPost::where('status', 'pending')->latest()->paginate(5); // Paginated

        return view('users.talent.all-jobs.alljobs', compact('jobs'));
    }
}
