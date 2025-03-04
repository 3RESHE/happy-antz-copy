<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    if (Auth::check() && Auth::user()->role !== 'talent') {
        return redirect()->route('employer.dashboard'); // Redirect non-talent users
    }
    return view('users.talent.home');
})->name('talent.dashboard');


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
    Route::get('/dashboard', function () {
        return view('users.employer.dashboard.dashboard');
    })->name('employer.dashboard');
    

    Route::get('/jobs', function () {
        return view('users.employer.jobs.jobs');
    });

    Route::get('/candidates', function () {
        return view('users.employer.candidates.candidates');
    });
});




Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('users.admin.dashboard.dashboard');
    })->name('employer.dashboard');
    

    Route::get('/logs', function () {
        return view('users.admin.logs.admin-logs');
    });

    Route::get('/user-admin', function () {
        return view('users.admin.user-management.admin');
    });

    Route::get('/user-employer', function () {
        return view('users.admin.user-management.employer');
    });

    Route::get('/user-talent', function () {
        return view('users.admin.user-management.talent');
    });
});
