<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsTalent;
use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsTalent::class),
        ];
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv_path' => 'required|file|mimes:pdf,doc,docx|max:5000',
            'resume_path' => 'required|file|mimes:pdf,doc,docx|max:5000',
            'job_post_id' => 'required|exists:job_posts,id', // Ensure job_post_id is required and valid
        ]);
    
        $cvPath = $request->file('cv_path')->store('applications/cvs', 'public');
        $resumePath = $request->file('resume_path')->store('applications/resumes', 'public');
    
        Auth::user()->applications()->create([
            'job_post_id' => $request->job_post_id, // Use the request data
            'cv_path' => $cvPath,
            'resume_path' => $resumePath,
        ]);
    
        // return redirect()->route('job_posts.index')->with('success', 'Application submitted!');
        return redirect()->back();
    }
    
    


        public function show($id)
    {
        $job = JobPost::findOrFail($id); // Fetch job by ID or show 404 if not found
        return view('users.talent.all-jobs.job-details', compact('job'));
    }

}
