<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\Job\JobApplicationController;
use App\Http\Controllers\Job\JobPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Talent\TalentController;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = JobPost::latest()->take(3)->get();

    if (Auth::check()) {
        $user = Auth::user();


        // Redirect based on role
        switch ($user->role) {
            case 'talent':
                return redirect()->route('talent.dashboard');
            case 'employer':
                return redirect()->route('employer.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            default:
                return abort(403, 'Unauthorized'); // Handle unexpected roles
        }
    }

    return view('users.talent.home', compact('jobs')); // Allow unauthenticated users to access this page
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('employer')->group(function () {
    Route::get('/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
    Route::get('/candidates', [EmployerController::class, 'candidates'])->name('profile.destroy');

    Route::get('/jobs', [JobPostController::class, 'index'])->name('employer.jobs');
    Route::post('/jobs/store', [JobPostController::class, 'store'])->name('jobs.store');
    Route::put('/jobs/{id}/update', [JobPostController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{id}/delete', [JobPostController::class, 'destroy'])->name('jobs.destroy');

});


Route::prefix('talent')->group(function () {

    Route::get('/home/all-jobs', [TalentController::class, 'allJobs'])->name('talent.all_jobs');
    
    Route::get('/home', [TalentController::class, 'index'])->name('talent.dashboard');


    Route::get('/jobs/{id}', [JobApplicationController::class, 'show'])->name('jobs.show');
    Route::post('talent/job_applications', [JobApplicationController::class, 'store'])->name('job_applications.store');
});



Route::prefix('admin')->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logs', [AdminController::class, 'logs'])->name('admin.logs');

    Route::get('/user-admins', [AdminController::class, 'admins'])->name('admin.admins');
    Route::get('/user-employers', [AdminController::class, 'employers'])->name('admin.employers');
    Route::get('/user-talents', [AdminController::class, 'talents'])->name('admin.talents');
});
