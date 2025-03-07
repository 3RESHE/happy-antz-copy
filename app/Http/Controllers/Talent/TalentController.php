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

    public function allJobs(Request $request)
    {
        $query = JobPost::where('status', 'pending')
                        ->with('employer'); // Eager load employer relationship
    
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhereHas('employer', function ($q) use ($search) {
                      $q->where('name', 'like', "%{$search}%"); // Assuming 'name' is the column in users table
                  });
            });
        }
    
        if ($location = $request->input('location')) {
            $query->where('location', $location);
        }
    
        if ($type = $request->input('type')) {
            $query->where('type', $type);
        }
    
        if ($salary = $request->input('salary')) {
            $query->where('salary_range', 'like', "%{$salary}%");
        }
    
        $jobs = $query->latest()->paginate(5);
        $jobs->appends($request->all());
    
        return view('users.talent.all-jobs.alljobs', compact('jobs'));
    }
}
