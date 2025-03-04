<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployerController;

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
    Route::get('/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
    Route::get('/jobs', [EmployerController::class, 'jobs'])->name('profile.destroy');
    Route::get('/candidates', [EmployerController::class, 'candidates'])->name('profile.destroy');
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
