<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Middleware\IsEmployer;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class JobPostController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsEmployer::class, except: ['index']),
        ];
    }

    public function index()
    {
        {
            $jobs = JobPost::where('status', 'pending')
                ->where('employer_id', auth()->id()) // Filter jobs by employer
                ->latest()
                ->paginate(5); // Ensure pagination
        
            return view('users.employer.jobs.jobs', [
                'jobs' => $jobs,
                'message' => $jobs->isEmpty() ? 'No active jobs found.' : null
            ]);
        }
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|in:remote,on-site,hybrid',
            'salary_range' => 'nullable|string|max:255',
            'deadline' => 'required|date|after:today',
            'type' => 'required|string|in:full-time,part-time,contract,internship',
        ]);

        Auth::user()->jobPosts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'salary_range' => $request->salary_range,
            'deadline' => $request->deadline,
            'type' => $request->type,
        ]);

        // TODO: handle route redirect
        return redirect()->route('employer.jobs')->with('success', 'Job post created!');
    }

    public function update(Request $request, JobPost $jobPost)
    {
        if ($jobPost->employer_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|in:remote,on-site,hybrid',
            'salary_range' => 'nullable|string|max:255',
            'deadline' => 'required|date|after:today',
            'type' => 'required|string|in:full-time,part-time,contract,internship',
        ]);

        $jobPost->update($request->only('title', 'description', 'location', 'salary_range', 'deadline', 'type'));

        // TODO: handle route redirect
        return redirect()->route('employer.dashboard')->with('success', 'Job post updated!');
    }

    public function destroy(JobPost $jobPost)
    {
        if ($jobPost->employer_id !== Auth::id()) {
            abort(403, 'You can only delete your own job posts.');
        }

        $jobPost->delete();

        // TODO: handle route redirect
        return redirect()->route('employer.dashboard')->with('success', 'Job post deleted!');
    }


}
