<?php

namespace App\Http\Controllers\Job;

use Exception;
use App\Models\JobPost;
use Illuminate\Http\Request;
use App\Http\Middleware\IsEmployer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class JobPostController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            'auth',
            new Middleware(middleware: IsEmployer::class, except: ['index']),
        ];
    }

    public function index(Request $request)
    {
        $query = JobPost::where('status', 'pending')
            ->where('employer_id', auth()->id());
    
        // Live search
        if ($request->has('search') && $request->search !== '') {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%');
            });
        }
    
        // Sorting
        if ($request->has('sort_by') && $request->has('sort_direction')) {
            $query->orderBy($request->sort_by, $request->sort_direction);
        } else {
            $query->latest(); // Default sorting
        }
    
        $jobs = $query->paginate(10);
    
        // Return JSON for AJAX requests
        if ($request->ajax()) {
            return response()->json([
                'jobs' => $jobs->items(), // Job items
                'pagination' => [
                    'current_page' => $jobs->currentPage(),
                    'last_page' => $jobs->lastPage(),
                    'prev_page_url' => $jobs->previousPageUrl(),
                    'next_page_url' => $jobs->nextPageUrl(),
                    'on_first_page' => $jobs->onFirstPage(),
                    'has_more_pages' => $jobs->hasMorePages(),
                ]
            ]);
        }
    
        return view('users.employer.jobs.jobs', [
            'jobs' => $jobs,
            'message' => $jobs->isEmpty() ? 'No active jobs found.' : null
        ]);
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'location' => 'required|string|in:remote,on-site,hybrid',
                'salary_range' => 'nullable|string|max:255',
                'deadline' => 'required|date|after:today',
                'type' => 'required|string|in:full-time,part-time,contract,internship',
            ]);

            Auth::user()->jobPosts()->create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'location' => $validatedData['location'],
                'salary_range' => $validatedData['salary_range'],
                'deadline' => $validatedData['deadline'],
                'type' => $validatedData['type'],
            ]);

            return redirect()->route('employer.jobs')->with('success', 'Job post created successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            Log::error('Job creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create job post. Please try again.')->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $job = Auth::user()->jobPosts()->findOrFail($id);
            
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'location' => 'required|string|in:remote,on-site,hybrid',
                'salary_range' => 'nullable|string|max:255',
                'deadline' => 'required|date|after:today',
                'type' => 'required|string|in:full-time,part-time,contract,internship',
            ]);

            $job->update($validatedData);

            return redirect()->route('employer.jobs')->with('success', 'Job post updated successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        } catch (Exception $e) {
            Log::error('Job update failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update job post. Please try again.')->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $job = Auth::user()->jobPosts()->findOrFail($id);
            $job->delete();

            return redirect()->route('employer.jobs')->with('success', 'Job post deleted successfully!');
        } catch (Exception $e) {
            Log::error('Job deletion failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to delete job post. Please try again.');
        }
    }

}
