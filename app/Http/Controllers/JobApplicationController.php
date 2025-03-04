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

    public function store(Request $request, JobPost $jobPost)
    {
        $request->validate([
            'cv_path' => 'required|file|mimes:pdf,doc,docx|max:5000',
            'resume_path' => 'required|file|mimes:pdf,doc,docx|max:5000',
        ]);

        if (JobApplication::where('talent_id', Auth::id())->where('job_post_id', $jobPost->id)->exists())
        {
            return redirect()->back()->with('error', 'You have already applied to this job.');
        }

        $cvPath = $request->file('cv_path')->store('applications/cvs', 'public');
        $resumePath = $request->file('resume_path')->store('applications/resumes', 'public');

        Auth::user()->applications()->create([
            'job_post_id' => $jobPost->id,
            'cv_path' => $cvPath,
            'resume_path' => $resumePath, // Placeholder until file upload
        ]);

        // TODO: handle correct route redirect
        return redirect()->route('job_posts.index')->with('success', 'Application submitted!');
    }
}
